<?php

    class Karyawan_Model extends CI_Model{
        public function insertKaryawan($karyawan){
            $this->db->query(
                "INSERT INTO 
                `tb_karyawan`(`username`, `nama`, `posisi`, `password`) 
                VALUES ('.$karyawan->username.','.$karyawan->nama.','.$karyawan->posisi.','.$karyawan->password.')"
            );
        }
    }

?>