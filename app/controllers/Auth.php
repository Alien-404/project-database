<?php 

class Auth extends Controller {

    public function index()
    {
        Session::checkLogin();
        $data['title'] = 'Log In';
        $this->auth('Login_model')->login();
        $this->view('templates/auth/header', $data);
        $this->view('auth/auth_login', $data);
        $this->view('templates/auth/footer');
    }    

    public function login()
    {   
        Session::checkLogin();
        $data['title'] = 'Log In';
        $this->auth('Login_model')->login();
        $this->view('templates/auth/header', $data);
		$this->view('auth/auth_login', $data);
		$this->view('templates/auth/footer');
    }

    public function signup()
    {
        Session::checkLogin();
        $data['title'] = 'Sign Up';
        $this->view('templates/auth/header', $data);
		$this->view('auth/auth_signup', $data);
		$this->view('templates/auth/footer');
    }

    public function insertUser() {
        if($this->auth('Signup_model')->signup($_POST > 0)) {
            header('Location: ' . Config::BASEURL . 'auth/login');
            exit;
        }
    }

    public function reset() {
        Session::checkLogin();
        $data['title'] = 'Reset Password';
        $this->view('templates/auth/header', $data);
        $this->view('auth/auth_reset', $data);
        $this->view('templates/auth/footer');
    }

    public function resetPass() {
        if($this->auth('Reset_model')->reset($_POST > 0)) {
            header('Location: ' . Config::BASEURL . 'auth/login');
            exit;
        }

    }

}