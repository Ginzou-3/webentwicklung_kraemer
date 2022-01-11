<?php

namespace App\Controllers;

class Projekte extends BaseController
{
    public function index()
    {
        echo view("templates/Header");
        echo view('Projekte');
        echo view("templates/Footer");
    }
}
