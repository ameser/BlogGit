<?php
class Menu extends CI_Controller{
	function Menu()   {
    parent::__construct(); 
    // load helpers
    $this->load->helper('url');
	$this->load->helper('form');

  }
			function index(){
				$data['activos']=anchor('admin/', 'Comentarios Activos...').'/';
				$data['inactivos']=anchor('admin/banned_comments/', 'Comentarios Inactivos...').'/';
				$data['entradas']=anchor('blog/', 'Entradas de Blog').'/';
				$this->load->view('menu_view', $data);			
			}
}
?>