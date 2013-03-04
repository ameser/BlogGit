<?php
class Blog extends CI_Controller{
	function Blog()   {
    parent::__construct(); 
    // load helpers
    $this->load->helper('url');
	$this->load->helper('form');
  }
  			// obtener entradas del blog
			function index(){
				$data['titulo']="Blog DINBIT";
				$data['Encabezado']="Encabezado";
				$data['where'] = $this->db->where("estatus", 1);
				$data['query']=$this->db->get('entradas');
			
			$this->load->view('blog_views', $data);
			}
			// obtener comentarios de una entrada del blog
			function comments()
			{
				$data['titulo']="Comentarios";
				$data['Encabezado']="Encabezado";
				$this->db->where('NFK_idEntrada', $this->uri->segment(3));// se puede escribir de esta forma
				$this->db->where('estatus', 1);// o de esta array('id' => $id)
				$data['query']=$this->db->get('comentarios');
				$this->load->view('comment_views', $data);
			}
			//Insertar comentarios en una entrada del blog
			function comment_insert()
			{
				/*$data['titulo']="Insertar comentarios";
				$data['Encabezado']="inserta comentarios";*/
				$this->db->insert('comentarios', $_POST);
				redirect('blog/comments/'.$_POST['NFK_idEntrada']);
			}
}
?>