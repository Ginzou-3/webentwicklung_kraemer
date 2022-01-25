<?php

namespace App\Controllers;

use App\Models\AufgabenModel;
use App\Models\ReiterModel;
use App\Models\PersonenModel;

class Aufgaben extends BaseController
{

    public function __construct()
    {
        $this->AufgabenModel = new AufgabenModel();
        $this->ReiterModel = new ReiterModel();
        $this->PersonenModel = new PersonenModel();

        /*if (session()->get('loggedin')== NULL){
            return redirect()->to(base_url() . '/login/index');
        }*/

    }
    public function index()
    {
        $data['personen'] = $this->AufgabenModel->getAll();
        $data['reiter'] = $this->ReiterModel->getAll();
        $data['mitglieder'] = $this->PersonenModel->getCredentials();

        echo view("templates/Header");
        echo view('Aufgaben', $data);
        echo view("templates/Footer");
    }



    public function ced_edit($id = 0, $todo = 0)
    {

        // Todo: 0 = create, 1 = Bearbeiten, 2 = löschen
        $data['todo'] = $todo;
        // Person bearbeiten oder löschen
        if ($id != 0 && ($todo == 1 || $todo == 2))
            $data['aufgaben'] = $this->AufgabenModel->getaufgaben($id);


        echo view('templates/header');
        echo view('AufgabenEdit', $data);
        echo view('templates/footer');


    }

    public function submit_edit()
    {

        // Person hinzufügen
        if (isset($_POST['submit'])) {

            $this->AufgabenModel->createAufgaben();
            return redirect()->to(base_url('Aufgaben'));
        } //Person ändern

        elseif (isset($_POST['edit'])) {

            $this->AufgabenModel->updateAufgaben();
            return redirect()->to(base_url('Aufgaben'));

        } // Person löschen

        elseif (isset($_POST['delete'])) {
            $this->AufgabenModel->deleteAufgaben();
            return redirect()->to(base_url('Aufgaben'));
        } // Abbrechen

        elseif (isset($_POST['reset'])) {
            return redirect()->to(base_url('Aufgaben'));
        }
    }
}
