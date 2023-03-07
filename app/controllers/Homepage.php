<?php

class Homepage extends BaseController
{
    public function index()
    {
       $data = [
        'title' => 'Welkom op de homepage',
       ];

       $this->view('Homepage/index', $data);
    }
}