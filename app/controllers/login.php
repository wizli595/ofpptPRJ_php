<?php

class Login extends Controller
{
    function index()
    {
        $data['page_title'] = "login";

        if (isset($_POST['email'])) {
            $user = $this->loadModel("user");
            $user->login($_POST);
            // echo $_SESSION['error'];
            // print_r($_POST);
        }
        $this->view("login", $data);
    }
}
