<?php

    class Items_Model extends CI_Model{
        public function insertItem($item){
            $this->db->query(
                "INSERT INTO 
                `tb_barang`
                (`id_barang`, `nama_barang`, `harga_barang`, `stok_barang`, `jenis_barang`, `id_penitip`)
                VALUES 
                ('.$item->id_barang.','$item->nama_barang',$item->harga_barang,$item->stok_barang,'$item->jenis_barang','$item->id_penitip')"
            );
        }
    }

?>