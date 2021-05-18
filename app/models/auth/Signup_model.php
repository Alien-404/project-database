<?php

class Signup_model {
    private $table = 'users';
    private $db;
    //default roles and status
    private $roles = 'user';
    private $status = true;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function signup($data)
    {   

            $nama = $_POST['name'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            //check email are registered or not
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email_user = "' . $email . ' " ');
            $res = $this->db->resultSet();
            $count = count($res);

            if($count > 0) {
                Flasher::setFlasher('email addreas is already registered', '', 'danger');
                header('Location: ' . Config::BASEURL . 'auth/signup');
                exit;
            }

            //encrypt password
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $query = "INSERT INTO $this->table VALUES ('', '$nama', '$email', '$pass', '$this->roles', '$this->status')";
            $this->db->query($query);
            $this->db->execute();
            $this->db->setCommit();


            Flasher::setFlasher('account has been created!', '', 'success');
            header('Location: ' . Config::BASEURL . 'auth/login');
            return $this->db->rowCount();            

    }


}