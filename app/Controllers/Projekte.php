<?php

namespace App\Controllers;

use App\Models\ProjekteModel;

class Projekte extends BaseController
{
    public function __construct()
    {
        $this->ProjekteModel = new ProjekteModel();
    }

    public function index()
    {

        $data['aufgaben'] = $this->ProjekteModel->getAll();

        echo view("templates/Header");
        echo view('Projekte', $data);
        echo view("templates/Footer");
    }

    public function ced_edit($id = 0, $todo = 0)
    {
        // Todo: 0 = create, 1 = Bearbeiten, 2 = löschen
        $data['todo'] = $todo;
        // Person bearbeiten oder löschen
        if ($id != 0 && ($todo == 1 || $todo == 2))
            $data['personen'] = $this->ProjekteModel->getpersonen($id);


        echo view('templates/header');
        echo view('PersonenEdit', $data);
        echo view('templates/footer');
    }

    public function submit_edit()
    {

        // Projekt auswählen
        if (isset($_POST['choose'])) {

            echo view("templates/Header");
            echo view('Projekte', $_POST);
            echo view("templates/Footer");
            //return redirect()->to(base_url('Projekte'));
        }
        //Projekt erstellen
        if (isset($_POST['save'])) {

            $this->ProjekteModel->createProjekt();
            return redirect()->to(base_url('Projekte'));

        } // Projekt löschen

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
