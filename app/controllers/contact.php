<?php

class contact extends Controller
{
    function index()
    {
        $data['page_title'] = "contact us";
        $this->view("contact", $data);
    }
}
