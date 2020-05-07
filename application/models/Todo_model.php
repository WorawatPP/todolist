<?php

class Todo_model extends CI_Model {

        public function addtodo()
        {
                $data = array (
            
                        'todo' => $this->input->post('todo')
                    );
            
                    $query = $this->db->insert('tbl_todo',$data);
            
                    if($query){
                        echo 'Add Todo';
                        header( 'refresh: 1; url=/todolist' );
                        exit(0);
                    }else{
                        echo 'False';
                    }
        }

        public function edittodo()
        {
                $data = array (
            
                        'todo' => $this->input->post('todo')
                    );
                    
                    $this->db->where('id', $this->input->post('id'));
                    $query = $this->db->update('tbl_todo',$data);
                    
                    if($query){
                        echo 'Edit Todo';
                        header( 'refresh: 1; url=/todolist' );
                        exit(0);
                    }else{
                        echo 'False';
                    }
        }

        public function showtodo()
        {
                $query = $this->db->get('tbl_todo');
                return $query->result();
        }

        public function read($id)
        {
                $this->db->select('*');
                $this->db->from('tbl_todo');
                $this->db->where('id',$id);
                $query = $this->db->get();
                if($query->num_rows() > 0){
                        $data = $query->row();
                        return $data;
                }else{
                        return FALSE;
                }
        }

        public function deletetodo($id)
        {
                $query = $this->db->delete('tbl_todo',array('id'=>$id));
                if($query){
                        echo 'Delete Todo';
                        header( 'refresh: 1; url=/todolist' );
                        exit(0);
                    }else{
                        echo 'False';
                    }
        }

}

?>