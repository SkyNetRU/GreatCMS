<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('Page_Construct')) {
    function Page_Construct($page = null)
    {
        if (!$page) {
            return false;
        }

        $html = '';
        $fluid = false;
        $tag_open = false;
        $content = json_decode($page->content);
        //var_dump($content);
        foreach ($content as $key => $container) {
            $row = Create_row($container);
            //echo  $row;
            $fluid = $container->fluid == 'true' ? 'container-fluid' : 'container';
            $html .= '<div class="' . $fluid . '">'.$row.'</div>';
        }
        echo $html;
        return $html;

    }
}



//    function Create_container () {
//
//    }
//
//    function Create_row ($row) {
//        $attr = '';
//        foreach ($row as $attr_name => $val) {
//            if ($attr_name == 'columns') {
//                continue;
//            }
//            $attr .= ' data-'.$attr_name.'="'.$val.'" ';
//        }
//
//
//        //Create Columns
//        $col = '';
//        foreach ($row as $col){
//            $col .= Create_col ($col);
//        }
//
//        $row = '<div class="row" '.$attr.' >'.$col.'</div>';
//        return $row;
//    }

if ( ! function_exists('Create_row')) {
    function Create_row($row)
    {
        $attr = $cols = $class = $css = $id = '';
        foreach ($row as $attr_name => $val) {
            if ($attr_name != 'columns') {
                $attr .= ' data-' . $attr_name . '="' . $val . '" ';
            }

            switch ($attr_name) {
                case 'class' :
                    $class .= ' ' . $val . ' ';
                    break;

                case ((($attr_name == 'color' or $attr_name == 'padding' or $attr_name == 'margin') and $val) ? $attr_name : null):
                    $css .= ' ' . $attr_name . ': ' . $val . '; ';
                    break;

                case (($attr_name == 'id') and $val) :
                    $id .= $val;
                    break;

                case (strpos($attr_name, 'background') !== false) :
                    if ($val) {
                        if ($attr_name == 'background_image'){
                            $css .= ' ' . str_replace('_', '-', $attr_name) . ': url(' . $val . '); ';
                        } else {
                            $css .= ' ' . str_replace('_', '-', $attr_name) . ': ' . $val . '; ';
                        }
                    }
                    break;

                //Create Columns
                case 'columns' :
                    foreach ($val as $col) {
                        $cols .= Create_col($col);
                    }
                    break;
            }
        }

        $row = '<div class="row ' . $class . '" style="' . $css . '" ' . $attr . ' >' . $cols . '</div>';
        return $row;
    }
}

if ( ! function_exists('Create_col')) {
    function Create_col($col)
    {
        $attr = $css = $class = $rows = '';
        foreach ($col as $attr_name => $val) {

            if ($attr_name != 'rows') {
                $attr .= ' data-' . $attr_name . '="' . $val . '" ';
            }

            switch ($attr_name) {
                case 'class' :
                    $class .= ' ' . $val . ' ';
                    break;

                case ((($attr_name == 'color' or $attr_name == 'background_color') and  $val) ? $attr_name : null) :
                    $css .= ' '.$attr_name.': ' . $val . '; ';
                    break;

                case ((strpos($attr_name, '_offset') !== false) and $val) :
                    $type = str_replace('_offset', '', $attr_name);
                    $class .= ' col-' . $type . '-offset-' . $val . ' ';
                    break;

                case (strpos($attr_name, 'width_') !== false) :
                    $type = str_replace('width_', '', $attr_name);
                    $class .= ' col-' . $type . '-' . $val . ' ';
                    break;

                case 'rows' :
                    foreach ($val as $row) {
                        $rows .= Create_row($row);
                    }
                    break;
            }

        }

        $cols = "<div class='column " . $class . "' " . $attr . " style='" . $css . "' >" . $rows . "</div>";
        return $cols;
    }
}




//    foreach ($content as $key => $container) {
//        //Changed container fluid, close and create new Container
//        if ($tag_open and $fluid != ($container->fluid == 'true')){
//            $html .= '</div>';
//            $fluid = $container->fluid == 'true' ? true : false;
//            $html .= '<div class="'.$fluid ? 'container-fluid' : 'container'.'">';
//            $tag_open = true;
//        }
//
//        //Container div not opened
//        if (!$tag_open){
//            $fluid = $container->fluid == 'true' ? true : false;
//            $html .= '<div class="'.$fluid ? 'container-fluid' : 'container'.'">';
//            $tag_open = true;
//        }
//
//        //create rows...
//        $html .= Create_row ($container);
//
//
//        //If last element close Container div tag
//        if (($key + 1) == count($content)){
//            $html .= '</div>';
//        }
//    }

