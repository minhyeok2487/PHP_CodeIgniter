<?php
class Topic_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    public function gets() {
        return $this->db->query('SELECT * FROM user_table')->result();
    }

    public function gets($topic_id) {
        return $this->db->get_where('user_table', array('user_no'=>$topic_id))->row();
    }
}