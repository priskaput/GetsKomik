<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if($this->session->userdata('auth')){
			redirect('home_view');
		}
		$this->load->view('login');
	}

	public function proses_login(){
		$dataLogin = $this->login_model->process_login();

		if($this->isAdmin($dataLogin, $this->input->post())){
			$data = [
				'id' => $dataLogin[0]->id,
				'email' => $dataLogin[0]->email,
				'auth' => 1
			];

			$this->session->set_userdata($data);
			return redirect('home');			
		} else {
			$_SESSION['login_failed'] = 'Login Failed';
			return redirect('/');
		}
	}

	private function isAdmin($db, $input){
		if(($db[0]->email == $input['email']) && ($db[0]->password == md5($input['pass']))){
			
			return true;
		} else {
			return false;
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('../');
	}

}
?>
