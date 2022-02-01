<?php

namespace App\Controllers;

use App\Models\ProjekteModel;

class Projekte extends BaseController
{
    public function __construct()
    {
        $this->ProjekteModel = new ProjekteModel();
        $this->session = \Config\Services::session();

        if (session()->get('loggedin')== NULL){
            header("Location: " . base_url(). "/Login");
            exit();
        }
    }

    public function index()
    {

        $data['aufgaben'] = $this->ProjekteModel->getAll();

        echo view("templates/Header");
        echo view('Projekte', $data);
        echo view("templates/Footer");
    }

    public function ced_edit($name = null, $todo = 0)
    {
        // Todo: 0 = create, 1 = Bearbeiten, 2 = löschen
        $data['todo'] = $todo;
        // Person bearbeiten oder löschen
        if ($name != null && ($todo == 1 || $todo == 2)) {
            $data['projekt'] = $this->ProjekteModel->getProjekte($_SESSION['projekt']);
        }

        echo view('templates/header');
        echo view('ProjekteEdit', $data);
        echo view('templates/footer');
    }

    public function submit_edit()
    {

        // Projekt auswählen
        if (isset($_POST['choose'])) {

            //echo view("templates/Header");
            //echo view('Projekte', $_POST);
            //echo view("templates/Footer");
            $_SESSION['projekt']=$_POST['selectfield'];
            return redirect()->to(base_url('Projekte'));
        }
        //Projekt erstellen
        elseif (isset($_POST['save'])) {

            $this->ProjekteModel->createProjekt();
            return redirect()->to(base_url('Projekte'));

        } // Projekt löschen

        //Projekt bearbeiten
        elseif (isset($_POST['edit'])) {
            $this->ProjekteModel->updateProjekt();
            return redirect()->to(base_url('Projekte'));
        }

        elseif (isset($_POST['delete'])) {
            $this->ProjekteModel->deleteProjekt();
            return redirect()->to(base_url('Projekte'));
        }
        // Abbrechen
        elseif (isset($_POST['reset'])) {
            return redirect()->to(base_url('Projekte'));
        }
    }


}
