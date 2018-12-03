<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class Penitip extends CI_Controller {                  
        private $username;
        private $nama;
        private $posisi;
        private $password;
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model("Penitip_Model");
			$this->load->database();
		}
		public function index(){
			$this->load->view('welcome_message');
		}		
		public function postPenitip(){
			$input_data = json_decode($this->input->raw_input_stream, true);
            $id_penitip = $input_data['id_penitip'];
            $nama = $input_data['nama'];
            $no_hp = $input_data['no_hp'];
			$penitip = array(
				"id_penitip" => $id_penitip,
				"nama" => $nama,
				"no_hp" => $no_hp
			);

			$penitip = (object)$penitip;
			$this->Penitip_Model->insertPenitip($penitip);
           
            $success = array(
				"berhasil" => "true"
			);
			echo "Berhasil";
		}
		// public function catalog(){
		// 	$catalogKaryawan = array(
		// 		array("id" => "1",
		// 		"catalogName" => "Barang satu"),
		// 		array("id" => "2",
		// 		"catalogName" => "Barang dua"),
		// 		array("id" => "3",
		// 		"catalogName" => "Barang tiga")
		// 	);
		// 	echo json_encode($catalogKaryawan, JSON_PRETTY_PRINT);
		}
	}
?>
