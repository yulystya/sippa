<?php 

class Kategori extends CI_Controller{
	public function percetakan()
	{
		$data['percetakan']	= $this->model_kategori->data_percetakan()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('percetakan',$data);
		$this->load->view('templates/footer');
	}

	public function jasa()
	{
		$data['jasa'] = $this->model_kategori->data_jasa()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('jasa',$data);
		$this->load->view('templates/footer');
	}
} ?>