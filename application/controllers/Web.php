<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }



	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data["Judul"] = "Halaman Judul"; 
		// $data["Name"] = "Teguh Fajar"; 
		// var_dump($data["Kampus"]);die();
		$this->load->view('v_index', $data);
	}

	public function about()
	{
		$data['judul'] = "Halaman About";
		$this->load->view('v_header', $data);
		$this->load->view('v_about', $data);
		$this->load->view('v_footer', $data);
        

	}

	public function contact()
	{
		$data["meta"] = ["title" => "Contact Us"];
		if ($this->input->method() == 'post') {
			print_r($this->input->post());
		} else {
			$this->load->view('contact', $data);
		} 
		$this->load->view('about', $data);
	}
	// public function parsing()
	// {
		
	// 	$this->load->view('contoh', $data);
	// }
}