<?php 

class Home extends Controller {
	public function index() 
	{
		Cookies::checkCookies();
		$data['title'] = 'Home Page | JatimLelungon';
		$data['post'] = $this->model('User_model')->getAllPublish();
		$data['kategori'] = $this->model('User_model')->getAllKategori();
		$this->view('templates/header', $data);
		$this->view('templates/banner', $data);
		$this->view('home/index', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/footer');
	}

	public function details($id = 0) 
	{
		Cookies::checkCookies();
		$data['title'] = 'Detail Post | JatimLelungon';
		$data['post'] = $this->model('User_model')->getAllPublish();
		$data['kategori'] = $this->model('User_model')->getAllKategori();
		$data['details'] = $this->model('User_model')->getPublishById($id);
		$this->model('User_model')->submitReview($id);
		$this->view('templates/header', $data);
		$this->view('home/details_post', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/footer');
	}

	public function blogs($page = null) 
	{
		Cookies::checkCookies();
		$data['title'] = 'All Post | JatimLelungon';
		$data['post'] = $this->model('User_model')->getAllPublish();
		$data['kategori'] = $this->model('User_model')->getAllKategori();
		$data['blogs'] = $this->model('User_model')->blogs($page);
		$this->view('templates/header', $data);
		$this->view('home/blogs', $data);
		$this->view('templates/sidebar', $data);
		$this->view('templates/footer');
	}

	public function contact() 
	{
		Cookies::checkCookies();
		$data['title'] = 'Contact Us | JatimLelungon';
		$this->view('templates/header', $data);
		$this->view('home/contact', $data);
		$this->view('templates/footer');
	}

	public function about_us() 
	{
		Cookies::checkCookies();
		$data['title'] = 'About Us | JatimLelungon';
		$this->view('templates/header', $data);
		$this->view('home/about_us', $data);
		$this->view('templates/footer');
	}

	public function privacy_policy() 
	{
		Cookies::checkCookies();
		$data['title'] = 'Privacy Policy | JatimLelungon';
		$this->view('templates/header', $data);
		$this->view('home/privacy_policy', $data);
		$this->view('templates/footer');
	}

	public function terms_conditions() 
	{
		Cookies::checkCookies();
		$data['title'] = 'Terms and Conditions | JatimLelungon';
		$this->view('templates/header', $data);
		$this->view('home/terms_conditions', $data);
		$this->view('templates/footer');
	}


	public function logout()
	{
		Session::unsetLogin();
		header('Location: ' . Config::BASEURL);
		exit;
	}

	public function getDetails()
	{
		echo json_encode($this->model('User_model')->editReview($_POST['id']));
	}

	public function saveEdit($id) {
        if($this->model('User_model')->saveReview($_POST > 0)) {
            Flasher::setFlasher('Update Succesfuly!', '', 'success');
            header('Location: ' . Config::BASEURL . 'home/details/' . $id);
            exit;
        }
    }

	public function saveDelete($id) {
        if($this->model('User_model')->DeleteReview($_POST > 0)) {
            Flasher::setFlasher('Delete Succesfuly!', '', 'success');
            header('Location: ' . Config::BASEURL . 'home/details/' . $id);
            exit;
        }
    }

}