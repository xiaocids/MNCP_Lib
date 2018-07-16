<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
  	parent::__construct();
  	$this->load->library('Layouts');
  }

  	public function index()
  	{
  		$this->layouts->set_title('Home');
  		$this->layouts->add_include('css/init.css')
  		->add_include('css/button.css');
  		$this->layouts->view('home');
  	}
}
 ?>
