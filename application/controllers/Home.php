<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        $data['title'] = 'Capelectrotek &#8739; Creative Business & Consultancy';
        $data['faviconpartpath'] = base_url().'assets/img/logo-1.png';

        $this->load->view('includes/header', $data);
        $this->load->view('view_home', $data);
        $this->load->view('includes/footer', $data);	        
	}
}
