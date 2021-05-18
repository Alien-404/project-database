<?php

class About extends Controller {
	public function index()
	{
		$data['title'] = 'About Us';
		$data['user'] = $this->model('User_model')->getAllUser();
		$this->view('templates/header', $data);
		
		$this->view('templates/footer');
	}

	public function page()
	{
		echo 'about/page';
	}
}