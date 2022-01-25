<?php

namespace App\Controllers;

class ToDoListe extends BaseController
{

    public function __construct(){
        if (session()->get('loggedin')== NULL){
            header("Location: " . base_url(). "/Login");
            exit();
        }
    }

    public function index()
    {
        echo view("templates/Header");
        echo view('ToDoListe');
        echo view("templates/Footer");
    }
}
