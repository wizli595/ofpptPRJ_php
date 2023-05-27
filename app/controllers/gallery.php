<?php

class gallery extends Controller
{
    function index()
    {
        $data['page_title'] = "gallery";
        $this->view("gallery", $data);
    }
}
