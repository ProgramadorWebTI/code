<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends MY_Controller {

	public function index()
	{
		$this->load->view('v_panel');
	}

}

/* End of file Panel.php */
/* Location: ./application/controllers/Panel.php */