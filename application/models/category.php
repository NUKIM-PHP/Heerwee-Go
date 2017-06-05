<?php


class category extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function get(){
        return $this->db
        ->get("category", $limit)
        ->result();    	
    }

    public function input(){
    	
    }
}