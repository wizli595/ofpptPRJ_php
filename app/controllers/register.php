<?php

class register extends Controller
{
    function index()
    {
        $data['page_title'] = "signUp";
        if (isset($_POST['mail'])) {
            $user = $this->loadModel("user");
            $user->singup($_POST);
        } elseif (isset($_POST['username']) && !isset($_POST['mail'])) {

            $user = $this->loadModel("user");
            $user->login($_POST);
        }
        $this->view("register", $data);
    }
}
