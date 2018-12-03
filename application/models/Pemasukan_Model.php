<?php

    class Pemasukan_Model extends CI_Model{
        public function insertPemasukan($pemasukan){
            $this->db->query(
                "INSERT INTO 
                `tb_pemasukan`
                (`id_pemasukan`, `id_barang`, `nama_barang`, `tgl_pemasukan`, `jenis_barang`, `nominal`, `jumlah`) 
                VALUES
                ('.$pemasukan->id_pemasukan.','.$pemasukan->id_barang.','.$pemasukan->tgl_pemasukan.','.$pemasukan->jenis_barang.',$pemasukan->nominal.','.$pemasukan->jumlah.')"
            );
        }
    }

?>