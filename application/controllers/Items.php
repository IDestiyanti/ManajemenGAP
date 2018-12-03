<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// $catalogItems = array();
	private $id_barang;
	private $nama_barang;
	private $harga_barang;
	private $stok_barang;
	private $jenis_barang;
	private $id_penitip;
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model("Items_Model");
		$this->load->database();
	}

	public function index(){
		$this->load->view('welcome_message');
	}

	public function postPemasukan(){
		$input_data = json_decode($this->input->raw_input_stream, true);
		$id_barang = $input_data['id_barang'];
		$nama_barang = $input_data['nama_barang'];
		$harga_barang = $input_data['harga_barang'];
		$stok_barang = $input_data['stok_barang'];
		$jenis_barang = $input_data['jenis_barang'];
		$id_penitip = $input_data['id_penitip'];
		$item = array(
			"id_barang" => $id_barang,
			"nama_barang" => $nama_barang,
			"harga_barang" => $harga_barang,
			"stok_barang" => $stok_barang,
			"jenis_barang" => $jenis_barang,
			"id_penitip" => $id_penitip
		);
		print_r($item);
		$item = (object)$item;
		echo $item->id_barang;

		$this->Items_Model->insertItem($item);
		$success = array(
			"berhasil" => "true"
		);
	}
	
	public function catalog(){
		$catalogItems = array(
			array("id" => "1",
			"catalogName" => "Barang satu"),
			array("id" => "2",
			"catalogName" => "Barang dua"),
			array("id" => "3",
			"catalogName" => "Barang tiga")
		);
		echo json_encode($catalogItems, JSON_PRETTY_PRINT);
	}
}
