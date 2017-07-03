<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Class MY_Layout
 */
class Layout
{
    public $locale = 'site';
    public $header;
    public $footer;
    public $content;
    public $sidebar = true;
    public $quick_sidebar = true;
    public $page_head = true;
    public $breadcrumb = true;
    public $assets = array();
    public $CI;
    public $css = array();
    public $top_js = array();
    public $bottom_js = array();
    public $bottom_js_ie9 = array();
    public $view_js = array();
    public $sidebar_closed = false;
    public $hide_logo = false;

    public function __construct () {
        $this->CI =& get_instance();
        $this->CI->config->load('assets');
    }



    /**
     * Render Layout
     * @param string $views
     * @param array $data
     * @param bool $return
     * @return string
     */
    public function _render($views = '', $data = array(), $return = false)
    {

        //Define template parts paths
        if ($this->locale == 'admin') {
            $this->header = 'admin/template/head';
            $this->content = 'admin/template/content';
            $this->footer = 'admin/template/footer';

        } else if ($this->locale == 'site') {
            $this->header = 'site/template/head';
            $this->content = 'site/template/content';
            $this->footer = 'site/template/footer';
        }

        $this->assets = $this::_assets($this->locale);

        //Render Header
        if ($this->header) {
            $data['hide_logo'] = $this->hide_logo;
            $data['asset_css'] = $this->assets['asset_css'];
            $data['asset_top_js'] = $this->assets['asset_top_js'];
            $data['sidebar_closed'] = $this->sidebar_closed;
            $header = $this->CI->load->view($this->header, $data, $return);
        }

        //Render Sidebar
        if ($this->sidebar){
            $data['sidebar'] = $this->CI->load->view('admin/template/sidebar', $data, true);
        } else {
            $data['sidebar'] = '';
        }

        //Render Quick Sidebar
        if ($this->quick_sidebar){
            $data['quick_sidebar'] = $this->CI->load->view('admin/template/quick_sidebar', $data, true);
        } else {
            $data['quick_sidebar'] = '';
        }

        //Render Page Head
        if ($this->page_head){
            $data['page_head'] = $this->CI->load->view('admin/template/page_head', $data, true);
        } else {
            $data['page_head'] = '';
        }

        //Render Breadcrumb
        if ($this->breadcrumb){
            $data['breadcrumb'] = $this->CI->load->view('admin/template/breadcrumb', $data, true);
        } else {
            $data['breadcrumb'] = '';
        }


        //Prepare Content
        if (is_array($views)) {
            $content = '';
            foreach ($views as $view) {
                $content .= $this->CI->load->view($view, $data, true);
            }
        } else {
            $content = $this->CI->load->view($views, $data, true);
        }

        //Pattern get all scripts
        $regex = "/\<script(.*?)?\>(.|\\n)*?\<\/script\>/i";

        //Save it to array
        preg_match_all($regex, $content, $scripts);

        //Remove all scripts from Content and add it to bottom_js
        foreach ($scripts[0] as $script) {
            $content = str_ireplace($script, '', $content);
            $this->assets['asset_bottom_js'] .= $script;
        }

        //Render Content
        if ($this->content) {
            $data['content'] = $content;
            $content = $this->CI->load->view($this->content, $data, $return);
        }


        //Render Footer
        if ($this->footer) {
            $data['asset_bottom_js_ie9'] = $this->assets['asset_bottom_js_ie9'];
            $data['asset_bottom_js'] = $this->assets['asset_bottom_js'];
            $footer = $this->CI->load->view($this->footer, $data, $return);
        }

        if ($return){
            return $header.$content.$footer;
        }
    }


    /**
     * Render Assets Js's and CSS's
     * @param string $part
     * @return array
     */
    final function _assets ($part = 'site') {
        $asset_css = $asset_top_js = $asset_bottom_js = '';
        $css_s = array_merge($this->CI->config->item('global')['css'], $this->CI->config->item($part)['css'], $this->css);
        $top_js_s = array_merge($this->CI->config->item('global')['top_js'], $this->CI->config->item($part)['top_js'], $this->top_js);
        $bottom_js_s = array_merge($this->CI->config->item('global')['bottom_js'], $this->CI->config->item($part)['bottom_js'], $this->bottom_js);
        $bottom_jss_ie9 = array_merge($this->CI->config->item('global')['bottom_js_ie9'], $this->bottom_js_ie9);

        foreach ($css_s as $css) {

            if (is_array($css)){
                $asset_css .= '<link href="'.$css['file'].'" rel="stylesheet"  type="text/css" id="'.$css['id'].'" />';
            } else {
                $asset_css .= '<link href="'.$css.'" rel="stylesheet" type="text/css" />';
            }
        }

        foreach ($top_js_s as $top_js) {
            $asset_top_js .= '<script src="'.$top_js.'" type="text/javascript"></script>';
        }

        foreach ($bottom_js_s as $bottom_js) {
            $asset_bottom_js .= '<script src="'.$bottom_js.'" type="text/javascript"></script>';
        }

        $asset_bottom_js_ie9 = '<!--[if lt IE 9]>';
        foreach ($bottom_jss_ie9 as $bottom_js_ie9) {
            $asset_bottom_js_ie9 .= '<script src="'.$bottom_js_ie9.'" type="text/javascript"></script>';
        }
        $asset_bottom_js_ie9 .= '<![endif]-->';

        return array (
            'asset_css' => $asset_css,
            'asset_top_js' => $asset_top_js,
            'asset_bottom_js' => $asset_bottom_js,
            'asset_bottom_js_ie9' => $asset_bottom_js_ie9
        );
    }
}