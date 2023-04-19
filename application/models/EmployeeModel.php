<?php
class EmployeeModel extends CI_Model
{
    public function getData(){
        $query = $this->db->get('employees');
        return $query->result();
    }
    public function insertData($data){
        return $this->db->insert('employees',$data);
    }
    public function editData($id){
        $query = $this->db->get_where('employees', ['id' => $id]);
        return $query->row();
    }
    public function updateData($id, $data){
        return $this->db->update('employees', $data, ['id' => $id]);
    }
    public function viewProfile($id){
        $query = $this->db->get_where('employees',['id' => $id]);
        return $query->row();
    }
    public function deleteData($id){
        return $this->db->delete('employees', ['id' => $id]); 
    }
}

?>
