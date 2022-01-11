<?php

namespace App\Controllers;

class Reiter extends BaseController
{
    public function index()
    {
        echo view("templates/Header");
        echo view('Reiter');
        echo view("templates/Footer");
    }
}
