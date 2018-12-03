<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class Karyawan extends CI_Controller {                  
        private $username;
        private $nama;
        private $posisi;
        private $password;
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model("Karyawan_Model");
			$this->load->database();
		}
		public function index(){
			$this->load->view('welcome_message');
		}		
		public function postKaryawan(){
			$input_data = json_decode($this->input->raw_input_stream, true);
            $username = $input_data['username'];
            $nama = $input_data['nama'];
            $posisi = $input_data['posisi'];
			$password = $input_data['password'];
			$karyawan = array(
				"username" => $username,
				"nama" => $nama,
				"posisi" => $posisi,
				"password" => $password
			);


			$karyawan = (object)$karyawan;
			$this->Karyawan_Model->insertKaryawan($karyawan);
           
            $success = array(
				"berhasil" => "true"
			);
			echo "Berhasil";
		}
		public function catalog(){
			$catalogKaryawan = array(
				array("id" => "1",
				"catalogName" => "Barang satu"),
				array("id" => "2",
				"catalogName" => "Barang dua"),
				array("id" => "3",
				"catalogName" => "Barang tiga")
			);
			echo json_encode($catalogKaryawan, JSON_PRETTY_PRINT);
		}
	}
?>
