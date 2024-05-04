<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_model
{

	//insert
	public function insert($table, $data)
	{
		$result = $this->db->insert($table, $data);
		return $result;
	}

	//select
	public function fetchA11data($table)
	{
		$data = $this->db->get($table);
		return $data->result();
	}
	//select2 second crm database using data
	
	public function fetchA11datadb2($table)
    {
		$db2= $this->load->database('database2',TRUE);
           $data = $db2->get($table);
        return $data->result();
    }
	public function selectbymultiplecolumn2($table, $condition)
    {
        $db2 = $this->load->database('database2', TRUE);
        $db2->where($condition);
        $data = $db2->get($table);
        return $data->result();
    }
	//delete
	public function delete($table, $id)
	{
		$this->db->where('id', $id);
		$result = $this->db->delete($table);
		return $result;
	}

	//------------//update
	public function update($table, $data, $id)
	{
		$this->db->where('id', $id);
		$result = $this->db->update($table, $data);
		return $result;
	}

	//fetch by id edit
	public function fetchdatamyid($id,$table){
		$this->db->where('id',$id);
		$data = $this->db->get($table);
		return $data->result();
	}
//---------------------update---------------//



	//selectby column edit
	public function selectbycolumn($table, $col, $val)
	{
		$this->db->where($col, $val);
		$data = $this->db->get($table);
		return $data->result();
	}



	//selectby multiple column
	public function selectbymultiplecolumn($table, $condition)
	{
		$this->db->where($condition);
		$data = $this->db->get($table);
		return $data->result();
	}
 
	public function selectdatainlimit($limit, $start, $table)
	{
		$this->db->limit($limit, $start);
		$data = $this->db->get($table);
		return $data->result();
	}




	// dependent bar fetch course name according university
	public function fetchCourses($university_id)
	{
		$this->db->where('university_id', $university_id);
		$query = $this->db->get('course');
		$output = '<option value="">Select Course</option>';
		foreach ($query->result() as $row)
		{
			$output .= '<option value="' . $row->id . '">' . $row->course_name . '</option>'; // Use .= to append
		}
		return $output;
	}

// dependent bar fetch book name according course id
	public function fetchBookname($courseid)
	{
		$this->db->where('course', $courseid);
		$query = $this->db->get('book');
		$output = '';
		foreach ($query->result() as $row)
		{
			$output .= '<label><input type="checkbox" name="booksets[]" value="' . $row->id . '"> ' . $row->book_name . '</label><br>'; // Use .= to append
		}
		return $output;
	}




	public function get_university_by_id($university_id) {
        // Fetch data from the database based on the university id
        $query = $this->db->get_where('university', array('id' => $university_id));
        return $query->row();
    }
	 


	public function get_book_by_id($book_id) {
         $query = $this->db->get_where('book', array('id' => $book_id));
        return $query->row();
    }
}
