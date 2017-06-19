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
        $data['content'] = ' Welcome page with new controllers';
        $data['this_page'] = 'site/index.tpl.php';
        $this->parser->parse("site/index.tpl", $data);
	}

    public function hmvc()
    {
        $data = array();
        $data['content'] = ' Welcome page with new controllers';
        $this->parser->parse("site/welcome_message_hmvc", $data);
    }

}
