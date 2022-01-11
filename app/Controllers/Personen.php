<?php

namespace App\Controllers;
use App\Models\PersonenModel;

class Personen extends BaseController
{
    public function __construct(){
        $this->personenmodel = new PersonenModel();
    }
    public function index()
    {
        $data['personen'] = $this->personenmodel->getCredentials();

        echo view("templates/Header");
        echo view('Personen', $data);
        echo view("templates/Footer");
    }
}
