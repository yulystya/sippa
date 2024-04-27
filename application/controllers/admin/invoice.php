<?php 

class Invoice extends CI_Controller{

	public function __construct(){
		parent::__construct();

		// if($this->session->userdata('role_id') != '1'){
		// 	$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
		// 	Anda Belum Login!
		// 	 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
		// 	  	</button>
		// 	 </div>');
		// 	redirect('auth/login');

		// }
	}
	
	public function index()
	{
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/invoice',$data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_invoice)
	{
		$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
		$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoice',$data);
		$this->load->view('templates_admin/footer');
	}

	public function print()
	{
		$data['invoice'] = $this->model_invoice->tampil_data('tb_invoice');
		$this->load->view('print_data_invoice', $data);
	}
	public function approve ($id_invoice){
		$data=$this->model_invoice->ambil_id_invoice($id_invoice);
		$this->db->set('approve', 1);
		$this->db->where('id', $id_invoice);
		$this->db->update('tb_invoice');
		redirect('admin/invoice/detail/'.$id_invoice);
		//redirect(header("location:javascript://history.go(-1)"));
		//var_dump($data); 
		//die();
	}
} ?>