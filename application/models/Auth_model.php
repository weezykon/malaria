<?php
class Auth_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function checkUser($user,$password){
        $this->db->select('*');
        $this->db->where('ma_username', $user);
        $this->db->where('ma_password', $password);
        $query = $this->db->get('admin');
        $res = $query->row_array();
        if (!$res) {
          return false;
        }
        unset($res['ma_password']);
        return $res;
    }
}
