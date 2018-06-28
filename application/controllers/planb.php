<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class planb extends CI_Controller {

	
	public function index()
	{
		$header_data['title']="Plan B";
		$this->load->view('include/header',$header_data);
	}
}
