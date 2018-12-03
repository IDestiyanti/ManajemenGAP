<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class Pemasukkan extends CI_Controller {
		private $id_pemasukan;                          
        private $id_barang;
        private $nama_barang;
        private $tgl_pemasukan;
        private $jenis_barang;
        private $nominal;
        private $jumlah;
		public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model("Pemasukan_Model");
            $this->load->database();
        }
        public function index(){
            $this->load->view('welcome_message');
        }
		
		public function postPemasukkan(){
			$input_data = json_decode($this->input->raw_input_stream, true);
			$id_pemasukan = $input_data['id_pemasukkan'];
            $id_barang = $input_data['id_barang'];
            $nama_barang = $input_data['nama_barang'];
            $tgl_pemasukan = $input_data['tanggal_pemasukkan'];
            $jenis_barang = $input_data['jenis_barang'];
            $nominal = $input_data['nominal'];
            $jumlah = $input_data['jumlah'];
            $pemasukan = array(
                "id_pemasukan" => $id_pemasukan,
                "id_barang" => $id_barang,
                "nama_barang" => $nama_barang,
                "tgl_pemasukan" => $tgl_pemasukan,
                "jenis_barang" => $jenis_barang,
                "nominal" => $nominal,
                "jumlah" => $jumlah
            );
            $pemasukan = (object)$pemasukan;
            $this->Pemasukan_Model->insertItem($pemasukan);
		    $success = array(
			    "berhasil" => "true"
		    );

			$success = array(
				"berhasil" => "true"
			);
		}
	}
?>
