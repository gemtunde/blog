<?php 

class Categories extends CI_Controller {

         public function index(){
            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
        }
            $data['title'] = 'Category';

            $data['categories'] = $this->category_model->get_categories();

            $this->load->view('templates/header');
            $this->load->view('categories/index', $data);
            $this->load->view('templates/footer');

         }

        public function create(){
            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
        }
            $data['title'] = 'Create Category';

            $this->form_validation->set_rules('name', 'Name', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('categories/create', $data);
                $this->load->view('templates/footer');
            }else{
                $this->category_model->create_category();
                $this->session->set_flashdata('category_created', 'you have succesfully created a category');
           
                redirect('categories');

            }
        }

        public function posts($id){

            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
        }

            $data['title'] = $this->category_model->get_category($id)->name ;

            $data['posts'] = $this->post_model->get_posts_by_category($id);

            $this->load->view('templates/header');
            $this->load->view('posts/index', $data);
            $this->load->view('templates/footer');


















        }


}