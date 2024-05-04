<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Universitycourse extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function checkadminlogin()
    {
        $data = $this->session->userdata('phone');
        if (empty($data)) {
            redirect('admin/index');
        }
    }






    public function adduniversity()
    {
        $this->checkadminlogin();

        if (isset($_POST['submit'])) {
            $universityData = array(
                'university_name' => $this->input->post('university_name'),
                'status' => $this->input->post('status'),
                'created' => date('Y-m-d')
            );
            $this->crud->insert('university', $universityData);
            echo '<script>alert("University added successfully")</script>';
        }
    
        if (isset($_POST['addcourse'])) {
            $courseData = array(
                'university_id' => $this->input->post('university_id'),
                'session' => $this->input->post('session'),
                'year' => $this->input->post('year'),
                'course' => $this->input->post('course'),
                'course_name' => $this->input->post('course_name'),
                'status' => $this->input->post('status'),
                'created' => date('Y-m-d')
            );
            $this->crud->insert('course', $courseData);
            echo '<script>alert("Course added successfully")</script>';
        }
        $data['universities'] = $this->crud->fetchA11data('university');
        $data['courses'] = $this->crud->fetchA11data('course');
        $this->load->view('admin/universitycourse/adduniversity', $data);
        
    }
 
 
    public function edituniversity($university_id) {
        // Assuming $this->crud is the model instance
        $data['university'] = $this->crud->get_university_by_id($university_id);
        
        // Return the data as JSON
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['data' => $data['university']]));
    }
     
    public function updateuniversity(){
        $args=func_get_args();

		if(isset($_POST['updateuniversity']))
		{
             $data['university_name']= $this->input->post('university_name');
            $data['status']= $this->input->post('status');

            $this->crud->update('university',$data,$args[0]);
            echo '<script>alert("Updated University data Succesfully")</script>';
            echo '<script>window.location.href="'.base_url('universitycourse/adduniversity').'";</script>';
        }
        $data['universities']=$this->crud->selectbycolumn('university','id',$args[0]);
        $this->load->view('universitycourse/adduniversity',$data);
      
    }


    


    public function edit_course(){
        $args=func_get_args();

		if(isset($_POST['updatecourse']))
		 {
            $courseData = array(
                'university_id' => $this->input->post('university_id'),
                'session' => $this->input->post('session'),
                'year' => $this->input->post('year'),
                'course' => $this->input->post('course'),
                'course_name' => $this->input->post('course_name'),
                'status' => $this->input->post('status'),
             );
             $this->crud->update('course',$courseData,$args[0]);
           echo '<script>alert("Updated Course data Succesfully")</script>';
            echo '<script>window.location.href="'.base_url('universitycourse/adduniversity').'";</script>';

         }

         $data['EDITDATA']=$this->crud->selectbycolumn('course','id',$args[0]);
 
        $data['universities'] = $this->crud->fetchA11data('university');
        $this->load->view('admin/universitycourse/edit_course', $data);

    }







    public function active()
{
		if(isset($_REQUEST['activeid']))
		{
		$id=$_REQUEST['activeid'];
		$status=$_REQUEST['status'];	
			if($status=='1')
			{
			$status=0;
			} 
			else
			{
	             $status=1;
			}
		$data=array('status'=>$status);
		}
		$this->crud->update('university',$data,$id);
		redirect('universitycourse/adduniversity');
}


public function inactive()
{
		if(isset($_REQUEST['inactiveid']))
		{
		$id=$_REQUEST['inactiveid'];
		$status=$_REQUEST['status'];	
			if($status=='0')
			{
			$status=1;
			} 
			else
			{
	             $status=0;
			}
		$data=array('status'=>$status);
		}
		$this->crud->update('university',$data,$id);
		redirect('universitycourse/adduniversity');
}


}
?>
