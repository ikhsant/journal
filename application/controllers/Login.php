<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Author_model');
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
		$this->load->view('template/frontend', $data, FALSE);
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
				//Mail Code
				$to         = $user_email;
				$subject    = "Password";
				$txt        = "Your password is $pass .";
				$headers    = "From: eizan.kappa@gmail.com" . "\r\n" .
				"CC: ikhsan.thohir@gmail.com";
				mail($to,$subject,$txt,$headers);
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
		$this->load->view('template/frontend', $data);
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
		$this->load->view('template/frontend', $data);
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
			$this->Author_model->insert($data);
			// send email
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			$to       = $email;
			$subject  = "IJEAT Author Register";
			$message  = 'Thank you for register to IJEAT here is your account:<br>Email: '.$email.'<br>Password: '.$password;
			$headers  = "MIME-Version: 1.0" . "\r\n";
			$headers  .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers  .= 'From: <eizan.kappa@gmail.com>' . "\r\n";
			$headers  .= 'Cc: eizan38@gmail.com' . "\r\n";
			mail($to,$subject,$message,$headers);
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
		$this->load->view('template/frontend', $data);
	}


	// chapta
	public function captcha()
	{
		$num1=rand(1,9); //Generate First number between 1 and 9  
		$num2=rand(1,9); //Generate Second number between 1 and 9  
		$captcha_total=$num1+$num2;  

		$math = "$num1"." + "."$num2"." =";  

		$this->session->set_flashdata('rand_code',$captcha_total);

		$font = 'assets/fonts/arial.ttf';

		$image = imagecreatetruecolor(120, 30); //Change the numbers to adjust the size of the image
		$black = imagecolorallocate($image, 0, 0, 0);
		$color = imagecolorallocate($image, 0, 100, 90);
		$white = imagecolorallocate($image, 0, 26, 26);

		imagefilledrectangle($image,0,0,399,99,$white);
		imagettftext ($image, 20, 0, 20, 25, $color, $font, $math );//Change the numbers to adjust the font-size

		header("Content-type: image/png");
		imagepng($image);
	}


	// cek capta
	public function cek_captcha($captcha)
	{
		$captcha_session = $this->session->flashdata('rand_code'); 

		if ($captcha == $captcha_session) {
			return TRUE;
		}else{
			$this->form_validation->set_message('cek_captcha', 'Wrong Captcha.');
			return FALSE;
		}
	}


}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */