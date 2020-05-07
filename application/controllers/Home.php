<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
        {
                parent::__construct();
                $this->load->model('todo_model');
        }

	public function index()
	{
        $data['query'] = $this->todo_model->showtodo();
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        // exit;

        $this->load->view('css');
        $this->load->view('home_view');
        $this->load->view('todo_view',$data);
        $this->load->view('js');
    }
    
    public function addtodo()
	{
        $this->todo_model->addtodo();
    }
    
    public function showtodo()
	{
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
    
    public function edit($id)
	{
        $data['query'] = $this->todo_model->read($id);

        $this->load->view('css');
        $this->load->view('edit_view',$data);
        $this->load->view('js');
    }

    public function edittodo()
	{
        $this->todo_model->edittodo();
    }

    public function delete($id)
	{
        $this->todo_model->deletetodo($id);
    }
}
