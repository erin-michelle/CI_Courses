<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('course');
	}
	public function index()
	{
  		$courses = $this->course->index();
    	// var_dump($courses); die();
    	$this->load->view('main', array('all_courses'=>$courses));
		
	}

	public function add()
	{
        $course_details = array(
        "course_name" => $this->input->post('name'),
        "description" => $this->input->post('descrip')
         ); 
        $this->course->show('$course_details');
        redirect('/');

    }	

    public function destroy($course_id)
    {
    // var_dump($course_id); die();
    	$course = $this->course->show($course_id);
    	$this->load->view('remove', array('course'=>$course));

  	}
	

	public function remove($course_id)
	{
		$this->course->delete($course_id);
		redirect('/');
	}	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */