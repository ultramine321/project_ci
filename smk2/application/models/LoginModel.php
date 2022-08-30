<?php 

class LoginModel extends CI_Model
    {
        public function login($username,$password)
        {
            $data= array(
                'username'=>$username,
                'password'=>$password
            );
            $this->db->select('*');
            $this->db->from('login');
            $this->db->where($data);
            return $this->db->get()->row();
        }
    }

?>