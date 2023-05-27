<?php

class blogarchive extends Controller
{
    function index()
    {
        $data['page_title'] = "blog";
        $this->view("blogarchive", $data);
    }
}
