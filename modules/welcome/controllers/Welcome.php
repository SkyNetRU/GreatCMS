<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Welcome extends MX_Controller {

    function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$data = array();

        $data += $this->settings;
        //var_dump($data);
        $data['content'] = ' Welcome page with new controllers';
        //$this->main_lib->render_main_page($data);
        $data['this_page'] = 'site/index.tpl.twig.php';
        $this->twig->show('site/index.tpl',$data);
        //$this->twig->show('welcome_message_hmvc',$data);
	}

    public function hmvc()
    {
        $data = array();
        $data['content'] = ' Welcome page with new controllers';
        //$this->main_lib->render_main_page($data);
        $this->twig->show('welcome_message_hmvc',$data);
    }

}
