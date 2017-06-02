<?php


class user_model extends CI_Model
{
    public function __construct() {
        parent::__construct();
    }

    public function get_one($id) {
        $sql = "SELECT * FROM user WHERE id = " . $id;
        return $this->db->query($sql)->row();
    }

    public function get($limit = 100) {
        return $this->db
            ->get("user", $limit)
            ->result();
    }

    // public function insert($name, $ssn) {
        
    //     $sql = "INSERT INTO user(name, ssn) values('" . $name . "', '" . $ssn . "')";
    //     $this->db->query($sql);
    // }

    public function update($id, $name, $ssn) {
        $sql = "UPDATE user SET name = '" . $name . "' , ssn = '" . $ssn . "'"
                . " WHERE id = " . $id;
        $this->db->query($sql);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('user');

    }

    public function signin(){

    }

    public function signout(){
    	
    }

}