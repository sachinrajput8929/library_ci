<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books extends CI_Controller
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






    public function all_book()
    {
        $this->checkadminlogin();

        if (isset($_POST['addbook'])) {
            $course= $this->input->post('course');
            $book = $this->input->post('book_name');

            $result = $this->crud->selectbymultiplecolumn('book', array('course'=>$course, 'book_name'=>$book));
            if ($result) {
               echo '<script>alert("This Course ,Book already add on book list.");</script>';
           } else {

            $filename = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            move_uploaded_file($tempname, 'assets/uploads/' . $filename);
            $data['image'] = $filename;

            $data['university'] = $this->input->post('university');
            $data['course'] = $this->input->post('course');
            $data['book_name'] = $this->input->post('book_name');
            $data['author'] = $this->input->post('author');
            $data['price'] = $this->input->post('price');
            $data['type'] = $this->input->post('type');
            $data['medium'] = $this->input->post('medium');
            $data['status'] = $this->input->post('status');
            $data['created'] = date('Y-m-d');


            

            $this->crud->insert('book', $data);
            echo '<script>alert("Add Books Succesfully")</script>';
           }
        }

        $data['ALLDATA'] = $this->crud->fetchA11data('book');
        $this->load->view('admin/books/all_book', $data);
    }

    public function fetchCourses() {
        if ($this->input->post('university_id')) {
            $university_id = $this->input->post('university_id');
            echo $this->crud->fetchCourses($university_id);
            
        }
    }


//book id get into store id stocks
    public function add_book_stock($book_id)
    {
        $this->checkadminlogin();

        $data['book'] = $this->crud->get_book_by_id($book_id);
        // Return the data as JSON
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(['data' => $data['book']]));
    }
    

    public function bookquantity()
    {
        $this->checkadminlogin();
        
        $args = func_get_args();
        
        if (isset($_POST['addstock'])) {
            $filename = $_FILES['bill']['name'];
            $tempname = $_FILES['bill']['tmp_name'];
            move_uploaded_file($tempname, 'assets/uploads/' . $filename);
            $data['bill'] = $filename;
    
            $data['book_id'] = $this->input->post('book_id');
            $data['stock_quantity'] = $this->input->post('stock_quantity');
            $data['remark'] = $this->input->post('remark');
            $data['status'] = $this->input->post('status');
            $data['add_date'] = date('Y-m-d');
    
            $this->crud->insert('book_stock', $data);
            echo '<script>alert("Add Books Stock Successfully")</script>';
            echo '<script>window.location.href="'.base_url('books/all_book').'";</script>'; 
    
            // Update book quantity
            $book_id = $this->input->post('book_id');
            $available_quantity = $this->input->post('available_quantity');
            $updated_quantity = $available_quantity; // Calculate updated quantity
    
            $book_data['available_quantity'] = $updated_quantity;
            $this->crud->update('book', $book_data, $book_id);
            echo '<script>alert("Update Book Stock Successfully")</script>';
            echo '<script>window.location.href="'.base_url('books/all_book').'";</script>'; 
        }
    }
    
   
    

public function edit()
{
    $args=func_get_args();
    if(isset($_POST['updatebook']))
     {
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') 
        {
            $filename = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            move_uploaded_file($tempname, 'assets/uploads/' . $filename);
            $data['image'] = $filename;
        }
        
        $data['university'] = $this->input->post('university');
        $data['course'] = $this->input->post('course');
        $data['book_name'] = $this->input->post('book_name');
        $data['author'] = $this->input->post('author');
        $data['price'] = $this->input->post('price');
        $data['type'] = $this->input->post('type');
        $data['medium'] = $this->input->post('medium');
        $data['status'] = $this->input->post('status');
         
         $this->crud->update('book',$data,$args[0]);
       echo '<script>alert("Updated Book data Succesfully")</script>';
        echo '<script>window.location.href="'.base_url('books/all_book').'";</script>';
     }

     $data['EDITDATA']=$this->crud->selectbycolumn('book','id',$args[0]);
     $this->load->view('admin/books/edit_book',$data);
}



    public function delete()
	{
	$args=func_get_args();
	$this->crud->delete('book',$args[0]);
    echo '<script>alert("Are You sure Delete This Book!")</script>';
    echo '<script>window.location.href="'.base_url('books/all_book').'";</script>'; 
 	}
}
