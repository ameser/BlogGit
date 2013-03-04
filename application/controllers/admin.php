<?php
class Admin extends CI_Controller{
	function Admin()   {
    parent::__construct(); 
    // load helpers
    $this->load->helper('url');
	$this->load->helper('form');
  }
			function index(){
				$data['titulo']="Administrador de Comentarios";
				$data['Encabezado']="Administrador de Comentarios";
				$this->db->where('estatus', 1);// o de esta array('id' => $id)
				$data['query']=$this->db->get('comentarios');
				//$data['menu']=menu();
				$this->load->view('admin_view_activos', $data);
			}
			function delete_comment()
			{
				$this->db->where('NPK_idcomentario', $this->uri->segment(3));// se puede escribir de esta forma
				$this->db->where('estatus', 1);// o de esta array('id' => $id)
				$this->db->set('estatus', 0);
				$data['query']=$this->db->update('comentarios');
				redirect('admin/');
			}
			function activate_comment()
			{
				$this->db->where('NPK_idcomentario', $this->uri->segment(3));// se puede escribir de esta forma
				$this->db->where('estatus', 0);// o de esta array('id' => $id)
				$this->db->set('estatus', 1);
				$data['query']=$this->db->update('comentarios');
				redirect('admin/banned_comments');
			}
			function banned_comments(){
				$data['titulo']="Comentarios Desactivados";
				$data['Encabezado']="Comentarios Desactivados";
				$this->db->where('estatus', 0);// o de esta array('id' => $id)
				$data['query']=$this->db->get('comentarios');
				$this->load->view('admin_view_inactivos', $data);
			}
}
?>