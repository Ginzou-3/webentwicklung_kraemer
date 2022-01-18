<?php

namespace App\Controllers;

class ToDoListe extends BaseController
{
    public function index()
    {
        echo view("templates/Header");
        echo view('ToDoListe');
        echo view("templates/Footer");
    }
}
