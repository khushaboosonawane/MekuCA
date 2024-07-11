<?php
defined("BASEPATH") or exit("no direct script access is allowed");

class Usercontroller extends CI_Controller{
    private function nav(){
        $this->load->view("user/nav");
    }
    private function footer(){
        $this->load->view("user/footer");
    }
    private function ov(string $filename,$data=null){
        $this->nav();
        $this->load->view("user/".$filename,$data);
        $this->footer();
    }
    public function index(){
        $this->ov("index");
    }
    public function about(){
        $this->ov("about");
    }
    
}
?>