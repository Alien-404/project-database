<?php

class Reset_model {
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function reset($data)
    {   

            $email = $_POST['email'];
            $current_pass = $_POST['current_pass'];
            $new_pass = $_POST['new_pass'];

            //check email are registered or not
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email_user = "' . $email . ' " ');
            $res = $this->db->resultSet();
            $count = count($res);

            if($count > 0) {
                if(password_verify($current_pass, $res[0]['password_user'])) {
                    //encrypt password
                    $new_hash = password_hash($new_pass, PASSWORD_DEFAULT);
                    $query = "UPDATE $this->table SET password_user='$new_hash' WHERE email_user ='$email'";
                    $this->db->query($query);
                    $this->db->execute();
                    $this->db->setCommit();
                    Flasher::setFlasher('password has been successfully changed', '', 'success');
                } else {
                    Flasher::setFlasher('your current password doesnt match!', '', 'danger');
                    header('Location: ' . Config::BASEURL . 'auth/reset');
                    exit;
                }               
            } else {
                Flasher::setFlasher('email addreas is not found', '', 'danger');
                header('Location: ' . Config::BASEURL . 'auth/reset');
                exit;
            }

            return $this->db->rowCount();            

    }


}