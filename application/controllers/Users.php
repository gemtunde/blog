<?php 

class Users extends CI_Controller{

    public function register(){

        $data['title'] = 'Registration' ;

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if($this->form_validation->run()===FALSE){

            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        }else{
            $enc_password = md5($this->input->post('password'));
            $this->users_model->register($enc_password);
           
            $this->session->set_flashdata('user_registered','you are now registered');
            redirect('posts');
        }
    }

    function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 'Username is taken, choose another.');

        if($this->users_model->check_username_exists($username)){
                return true ;
        }else{
                return false ;
        }
    }

     public function login(){

        $data['title'] = 'Login';

        $this->form_validation->set_rules('username', 'Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){

            $this->load->view('templates/header');
            $this->load->view('users/login',$data);
            $this->load->view('templates/footer');
        }else{
           // $this->login_modal->login();

           $username = $this->input->post('username');
           $password = md5($this->input->post('password'));

           $query_id = $this->users_model->login($username, $password);

            if($query_id){
                // die('success');
                // create session
                $user_data = array(
                    'user_id' => $query_id,
                    'username' => $username,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);

            $this->session->set_flashdata('user_loggin','you are now login');
            redirect('posts');
            }else{

            $this->session->set_flashdata('loggin_failed','invalid login');
            redirect('users/login');
            }
           
            //die('continue');
        }
    }

    public function logout(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('logged_in');

        $this->session->set_flashdata('user_loggout','you are now log out');
            redirect('users/login');
    }
}