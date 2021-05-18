
<?php

class Users_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }
    public function register($enc_password){

        $data = array(
            'name'=> $this->input->post('name'),
            'zipcode'=> $this->input->post('zipcode'),
            'email'=> $this->input->post('email'),
            'password'=> $enc_password,
            'username'=> $this->input->post('username')
        );

        return $query = $this->db->insert('users',$data);
    }

    public function check_username_exists($username){

       $query = $this->db->get_where('users', array(
            'username' => $username
        ));
       
        if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }

    }

    public function login($username, $password){

       $this->db->where('username', $username);
       $this->db->where('password', $password);
       $query = $this->db->get('users');

       if($query->num_rows() == 1){
            return $query->row(0)->id;
       }else{
           return false ;
       }

    }
}

















