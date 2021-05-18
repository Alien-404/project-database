<?php

class Cookies {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public static function setCookies($name, $value, $days) {
        $time = time() + ($days * 24 * 60 * 60);
        setcookie($name, $value, $time, '/', false);
    }
    
    public static function unsetCookies($name, $value, $days) {
        $time = time() - ($days * 24 * 60 * 60);
        setcookie($name, $value, $time, '/', false);
    }

    public function checkToken(){
        if(isset($_COOKIE['token']) && isset($_COOKIE['key'])) {
            $token = $_COOKIE['token'];
            $key = $_COOKIE['key'];

            //check register or not
            $query = 'SELECT * FROM ' . $this->table . ' WHERE id_user = "' . $token . ' " ';
            $this->db->query($query);
            $res = $this->db->resultSet();
            $count = count($res);

            //check email
            if($count > 0) {
                if($key === hash('sha256', $res[0]['email_user'])) {
                    $value = [
                        'name' => $res[0]['nama_user'],
                        'role' => $res[0]['roles'],
                        'email' => $res[0]['email_user']
                    ];
                    Session::setSession('login', $value);
                }
            }
        }
    }

    public static function checkCookies() {
        $check = new Cookies;
        $check->checkToken();
    }



}
