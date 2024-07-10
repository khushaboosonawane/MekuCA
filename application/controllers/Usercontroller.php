<?php
defined("BASEPATH") or exit("no direct script access is allowed");

class Usercontroller extends CI_Controller{
    private function nav(){
        $this->load->view("user/nav");
    }
    private function footer(){
        $this->load->view("user/footer");
    }
    public function index(){
        $this->nav();
        $this->load->view("user/index");
        $this->footer();
    }
}
?>