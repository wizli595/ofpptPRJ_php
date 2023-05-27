<?php

class blogsingle extends Controller
{
    function index()
    {
        $data['page_title'] = "blog";
        $this->view("blogsingle", $data);
    }
}
