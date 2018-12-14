<?php
class Stok_Barang extends CI_Model
 
{
  function ambil_data_barang()
  {
    $this->db->select('id_barang,nama_barang,stok_barang');
    $q = $this->db->get('tb_barang');

    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }
  }
  
}