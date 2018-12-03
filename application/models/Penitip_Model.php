<?php

    class Penitip_Model extends CI_Model{
        public function insertPenitip($penitip){
            $this->db->query(
                "INSERT INTO 
                `tb_penitip`(`id_penitip`, `nama`, `no_hp`) 
                VALUES 
                ('.$penitip->"id_penitip".','.$penitip->"nama".','.$penitip->"no_hp".')"
            );
        }
    }

?>