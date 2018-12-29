<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Author_model');
		
		// cek akses level
		// if ($this->session->userdata('akses_level') == 'admin') {
		// 	redirect(base_url('admin'),'refresh');
		// }elseif($this->session->userdata('akses_level') == 'author'){
		// 	redirect(base_url('paper/submited'),'refresh');
		// }
		// end cek akses level
	}

	public function index()
	{
		// Validasi
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$email     = $this->input->post('email');
		$password  = $this->input->post('password');
		
		if($this->form_validation->run()) {
			$user = $this->Crud_model->select('user','*','email ="'.$email.'" AND password = "'.$password.'"');
			if ($user->num_rows() > 0) {
				$row = $user->row();
				$this->session->set_userdata('id_user',$row->id_user);
				$this->session->set_userdata('akses_level',$row->akses_level);
				$this->session->set_userdata('nama',$row->name);
				$this->session->set_userdata('email',$row->email);
				// pesan sukses
				$this->session->set_flashdata('success', 'Success');
				// redirek
				if ($row->akses_level == 'admin') {
					redirect(base_url('admin'),'refresh');
				}else{
					redirect(base_url('paper/submited'),'refresh');
				}
				
			}else{
				$this->session->set_flashdata('error', 'Email or Password incorrect');
			}

		}
		// End validasi

		$data['page'] = 'page/login';
		$this->load->view('template/backend', $data, FALSE);
	}

	// forgotpassword
	public function forgotpassword()
	{
		$submit=$this->input->post('forgot_pass');
		if(isset($submit)){
			$email=$this->input->post('email');
			$query=$this->Crud_model->select('user','*','email = "'.$email.'"');
			if ($query->num_rows() > 0) {
				$row        =$query->row();
				$user_email =$row->email;
				$pass       =$row->password;

				//Kirim email
				$setting = $this->Crud_model->select('setting','*')->row();
				$judul = 'Forgot Password - '.$setting->nama_website;
				$isi = 'Your password is <b>'.$pass.'</b><br>Login in '.base_url('login');
				$this->kirimEmail($user_email,$judul,$isi);
				// end kirim email
				
				// set message
				$this->session->set_flashdata('success', 'Password send to your mail, Please check on your inbox');
				// redirect
				redirect(base_url('forgotpassword'),'refresh');
			}else{
				$this->session->set_flashdata('error', 'Email Not Found');
				redirect(base_url('forgotpassword'),'refresh');
			}
		}
		$data['page'] = 'page/forgotpassword';
		$this->load->view('template/backend', $data);
	}

	// Logout
	public function logout() 
	{
		session_destroy();
		$this->session->set_flashdata('success', 'Berhasil');
		redirect(base_url('login'),'refresh');
	}

	// register
	public function register()
	{
		$data = array(
			'button'      => 'Create',
			'name'  	  => set_value('name'),
			'title'       => set_value('title'),
			'address1'    => set_value('address1'),
			'address2'    => set_value('address2'),
			'city'        => set_value('city'),
			'country'     => set_value('country'),
			'phone'       => set_value('phone'),
			'email'       => set_value('email'),
			'zip'         => set_value('zip'),
			'institution' => set_value('institution'),
			'category'    => set_value('category'),
			'password'    => set_value('password'),
		);
		$data['page'] = 'page/register';
		echo $this->session->userdata('rand_code');
		$this->load->view('template/backend', $data);
	}

	// register action
	public function register_action() 
	{
		$this->_rulesRegister();

		if ($this->form_validation->run() == FALSE) {
			$this->register();
		} else {
			$data = array(
				'title'       => $this->input->post('title',TRUE),
				'name'       => $this->input->post('name',TRUE),
				'address1'    => $this->input->post('address1',TRUE),
				'address2'    => $this->input->post('address2',TRUE),
				'city'        => $this->input->post('city',TRUE),
				'country'     => $this->input->post('country',TRUE),
				'phone'       => $this->input->post('phone',TRUE),
				'email'       => $this->input->post('email',TRUE),
				'zip'         => $this->input->post('zip',TRUE),
				'institution' => $this->input->post('institution',TRUE),
				'category'    => $this->input->post('category',TRUE),
				'password'    => $this->input->post('password'),
				'akses_level' => 'author',
			);
			// masukan ke db
			$this->Author_model->insert_user($data);

			//Kirim email
			$user_email = $this->input->post('email');
			$password   = $this->input->post('password');
			$setting    = $this->Crud_model->select('setting','*')->row();
			$judul      = 'Author Registration - '.$setting->nama_website;
			$isi        = 'Thank you for register to '.$setting->nama_website.' here is your account:<br>Email: '.$user_email.'<br>Password: <b>'.$password.'</b><br>Login:'.base_url('login');
			$this->kirimEmail($user_email,$judul,$isi);
			// end kirim email

			// set sukses mesage
			$this->session->set_flashdata('message', 'Create Record Success');
			redirect(site_url('register_success'));

		}
	}

    // rulers register
	public function _rulesRegister() 
	{
		// $this->form_validation->set_rules('captcha', 'captcha', 'callback_cek_captcha');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('address1', 'address1', 'trim|required');
		$this->form_validation->set_rules('address2', 'address2', 'trim|required');
		$this->form_validation->set_rules('city', 'city', 'trim|required');
		$this->form_validation->set_rules('country', 'country', 'trim|required');
		$this->form_validation->set_rules('phone', 'phone', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[author.email]|valid_email', array('is_unique' => 'Email already registered'));
		$this->form_validation->set_rules('zip', 'zip', 'trim|required');
		$this->form_validation->set_rules('institution', 'institution', 'trim|required');
		$this->form_validation->set_rules('category', 'category', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class ="text-danger">', '</span>');
	}

	// page register_success
	public function register_success()
	{
		$data['page'] = 'page/register_success';
		$this->load->view('template/backend', $data);
	}

	// function kirim email
	public function kirimEmail($tujuan,$judul,$isi)
	{
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$this->email->from('eizan.kappa@gmail.com'); // email pengirim
		$this->email->to($tujuan); // tujuan
		$this->email->subject($judul); // judul email
		$this->email->message($isi);
		$this->email->send();
  }


}

	/* End of file Login.php */
/* Location: ./application/controllers/Login.php */