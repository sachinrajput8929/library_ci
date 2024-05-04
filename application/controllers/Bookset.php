<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bookset extends CI_Controller
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


 
   
    public function all_bookset()
    {
        $this->checkadminlogin();
 
        $data['ALLDATA'] = $this->crud->fetchA11data('book_sets');
        $this->load->view('admin/bookset/all_bookset',$data);
    }


    // dependent book name fetch
    public function fetchBookname() {
        if ($this->input->post('courseid')) {
            $courseid = $this->input->post('courseid');
            echo $this->crud->fetchBookname($courseid);
            
        }
    }



 
    public function addset()
	{
		if(isset($_POST['set']))
		{
            $set= json_encode($this->input->post('booksets'),JSON_UNESCAPED_SLASHES);

            $data['university'] = $this->input->post('university');
            $data['course'] = $this->input->post('course');
            $data['booksets'] = $set;
            $data['name'] = $this->input->post('name');
            $data['status'] = $this->input->post('status');
             $data['createdate'] = date('Y-m-d');

            $this->crud->insert('book_sets', $data);
            echo '<script>alert(" Books Set Create Succesfully")</script>';
        
           }

		$this->load->view('admin/bookset/add_bookset');
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
		$this->crud->update('book_sets',$data,$id);
		redirect('bookset/all_bookset');
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
		$this->crud->update('book_sets',$data,$id);
		redirect('bookset/all_bookset');
}

public function delete()
	{
	$args=func_get_args();
	$this->crud->delete('book_sets',$args[0]);
    echo '<script>alert("Are You sure Delete This Book Set!")</script>';
    echo '<script>window.location.href="'.base_url('bookset/all_bookset').'";</script>'; 
 	}

}
?>
