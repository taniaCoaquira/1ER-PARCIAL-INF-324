<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fis extends CI_Controller {

	public function index()
	{
		$this->load->view('fis');
	}
}
