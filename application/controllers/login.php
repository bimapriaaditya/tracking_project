<?php

class Login extends CI_Controller
{
	function index()
	{
		$this->load->view('v_login');
	}

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_login');
	}

	function aksi_login(){
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

		$cek_admin=$this->m_login->login_admin($username,$password);

		if($cek_admin->num_rows() > 0){	//Cek Table Admin
			$data=$cek_admin->row_array();
			$this->session->set_userdata('masuk',TRUE);
			redirect('page_admin');
		}else{	//Cek Table Pimpinan 
			$cek_pimpinan=$this->m_login->login_pimpinan($username,$password);
			if($cek_pimpinan->num_rows() > 0) {
				$data=$cek_pimpinan->row_array();
				$this->session->set_userdata('masuk',TRUE);
				redirect('page');
			}else{	// Jika Username & password Admin / Pimpinan Salah 
				$url=base_url();
                echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                            redirect($url);
			}	
		}
	}
}

 function logout(){
 	$this->session->session_destroy();
 	$url=base_url('');
 	redirect($url);
 }
?>