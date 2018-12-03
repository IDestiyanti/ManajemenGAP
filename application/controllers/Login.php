<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class Login extends CI_Controller {
		private $username = "arif";
		private $password = "12345";
		public function __constructor(){
			$this->load->helper('url');
		}
		
		public function postLogin(){
			$input_data = json_decode($this->input->raw_input_stream, true);
			$username = $input_data['username'];
			$password = $input_data['Password'];
			$success = array(
				"berhasil" => "true"
			);
			if($this->username === $username && $this->password === $password){
				echo json_encode($success);
			}
		}
	}
?>
