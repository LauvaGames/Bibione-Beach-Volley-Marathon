<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index(){
        $this->load->model('Admin_model');

        $data['query'] = $this->Admin_model->get_ru_content();
        //print_r( $data['query']['1']);
        $this->load->view('admin', $data);
    }

    public function insert_content(){
        $this->load->model('Admin_model');

        if (isset($_POST) && !empty($_POST)) {

            $key= $_POST['key'];
            $value= $_POST['value'];
            $lang= $_POST['lang'];


            //$query = $this->db->query("INSERT INTO `Content`(`key`, `value`, `lang`) VALUES ('$key','$lang','$value')");

            $data['query'] = $this->Admin_model->insert_text($key, $value, $lang);
            echo 'insert';
            //print_r( $data);
        }else{
            echo "Error in post".$php_errormsg;
        }

    }



}