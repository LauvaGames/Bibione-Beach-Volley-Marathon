<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_text($key, $value, $lang)
    {
        $query = $this->db->query("INSERT INTO `Content`(`key`, `value`, `lang`) VALUES ('$key', '$value', '$lang')");
        //return $query->result();
    }

    public function get_ru_content()
    {
        $query = $this->db->query("SELECT `key`, `value`, `lang` FROM `Content` WHERE `lang`='ru'");
        return $query->result();
    }

}