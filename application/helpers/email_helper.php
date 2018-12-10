<?php
if ( ! function_exists('email_helper'))
{
	function send($tujuan,$judul,$isi)
		{
			$this->load->library('email');

			$this->email->from('eizan.kappa@gmail.com', 'Journal Nusa Putra');
			$this->email->to($tujuan);
			// $this->email->cc('another@another-example.com');
			// $this->email->bcc('them@their-example.com');

			$this->email->subject($judul);
			$this->email->message($isi);

			$this->email->send();
		}	
}