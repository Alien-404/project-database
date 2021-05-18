<?php

class Session {

    public static function checkLogin() {
        if(isset($_SESSION['login']))
        {
            header('Location: ' . Config::BASEURL);
		    exit;
        }
    }

    public static function filterAdmin() {
        if(isset($_SESSION['login']))
        {
            if($_SESSION['login'][0]['role'] != 'admin' ) {
                header('Location: ' . Config::BASEURL);
		        exit;
            }
        } else {
            header('Location: ' . Config::BASEURL);
		    exit;
        }
    }

    public static function setAdmin() {

        if(isset($_SESSION['login'])) {
            if($_SESSION['login'][0]['role'] == 'admin') {
                echo '
                <li class="nav-item">
                    <a class="nav-link" href=" ' . Config::BASEURL . 'admin/index">Site Admin</a>
                </li>
                ';
            } 
        }

    }

    public static function bntLogin() {

        if(isset($_SESSION['login'])) {
            echo '
            <li class="nav-item">
                <a class="nav-link" href=" ' . Config::BASEURL . 'home/logout">log out</a>
            </li>
            ';
        } else {
            echo '
            <li class="nav-item">
                <a class="nav-link" href=" ' . Config::BASEURL . 'auth/login">login</a>
            </li>
            ';
        }

    }

    public static function commentsTemplate() {

        if(isset($_SESSION['login'])) {
            echo '
            <div class="col-lg-12">
            <div class="sidebar-item submit-comment">
            <div class="sidebar-heading">
                <h2>Your comment</h2>
            </div>
            <div class="content">
                <form id="comment" action="" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                    <fieldset>
                        <textarea name="review" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                    </fieldset>
                    </div>
                    <div class="col-lg-12">
                    <fieldset>
                        <button type="submit" id="form-submit" class="main-button" name="btnReview">Submit</button>
                    </fieldset>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
            ';
        } else {
            echo 
            '
            <div class="col-lg-12">
                <p>Login for comment | <a href="' . Config::BASEURL . 'auth/login">Login</a></p>
            </div>
            ';
        }
    }

    public static function unsetLogin() {
        session_unset();
		session_destroy();
        Cookies::unsetCookies('token', '', 7);
        Cookies::unsetCookies('key', '', 7);
    }

    public static function setSession($name, $value = []){
        $_SESSION[$name] = [
            $value
        ];
    }




}