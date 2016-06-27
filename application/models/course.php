<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Course extends CI_Model
	{

		public function index()
		{
			$query = "SELECT * FROM courses";
			return $this->db->query($query)->result_array();
		}

		public function add_course($post)
     	{
        	$query = "INSERT INTO courses (course_name, description, created_at) VALUES (?,?,?)";
         	$values = array($post['course_name'], $post['description'], date("Y-m-d, H:i:s")); 
         	return $this->db->query($query, $values);
    	}

		public function show($course_id)
    	 {
        	 return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id))->row_array();
     	}

    	 public function delete($course_id){
    		$query = "DELETE FROM Courses WHERE id=?";
   			$value = array($course_id);
    		return $this->db->query($query, $value);
  		}

        public function remove($course_id){
            $query ="DELETE FROM Courses WHERE id=?";
            $value = array($course_id);
            return $this->db->query($query, $values);
            redirect('/');
        }
	}

