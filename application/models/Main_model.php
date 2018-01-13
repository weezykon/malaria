<?php
class Main_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function checkUser($email,$password){
        // $password = parolz_password($password);
        $this->db->select('*');
        $this->db->where('prcr_email', $email);
        $this->db->where('prcr_password', $password);
        $this->db->where('prcr_visible', '1');
        $query = $this->db->get('p_r_customer_reps');
        $res = $query->row_array();
        if (!$res) {
          return false;
        }
         unset($res['prcr_password']);
          return $res;
    }

    public function checkPass($id,$password){
        // $password = parolz_password($password);
        $this->db->select('*');
        $this->db->where('prcr_rand', $id);
        $this->db->where('prcr_password', $password);
        $query = $this->db->get('p_r_customer_reps');
        $res = $query->row_array();
        if (!$res) {
          return false;
        }
        
        return true;
    }

    public function changepassword($id,$password){
        $this->db->set('prcr_password', $password);
        $this->db->where('prcr_rand', $id);
        $this->db->update('p_r_customer_reps');
        return TRUE;
    }

    public function insertintosubaccount($prm_contact_name,$prm_contact_email,$prm_contact_password,$prm_contact_phone,$prm_merchant){
        $date = strtotime(date('Y-m-d H:i:s'));
        $data = array(
            'prsa_name' => $prm_contact_name,
            'prsa_email' => $prm_contact_email,
            'prsa_password' => $prm_contact_password,
            'prsa_phone' => $prm_contact_phone,
            'prsa_merchant' => $prm_merchant,
            'prsa_rand' => generate(10),
            'prsa_role' => 'admin',
            'prsa_menu' => '',
            'prsa_date' => $date
        );
        // return $data;
        $this->db->insert('p_r_subaccount', $data);
        return true;
    }
}
