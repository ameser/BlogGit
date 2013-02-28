<?php
class Blog extends CI_Controller{
	function Blog()   {
    parent::__construct(); 
    // load helpers
    $this->load->helper('url');
	$this->load->helper('form');

  }
			function index(){
				$data['titulo']="Blog DINBIT";
				$data['Encabezado']="Encabezado";
				$data['query']=$this->db->get('entradas');
			
			$this->load->view('blog_views', $data);
			}
			function comments()
			{
				$data['titulo']="Comentarios";
				$data['Encabezado']="Encabezado";
				$this->db->where('NFK_idEntrada', $this->uri->segment(3));
				$data['query']=$this->db->get('comentarios');
				$this->load->view('comment_views', $data);
			}
			function comment_insert()
			{
				/*$data['titulo']="Insertar comentarios";
				$data['Encabezado']="inserta comentarios";*/
				$this->db->insert('comentarios', $_POST);
				redirect('blog/comments/'.$_POST['NFK_idEntrada']);
			}
}
?>