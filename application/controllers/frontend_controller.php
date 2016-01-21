<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class frontend_controller extends CI_Controller {

	
	function __construct(){
		parent :: __construct();
	}


	public function index()
	{
		$data['main_content'] = 'frontend/home';
		$this -> load -> view('includes/templates',$data);
	}

	public function about()
	{
		$data['main_content'] = 'frontend/about';
		$this -> load -> view('includes/templates',$data);
	}

	public function room()
	{
		$data['main_content'] = 'frontend/room';
		$this -> load -> view('includes/templates',$data);
	}

	public function restaurant()
	{
		$data['main_content'] = 'frontend/restaurant';
		$this -> load -> view('includes/templates',$data);
	}

	public function gallery()
	{
		$data['main_content'] = 'frontend/gallery';
		$this -> load -> view('includes/templates',$data);
	}

	public function reviews()
	{
		$data['main_content'] = 'frontend/reviews';
		$this -> load -> view('includes/templates',$data);
	}

	public function contact()
	{
		$data['main_content'] = 'frontend/contact';
		$this -> load -> view('includes/templates',$data);
	}


}