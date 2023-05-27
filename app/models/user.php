<?php
session_start();
class user
{
    function login($POST)
    {

        $DB = new Database();

        $_SESSION['error'] = "";
        if (isset($POST['email']) && isset($POST['pass'])) {

            $pass = $POST['pass'];
            $mail = $POST['email'];

            $query = "select * from users where email = '$mail' && pass = '$pass'";
            $data = $DB->read($query);

            if (is_array($data)) {
                //logged in
                $_SESSION['username'] = $data[0]['username'];
                $_SESSION['mail'] = $data[0]['email'];
                header("Location:index");
                // die;
            } else {

                $_SESSION['error'] = "wrong username or password";
            }
        } else {

            $_SESSION['error'] = "please enter a valid username and password";
        }
    }
    function singup($POST)
    {
        $DB = new Database();

        $_SESSION['error'] = "";
        if (isset($POST['username']) && isset($POST['pass'])) {

            $user = $POST['username'];
            $pass = $POST['pass'];
            $mail = $POST['mail'];


            $query = "insert into users values('$user','$pass','$mail')";
            $data = $DB->write($query);
            if ($data) {

                header("Location:login");
                die;
            }
        } else {

            $_SESSION['error'] = "please enter a valid username and password";
        }
    }
    function check_login()
    {
        $DB = new Database();
        if (isset($_SESSION['user_url'])) {

            $arr['user_url'] = $_SESSION['user_url'];

            $query = "select * from users where url_address = :user_url limit 1";
            $data = $DB->read($query, $arr);
            if (is_array($data)) {
                //logged in
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;

                return true;
            }
        }

        return false;
    }
    function logout()
    {
        //logged in
        unset($_SESSION['username']);

        header("Location:index");
    }
}
