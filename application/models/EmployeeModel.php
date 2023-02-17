<?php
class EmployeeModel extends CI_Model
{
    public function getData(){
        $query = $this->db->get('employee');
        return $query->result();
    }
    public function insertData($data){
        return $this->db->insert('employee',$data);
    }
    public function editData($id){
        $query = $this->db->get_where('employee', ['id' => $id]);
        return $query->row();
    }
    public function updateData($id, $data){
        return $this->db->update('employee', $data, ['id' => $id]);
    }
    public function viewProfile($id){
        $query = $this->db->get_where('employee',['id' => $id]);
        return $query->row();
    }
    public function deleteData($id){
        return $this->db->delete('employee', ['id' => $id]); 
    }
}

?>
