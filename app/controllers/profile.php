<?php

class profile extends Controller
{
    function index()
    {

        $data['page_title'] = "profile";
        $this->view("profile", $data);
    }
}
