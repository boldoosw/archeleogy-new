<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class browserfile extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('getfiles', '', TRUE);
	}

	public function index()
	{
		$data["infopic"] = $this->getfiles->getinfo();
		$this->render("apanel/browserfile", $this->data);
	}

}