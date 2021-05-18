<?php

class Admin extends Controller {
    
    public function index() {
        Session::filterAdmin();
        $data['title'] = 'Dashboard | Admin';
        $data['active'] = 'dashboard';
        $data['user'] = $this->model('User_model')->getAllUser();
        $this->view('templates/admin/header', $data);
        $this->view('admin/dashboard', $data);
        $this->view('templates/admin/footer');
    }

    public function getBlock() {
        echo json_encode($this->model('User_model')->getUserById($_POST['id']));
    }

    public function getActive() {
        echo json_encode($this->model('User_model')->getUserById($_POST['id']));
    }

    public function getEditkat() {
        echo json_encode($this->admin('Admin_model')->getkategoriById($_POST['id']));
    }

    public function block() {
        if($this->model('User_model')->blockUser($_POST > 0)) {
            Flasher::setFlasher('Block user Succesfuly!', '', 'success');
            header('Location: ' . Config::BASEURL . 'admin/users');
            exit;
        }
    }

    public function active() {
        if($this->model('User_model')->activeUser($_POST > 0)) {
            Flasher::setFlasher('Active user Succesfuly!', '', 'success');
            header('Location: ' . Config::BASEURL . 'admin/users');
            exit;
        }
    }

    public function editkategori() {
        if($this->admin('Admin_model')->editKategori($_POST > 0)) {
            Flasher::setFlasher('Edit Succesfuly!', '', 'success');
            header('Location: ' . Config::BASEURL . 'admin/kategori');
            exit;
        }
    }

    public function archives() {
        Session::filterAdmin();
        $data['title'] = 'Archives | Admin';
        $data['active'] = 'pages';
        $data['post'] =  $this->admin('Admin_model')->getAllPublish();
        $data['kategori'] = $this->admin('Admin_model')->getKategori();
        $data['search'] =  $this->admin('Admin_model')->searchArchives();
        $this->view('templates/admin/header', $data);
        $this->view('admin/archives', $data);
        $this->view('templates/admin/footer', $data);
    }

    public function details($id = 0) {
        Session::filterAdmin();
        $data['title'] = 'Details | Admin';
        $data['active'] = 'pages';
        $data['details'] = $this->admin('Admin_model')->getDetailPost($id);
        $this->view('templates/admin/header', $data);
        $this->view('admin/details', $data);
        $this->view('templates/admin/footer', $data);
    }

    public function edit_post($id = 0) {
        Session::filterAdmin();
        $data['title'] = 'Edit Post | Admin';
        $data['active'] = 'pages';
        $data['details'] = $this->admin('Admin_model')->getDetailPost($id);
        $data['kategori'] = $this->admin('Admin_model')->getKategori();
        $this->admin('Admin_model')->editSave($id);
        $this->view('templates/admin/header', $data);
        $this->view('admin/edit_post', $data);
        $this->view('templates/admin/footer', $data);
    }

    public function post() {
        Session::filterAdmin();
        $data['title'] = 'Post Wisata | Admin';
        $data['active'] = 'pages';
        $data['kategori'] = $this->admin('Admin_model')->getKategori();
        $this->admin('Admin_model')->post();
        $this->view('templates/admin/header', $data);
        $this->view('admin/publish', $data);
        $this->view('templates/admin/footer', $data);
    }

    public function getDelete() {
        echo json_encode($this->admin('Admin_model')->getPostById($_POST['id']));
    }

    public function delete() {
        if($this->admin('Admin_model')->delete($_POST > 0)) {
            Flasher::setFlasher('Delete Succesfuly!', '', 'success');
            header('Location: ' . Config::BASEURL . 'admin/archives');
            exit;
        }
    }

    public function search()
    {
        Session::filterAdmin();
        $data['search'] =  $this->admin('Admin_model')->searchArchives();
        $this->view('admin/search', $data);
    }

    public function users()
    {
        Session::filterAdmin();
        $data['title'] = 'Users List Bolcked & Active | Admin';
        $data['active'] = 'pages';
        $data['user'] = $this->model('User_model')->getAllUser();
        $data['active'] = $this->model('User_model')->getAllUserActive();
        $this->view('templates/admin/header', $data);
        $this->view('admin/users', $data);
        $this->view('templates/admin/footer', $data);
    }

    public function kategori()
    {
        Session::filterAdmin();
        $data['title'] = 'Kategori List | Admin';
        $data['active'] = 'pages';
        $data['kategori'] =  $this->admin('Admin_model')->getAllKategori();
        $this->admin('Admin_model')->newKategori();
        $this->view('templates/admin/header', $data);
        $this->view('admin/kategori', $data);
        $this->view('templates/admin/footer', $data);
    }

    


}