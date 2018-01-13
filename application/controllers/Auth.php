<?php
class Auth extends CI_Controller {

    public function __construct()
	{
		header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding, Authorization");
        header("Access-Control-Allow-Methods: *");
        
        if ( "OPTIONS" === $_SERVER['REQUEST_METHOD'] ) {
            die();
        }
        parent::__construct();
	}
	
    public function login(){
        if($this->input->post()){
            $data = $this->input->post();
            function checkpass($value){
                return md5(sha1($value));
            }
            $login = $this->Auth_model->checkUser($data['username'],checkpass($data['password']));
            if($login){
                $this->session->set_userdata($login);
                redirect('/');
            }
            else{
                $this->session->set_flashdata('error', 'Invalid Credentials, Check your Username and Password');
                $this->load->view("login.php");
            }
        }else{
            $this->load->view("login.php");
        }
    }

    // public function password(){
    //     if($this->input->post()){
    //         $id = $this->session->userdata('prcr_rand');
    //         $data = $this->input->post();
    //         $pass = $this->Auth_model->checkPass($id, parolz_password($data['password']));
    //         if($pass){
    //             $this->Auth_model->changepassword($id, parolz_password($data['prcr_password']));
    //             $this->session->set_flashdata('successmsg', 'Password Successfully Changed');
    //             redirect('/password');
    //         }else{
    //             $this->session->set_flashdata('errormsg', 'Wrong Password');
    //             redirect('/password');
    //         }
    //     }else{
    //         $this->load->view("partials/navbar.php");
    //         $this->load->view("partials/sidebar.php");
    //         $this->load->view("password.php");
    //         $this->load->view("partials/footer.php");
    //     }
    // }

    public function logout(){
        $this->session->unset_userdata('login');
        $this->session->sess_destroy();
        redirect('login');
    }

    public function test($pass){
        // var_dump(md5(sha1($pass)));
        function checkpass($value){
            return md5(sha1($value));
        }

        var_dump(checkpass($pass));
    }
}