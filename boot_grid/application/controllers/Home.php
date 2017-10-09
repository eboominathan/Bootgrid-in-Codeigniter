<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('boot_model','boot');
	}

	public function index()
	{
		$data['data'] = $this->boot->get_datas();
		$this->load->view('home',$data);
	}
	Public function save()
	{
		$this->boot->save();
		$this->session->set_flashdata('msg', 'Data updated successfully !');
		redirect('home');
	}
	Public function delete()
	{
		$this->boot->delete();
		$this->session->set_flashdata('msg', 'Data deleted successfully !');
		redirect('home');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */