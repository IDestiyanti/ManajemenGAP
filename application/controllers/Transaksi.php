<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class Transaksi extends CI_Controller {                  
        private $id_transaksi;
        private $tgl_transaksi;
        private $total_harga;
		public function __constructor(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model("Transaksi_Model");
            $this->load->database();
        }
        public function index(){
            $this->load->view('welcome_message');
        }
		
		public function postPemasukkan(){
			$input_data = json_decode($this->input->raw_input_stream, true);
            $id_transaksi = $input_data['id_transaksi'];
            $tgl_transaksi = $input_data['tgl_transaksi'];
            $total_harga = $input_data['total_harga']; 
            
            

			$success = array(
				"berhasil" => "true"
			);
		}
	}
?>