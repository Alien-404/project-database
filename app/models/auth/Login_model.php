<?php


class Login_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login()
    {
        
        if(isset($_POST['login'])) {
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email_user = "' . $email . ' " ');
            $res = $this->db->resultSet();
            $count = count($res);

            if($count > 0) {
                if(password_verify($pass, $res[0]['password_user'])) {
                    //cek status
                    if($res[0]['status'] == true) {

                    // set session value
                    $value = [
                        'id_user' => $res[0]['id_user'],
                        'name' => $res[0]['nama_user'],
                        'role' => $res[0]['roles'],
                        'email' => $res[0]['email_user']
                    ];
                    // cookies
                    if(isset($_POST['rememberme'])){
                        $token = $res[0]['id_user'];
                        $key = $res[0]['email_user'];
                        Cookies::setCookies('token', $token, 6);
                        Cookies::setCookies('key', hash('sha256', $key), 6);
                    }
                    // session
                    Session::setSession('login', $value);
                    header('Location: ' . Config::BASEURL);
                    exit;
                    } else {
                        Flasher::setFlasher('Your account has been blocked!', '', 'danger');
                    }
                } else {
                    Flasher::setFlasher('incorrect email or password', '', 'danger');
                }
            } else {
                Flasher::setFlasher('email not registered ', '', 'danger');
            }
        }

    }


}