<?php
class Pages extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->database();
                $this->load->model('Items_model');
                $this->load->helper('url');
        }
         public function add_new()
        {
                $this->load->view('add_new');
        }
        public function save()
        {
                $this->load->view('add_new');
                if($this->input->post('save'))
                {
                        $data['title']=$this->input->post('title');
                        $data['date']=$this->input->post('date');
                        $data['description']=$this->input->post('description');
                        $response=$this->Items_model->saveItem($data);
                        if($response==true){

                               return redirect()->to(site_url());
                        }
                        
                }
        }
        public function delete_item()   
        {      

                $id=$this->input->get('id');
                $response=$this->Items_model->deleteItem($id); 
                if($response==true)
                {
                    return redirect()->to(site_url());
                }

        }
        public function edit_item()   
        {      
                $id=$this->input->get('id');
                $row=$this->Items_model->displayItemById($id);
                $data['row'] = $row;
                $this->load->view('edit_item',$data); 

        }
        public function complete_item()   
        { 
                $id = $this->input->post('id');
                $value = $this->input->post('value');
                $this->Items_model->updateComplete($value,$id);
                //echo json_encode(array( "statusCode"=>200,"id"=>$id,"val"=>$value));
                
        } 
        public function update_item()
        {
                $id = $this->input->post('id');
                $title=$this->input->post('title');
                $date=$this->input->post('date');
                $description=$this->input->post('description');
                $this->Items_model->editItem($title,$date,$description,$id);
                return redirect()->to(site_url());
        }


        
}