<?php
class EmpModel extends CI_Model{
	function employeeList(){
		$hasil=$this->db->get('emp');
		return $hasil->result();
	}
	function saveEmp(){
		$data = array(				
				'name' 			=> $this->input->post('name'), 
				'age' 			=> $this->input->post('age'), 
				'designation' 	=> $this->input->post('designation'), 
				'skills' 		=> $this->input->post('skills'), 
				'address' 		=> $this->input->post('address'), 
			);
		$result=$this->db->insert('emp',$data);
		return $result;
	}
	function updateEmp(){
		//echo "<pre>";print_r($_POST);die;
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$age=$this->input->post('age');
		$designation=$this->input->post('designation');
		$skills=$this->input->post('skills');
		$address=$this->input->post('address');
		$this->db->set('name', $name);
		$this->db->set('age', $age);
		$this->db->set('designation', $designation);
		$this->db->set('skills', $skills);
		$this->db->set('address', $address);
		$this->db->where('id', $id);
		$result=$this->db->update('emp');
		return $result;	
	}
	function deleteEmp(){
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('emp');
		return $result;
	}	
}