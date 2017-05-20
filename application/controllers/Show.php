<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('markdown');
		$this->config->load('common');
	}

	public function index($file = 'index')
	{
		$data['site_name'] = $this->config->item('site_name');
		preg_match('/^[a-zA-Z0-9]+$/', $file, $matches, PREG_OFFSET_CAPTURE);
		if (count($matches) == 0) {
			$data['content'] = $this->markdown->parse('# 404 Not Found.');
		} else {
			$data['content'] = $this->markdown->parse_file(APPPATH.'md/'.$file.'.php');
		}
		if ($data['content']  == '') {
			$data['content'] = $this->markdown->parse('# 404 Not Found.');
		}
		$this->load->view('pages', $data);
	}

}
