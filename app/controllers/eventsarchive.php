<?php

class eventsarchive extends Controller
{
    function index()
    {
        $data['page_title'] = "events";
        $this->view("eventsarchive", $data);
    }
}
