<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('main');
    }
    public function newvolley()
    {
        $this->load->view('volley');
    }
    public function newvolley_en()
    {
        $this->load->view('volley_en');
    }
    public function newvolley_fr()
    {
        $this->load->view('volley_fr');
    }
    public function volley()
    {
        $this->load->view('sport_felix');
    }
    public function full_screen_form()
    {
        $this->load->view('full_screen_form');
    }
    public function full_screen_form_en()
    {
        $this->load->view('full_screen_form_en');
    }
    public function full_screen_form_fr()
    {
        $this->load->view('full_screen_form_fr');
    }

    function send_order(){
        if (isset($_POST) && !empty($_POST)) {
            $to ='tror.spb@gmail.com';
            $subject = 'test';
            $message =  "Цена:".$_POST['price']. "\r\n" .
                        "Место проживания:".$_POST['residence']. "\r\n" .
                        "Тип проживания:".$_POST['accommodationType']. "\r\n" .
                        "Спорт-пакет:".$_POST['sportPackage']. "\r\n" .
                        "Навык:".$_POST['skill']. "\r\n" .
                        "Дети:".$_POST['children']. "\r\n" .
                        "Экскурсия в венецию:".$_POST['excursion']. "\r\n" .
                        "Имя:".$_POST['name']. "\r\n" .
                        "Почта:".$_POST['email']. "\r\n" .
                        "Телефон:".$_POST['phone']. "\r\n" .

            $headers = 'From: '.$_POST['email'] . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);
            echo 'success';
        }else{
            echo "Error in post";
        }

        //echo $message;
    }

    function send_contacts(){
        if (isset($_POST) && !empty($_POST)) {
            $to ='tror.spb@gmail.com';
            $subject = 'test2';
            $message =
                "Имя:".$_POST['username']. "\r\n" .
                "Почта:".$_POST['email']. "\r\n" .
                "Телефон:".$_POST['phone']. "\r\n" .
                "Коментарий:".$_POST['comment']. "\r\n" .
                "Интересуется:".$_POST['sporttype']. "\r\n" .

                $headers = 'From: '.$_POST['email'] . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);
            echo 'success';
        }else{
            echo "Error in post";
        }

        //echo $message;
    }
}
