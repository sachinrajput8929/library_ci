<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
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


     
   
    public function list() {

        if (isset($_POST['issue'])) {
            

            $registration_no = $this->input->post('registration_no');
            $result=$this->crud->selectbymultiplecolumn('issue_book',array('registration_no'=>$registration_no,'type'=>'issue'));

             if ($result) {
                echo '<script>alert("This student already has a book issued.");</script>';
            } else {
            $data['registration_no'] = $this->input->post('registration_no');
            $data['setname'] = $this->input->post('setname');
            $data['issuedate'] = $this->input->post('issuedate');
            $data['remark'] = $this->input->post('remark');
            $data['status'] = $this->input->post('status');
            $data['type'] =  'issue';
 
            $this->crud->insert('issue_book', $data);
            echo '<script>alert("Student  Books Issue Succesfully")</script>';
        }
    }

         $data['ALLDATA'] = $this->crud->fetchA11datadb2('admission');
        $this->load->view('admin/student/student_list', $data);
    }
 

    public function history() {
        $data['issue'] = $this->crud->fetchA11data('issue_book');

         $this->load->view('admin/student/issue_history',$data);
    }
 





    public function issue()
    {
            if(isset($_REQUEST['issueid']))
            {
            $id=$_REQUEST['issueid'];
            $type=$_REQUEST['type'];	
                if($type=='issue')
                {
                $type='return';
                } 
                else
                {
                     $type='issue';
                }
            $data=array('type'=>$type);
            }
            $this->crud->update('issue_book',$data,$id);
            echo "<script>alert('Data updated successfully!'); window.location='../history';</script>";

            
    } 
    public function return()
    {
            if(isset($_REQUEST['returnid']))
            {
            $id=$_REQUEST['returnid'];
            $type=$_REQUEST['type'];	
                if($type=='return')
                {
                $type='issue';
                } 
                else
                {
                     $type='return';
                }
            $data=array('type'=>$type);
            }
            $this->crud->update('issue_book',$data,$id);

            echo "<script>alert('Data updated successfully!'); window.location='../history';</script>";

    }
   
    
}
