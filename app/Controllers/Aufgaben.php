<?php

namespace App\Controllers;

class Aufgaben extends BaseController
{
    public function index()
    {
        echo view("templates/Header");
        echo view('Aufgaben');
        echo view("templates/Footer");
    }
}
