<?php

class coursesingle extends Controller
{
    function index()
    {
        $data['page_title'] = "courses";
        $this->view("coursesingle", $data);
    }
}
