<?php
	defined('BASEPATH') OR exit('No tdirect script access allowed');

	class Bahan extends CI_Controller {                  
        private $id_pengeluaran;
        private $tgl_pengeluaran;
        private $penanggung_jawab;
        private $keterangan;
        private $nominal;
		public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model("Bahan_Model");
            $this->load->database();
        }
        public function index(){
            $this->load->view('welcome_message');
        }
		
		public function postBahan(){
			$input_data = json_decode($this->input->raw_input_stream, true);
            $id_bahan = $input_data['id_bahan'];
            $nama_bahan = $input_data['nama_bahan'];
            $jenis = $input_data['jenis'];
            $jumlah = $input_data['jumlah'];

            $pengeluaran = array(
                "id_bahan" => $id_bahan,
                "nama_bahan" => $nama_bahan,
                "jenis" => $jenis,
                "jumlah" => $jumlah
            );
           
            $bahan = (object)$bahan;
            
            $this->Bahan_Model->insertBahan($bahan);
			$success = array(
				"berhasil" => "true"
            );
            echo "Berhasil";
        }   
    }
?>