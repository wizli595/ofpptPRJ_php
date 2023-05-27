<?php

class eventsingle extends Controller
{
    function index()
    {
        $data['page_title'] = "eventsingl";
        $this->view("eventsingle", $data);
    }
}
