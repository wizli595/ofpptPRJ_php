<?php

class CourseArchive extends Controller
{
    function index()
    {
        $data['page_title'] = "courses";
        $this->view("coursearchive", $data);
    }
}
