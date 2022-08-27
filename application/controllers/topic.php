<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {
    function index(){
        $this->load->view('head');
        $this->load->view('topic');
        $this->load->view('footer');
    }
    function get($id){
        $this->load->view('head');
        $data = array('id'=>$id);
        $this->load->view('main', $data);
        $this->load->view('footer');
    }
}
?>
