<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class Pemasukkan extends CI_Controller {                  
        private $id_barang;
        private $nama_barang;
        private $harga_barang;
        private $stok_barang;
        private $jenis_barang;
        private $id_penitip;
   }
		public function constructor(){
			$this->load->helper('url');
		}
		
		public function postPemasukkan(){
			$input_data = json_decode($this->input->raw_input_stream, true);
            $id_barang = $input_data['id_barang'];
            $nama_barang = $input_data['nama_barang'];
            $harga_barang = $input_data['harga_barang'];
            $stok_barang = $input_data['stok_barang'];
            $jenis_barang = $input_data['jenis_barang'];
            $id_penitip = $input_data['id_penitip'];

			$success = array(
				"berhasil" => "true"
			);
		}
	}
?>
