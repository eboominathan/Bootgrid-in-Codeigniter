<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Boot_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	Public function get_datas()
	{
		return $this->db->get('bootgrid_data')->result();
	}
	Public function save()
	{
		$where = array('id' =>$_POST['edit_id']);
		$data = array(
			'first_name' => $_POST['firstname'],
			'last_name' => $_POST['lastname'],
			'email' => $_POST['email'],
			'gender' => $_POST['gender'],
			'country' => $_POST['country'],
			'salary' => $_POST['salary']
		);
		$this->db->update('bootgrid_data',$data,$where);
	}
	Public function delete()
	{
		$where = array('id' =>$_POST['del_id']);
		$this->db->delete('bootgrid_data',$where);
	}

}

/* End of file  */
/* Location: ./application/models/ */