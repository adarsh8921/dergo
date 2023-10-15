<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motomap_controller extends CI_Controller {

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

	 public function __construct()
{
    parent::__construct();
    $this->load->library('session');
}

	public function index()
	{
		// print_r($this->Motomap_model->sdsdsd());
		// die();
	    //header content start
	    // $data['brand']=$this->HM_model->show_all_brands();
	    // $data['model']=$this->HM_model->show_all_models();
	    // $data['variant']=$this->HM_model->show_all_variants();
	    //header content end
	    
	    // $this->load->view('public/header',$data);
	    $this->load->view('onepage2');
		// $this->load->view('public/footer');
	}


	
    

}