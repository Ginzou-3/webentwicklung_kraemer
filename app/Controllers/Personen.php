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


        echo view('templates/header');
        echo view('person/PersonenEdit', $data);
        echo view('templates/footer');

    }

    public function ced_edit($id = 0, $todo = 0)
    {

        // Todo: 0 = create, 1 = Bearbeiten, 2 = löschen
        $data['todo'] = $todo;
        // Person bearbeiten oder löschen
        if ($id != 0 && ($todo == 1 || $todo == 2))
            $data['personen'] = $this->PersonenModel->getpersonen($id);


        echo view('templates/header');
        echo view('PersonenEdit', $data);
        echo view('templates/footer');


    }

    public function submit_edit()
    {

        // Person hinzufügen
        if (isset($_POST['submit'])) {

                $this->PersonenModel->createPerson();
                return redirect()->to(base_url('Personen'));
        } //Person ändern

        elseif (isset($_POST['edit'])) {

            $this->PersonenModel->updatePerson();
            return redirect()->to(base_url('Personen'));

        } // Person löschen

        elseif (isset($_POST['delete'])) {
            $this->PersonenModel->deletePerson();
            return redirect()->to(base_url('Personen'));
        } // Abbrechen

        elseif (isset($_POST['reset'])) {
            return redirect()->to(base_url('Personen'));
        }
    }

    //Nur als Hilfe wie es Kalenborn gemacht hat
    public function submit_edit_val()
    {
        if (isset($_POST['delete'])) {
            $data['todo'] = 1;
            if ($this->validation->run($_POST, 'personenbearbeiten')) {
                //Daten speichern
                if (isset($_POST['id']) && $_POST['id'] != '') {
                    $this->PersonenModel->updatePerson();
                }
                else {
                    $this->PersonenModel->createPerson();
                }
                return redirect()->to(base_url('personen/index_val'));

            }
            else {
                //Fehlermedlung generieren
                $data['personen'] = $_POST;
                $data['error'] = $this->validation->getErrors();

                echo view('templates/header');
                echo view('personen', $data);
                echo view('templates/footer');
            }
        }
    }


}