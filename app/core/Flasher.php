<?php

class Flasher {

    public static function setFlasher($message, $action, $type) {

        $_SESSION['flash'] = [
            'message' => $message,
            'action' => $action,
            'type' => $type
        ];

    }
    
    public static function flash(){

        if(isset($_SESSION['flash'])) {
            echo 
            '<div class="alert alert-'. $_SESSION['flash']['type'] .'" role="alert">
                '. $_SESSION['flash']['message'] .'
            </div>';

            unset($_SESSION['flash']);
        }
        
    }
}