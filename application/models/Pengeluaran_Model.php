<?php

    class Pengeluaran_Model extends CI_Model{
        public function insertPengeluaran($pengeluaran){
            $this->db->query(
                "INSERT INTO 
                `tb_pengeluaran`
                (`id_pengeluaran`, `tgl_pengeluaran`, `penanggung_jawab`, `keterangan`, `nominal`) 
                VALUES 
                ('$pengeluaran->id_pengeluaran','$pengeluaran->tgl_pengeluaran','$pengeluaran->penanggung_jawab','$pengeluaran->keterangan',$pengeluaran->nominal)"
            );
        }
    }

?>