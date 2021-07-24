<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Item extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }  
    public function index_get($id = 0)
    {

        $data = $this->db->get("todo_items")->result();
        $this->response($data, REST_Controller::HTTP_OK);
    }
        
}