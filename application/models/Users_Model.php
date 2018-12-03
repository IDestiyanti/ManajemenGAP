<?

    class Users_Model extends CI_Model{
        public function login($username, $password){
            return $this->db->query(
                "SELECT * FROM tb_karyawan WHERE username = '".$username."' AND  password = '".$password."'"
            );
        }
    }
?>