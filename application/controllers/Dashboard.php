<?php
class Dashboard extends CI_Controller {

    public function __construct()
	{
		header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding, Authorization");
        header("Access-Control-Allow-Methods: *");
        
        if ( "OPTIONS" === $_SERVER['REQUEST_METHOD'] ) {
            die();
        }
        parent::__construct();
        $this->load->library('user_agent');
        if(!$this->session->userdata('ma_id')) {
            redirect("/login");
        }
	}

    public function index(){
        $this->load->view("partials/top.php");
        $this->load->view("blank.php");
        $this->load->view("partials/footer.php");
    }
}