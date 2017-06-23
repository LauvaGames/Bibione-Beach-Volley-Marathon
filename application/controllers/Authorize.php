<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("Statistics_model");
        $this->load->library('session');
    }
    public function index(){
        $this->load->view('login');
    }
    public function checkPass(){
        if(isset($_POST)){
            //pass TapcoreRocks
            $pass = $_POST['pass'];
            //echo($pass);
            //echo(crypt($pass, 'tapcore_appsell'));
            if(crypt($pass, 'tapcore_appsell') =="taLaULrOsegKU"){//taLaULrOsegKU
                $this->session->set_tempdata('login', 'true', 3000);
                //header("Location: http://dashboard.ssp.tpc.re/");
                echo('good');
            }else{
                echo('bad');
            }
            //$hash = crypt($pass, 'tapcore_appsell');

        }


    }
    public function checkLogin(){
        $this->session->set_tempdata('item', 'value', 20);
        print_r('Hello!');
    }
    public function printSession(){
        // $this->session->set_userdata('some_name', 'some_value');

        print_r($this->session->userdata('item') );
    }
}