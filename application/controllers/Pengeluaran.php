<?php
	defined('BASEPATH') OR exit('No tdirect script access allowed');

	class Pengeluaran extends CI_Controller {                  
        private $id_pengeluaran;
        private $tgl_pengeluaran;
        private $penanggung_jawab;
        private $keterangan;
        private $nominal;
		public function __construct(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->model("Pengeluaran_Model");
            $this->load->database();
        }
        public function index(){
            $this->load->view('welcome_message');
        }
		
		public function postPengeluaran(){
			$input_data = json_decode($this->input->raw_input_stream, true);
            $id_pengeluaran = $input_data['id_pengeluaran'];
            $tgl_pengeluaran = $input_data['tgl_pengeluaran'];
            $penanggung_jawab = $input_data['penanggung_jawab'];
            $keterangan = $input_data['keterangan'];
            $nominal = $input_data['nominal'];

            $pengeluaran = array(
                "id_pengeluaran" => $id_pengeluaran,
                "tgl_pengeluaran" => $tgl_pengeluaran,
                "penanggung_jawab" => $penanggung_jawab,
                "keterangan" => $keterangan,
                "nominal" => $nominal
            );
           
            $pengeluaran = (object)$pengeluaran;
            
            $this->Pengeluaran_Model->insertPengeluaran($pengeluaran);
			$success = array(
				"berhasil" => "true"
            );
            echo "Berhasil";
        }   
    }
?>