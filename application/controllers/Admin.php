<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('file');
		$this->config->load('common');
	}
	
	public function index()
	{
		$data['site_name'] = $this->config->item('site_name');
		$data['userId'] = $this->input->post('userId');
		$data['password'] = $this->input->post('password');
		if ((strcmp($this->config->item('user_id'), $data['userId']) != 0) ||
			(strcmp($this->config->item('password'), $data['password']) != 0)) {
			$this->load->view('login', $data);
			return;
		}
		$data['fileList'] = array();
		$data['file'] = '';		
		$text = $this->input->post('data');
		$data['target'] = $this->input->post('target');
		if ($text != '' && $data['target'] != '') {
			$header = "<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>";
			$inputs = array($header, $text);
			write_file(APPPATH.'md/'.$data['target'], implode("\n", $inputs), "w");
		} else if ($data['target'] != '') {
			$fileinfo = get_file_info(APPPATH.'md/'.$data['target']);
			if (!$fileinfo['name']) {
				$data['file'] = ' ';
			} else {
				$text = file_get_contents(APPPATH.'md/'.$data['target']);
				$data['file'] = implode("\n", array_slice(explode("\n", $text), 1));
			}
			$this->load->view('edit', $data);
			return;
		}
		$files = get_dir_file_info(APPPATH.'md/');
		foreach ($files as &$file) {
			if ($file['name'] != 'index.html') $data['fileList'][$file['name']] = $file['name'];
		}
		$this->load->view('edit', $data);
	}

}
