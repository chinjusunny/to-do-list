<?php
class Items_model extends CI_Model 
{
	function __construct()  
    {  
         parent::__construct();  
    } 
	function displayItem()
	{
	     $this->db->from("todo_items");
		$this->db->order_by('date','DESC');
		$query = $this->db->get(); 
		return $query->result();
	}
	function saveItem($data)
	{
        $this->db->insert('todo_items',$data);
        return true;
	}
	function deleteItem($id) 
	{
	    $this->db->where('id', $id);
	    $del=$this->db->delete('todo_items');   
	    return $del;
	}
	function displayItemById($id)
	{
		$query=$this->db->query("SELECT * FROM todo_items WHERE id=".$id);
		//return $query->result();
		//return $query->row();
		return $query->row_array();
	}
	function editItem($title,$date,$description,$id) 
	{
	    $this->db->query("UPDATE todo_items SET title='".$title."',date='".$date."',description='".$description."' WHERE id=".$id);
	}
	function updateComplete($value,$id)
	{
		if($value==1){
			$value=0;
		}
		else{
			$value=1;
		}

		$this->db->query("UPDATE todo_items SET completed = ".$value." WHERE id = ".$id);
	}
	
}