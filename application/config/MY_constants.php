<?php
if ( ! defined('BASE_URL'))
{
    $_base_path = $_SERVER['HTTP_HOST'].str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

    if ( ! empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' OR $_SERVER['SERVER_PORT'] == 443)
    {
        define('BASE_URL', "https://".$_base_path);
    }
    else
    {
        define('BASE_URL', "http://".$_base_path);
    }
}

/* End of file MY_constants.php */
/* Location: ./config/MY_constants.php */