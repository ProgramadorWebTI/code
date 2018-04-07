<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function logar()
	{
		$usuario = $this->input->post('usuario');
		$senha = $this->input->post('senha');

		if($usuario =="admin" && $senha =='123'):
			$this->session->set_userdata("logado",1);
			redirect('panel');
		else:
			$data['erro'] = "Usuário/Senha incorretos";
			$this->load->view('v_login', $data);
		endif;
	}

	public function sair(){
		unset($_SESSION['logado']);
		redirect('Login/logar');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */