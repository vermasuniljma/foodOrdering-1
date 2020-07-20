<?php
class Product extends CI_controller{

function index(){
		$this->load->view('product_view');
    }
 
    function product_data(){
		$this->load->model('product_model');
        $data=$this->product_model->product_list();
        echo json_encode($data);
    }
 
    function save(){
		$this->load->model('product_model');
        $data=$this->product_model->save_product();
        echo json_encode($data);
    }
 
    function update(){
		$this->load->model('product_model');
        $data=$this->product_model->update_product();
        echo json_encode($data);
    }
 
    function delete(){
		$this->load->model('product_model');
        $data=$this->product_model->delete_product();
        echo json_encode($data);
    }
 
}
?>