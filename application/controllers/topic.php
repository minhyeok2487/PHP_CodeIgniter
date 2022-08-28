<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {
    function __construct(){
        parrent::__construct();
        $this->load->model('topic_model');
    }
    function index(){
        $data = $this->topic_model->gets();
        $this->load->view('head');
        $this->load->view('main', array('topics'=>$data));
        $this->load->view('footer');
    }
    function get($id){
        $topic = $this->topic_model->get($id);
        $this->load->view('head');
        $this->load->view('get', array('topic'=>$topic));
        $this->load->view('footer');
    }
}
?>
