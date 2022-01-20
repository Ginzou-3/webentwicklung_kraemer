<?php

namespace App\Controllers;

use App\Models\PersonenModel;

class Personen extends BaseController
{
    public function __construct()
    {
        $this->PersonenModel = new PersonenModel();

        /*if (session()->get('loggedin')== NULL){
            return redirect()->to(base_url() . '/login/index');
        }*/

    }

    public function index()
    {
        $data['personen'] = $this->PersonenModel->getCredentials();


        echo view("templates/Header");
        echo view('Personen', $data);
        echo view("templates/Footer");
    }

    public function index_edit()
    {
        $data ['personen'] = $this->PersonenModel->getpersonen();

        //echo("<pre>");
        //var_dump($_POST);
        //var_dump($data);
        //echo("</pre>");


        echo view('templates/header');
        echo view('person/PersonenEdit', $data);
        echo view('templates/footer');

    }

    public function ced_edit($email = NULL, $todo = 0)
    {

        // Todo: 0 = create, 1 = Bearbeiten, 2 = löschen
        $data['todo'] = $todo;
        // Person bearbeiten oder löschen
        if ($email != NULL && ($todo == 1 || $todo == 2))
            $data['personen'] = $this->PersonenModel->getpersonen($email);

        echo("<pre>");
        var_dump($email);
        echo "ced edit";
        echo("</pre>");


        echo view('templates/header');
        echo view('PersonenEdit', $data);
        echo view('templates/footer');

        //redirect()->to(base_url('Personen/submit_edit'));

    }

    public function submit_edit()
    {

        //echo("<pre>");
        //var_dump($_POST);
        //echo("</pre>");

        // Person hinzufügen
        if (isset($_POST['submit'])) {

            $this->PersonenModel->createPerson();
            return redirect()->to(base_url('Personen'));
        } //Person ändern
        elseif (isset($_POST['edit'])) {
            echo("Edit");

            $this->PersonenModel->updatePerson();
            return redirect()->to(base_url('Personen'));

        } // Person löschen
        elseif (isset($_POST['delete'])) {
            echo "delete";
            $this->PersonenModel->deletePerson();
            return redirect()->to(base_url('Personen'));
        } // Abbrechen
        elseif (isset($_POST['btnAbbrechen'])) {
            return redirect()->to(base_url('Personen'));
        }
    }

}
