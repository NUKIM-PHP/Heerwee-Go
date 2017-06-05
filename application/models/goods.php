<?php


class goods extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function get($limit = 100){
            return $this->db
            ->get("goods", $limit)
            ->result();
    }

    public function search($_POST){
        $this->input->post(NULL,TRUE);

    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('goods');

    }

    public function input(){
    	
    }
}