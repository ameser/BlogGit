<?php
class Wurfl extends CI_Controller{
	function Wurfl()   {
    parent::__construct(); 
    // load helpers
    $this->load->helper('url');
	$this->load->helper('form');

  }
			function index(){
				$this->load->view('wurflCloud/test/test');			
			}
}
?>