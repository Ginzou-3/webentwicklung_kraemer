<?php

namespace App\Controllers;
use App\Models\PersonenModel;

class Personen extends BaseController
{
    public function __construct(){
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

    public function index_edit(){

        $data ['title'] = "Personendaten bearbeiten";
        $data ['person'] = $this->PersonenModel->getpersonen();

        echo view('templates/header');
        echo view('person/PersonenEdit', $data);
        echo view('templates/footer');

    }

    public function ced_edit($id = 0, $todo = 0) {

        // Todo: 0 = create, 1 = Bearbeiten, 2 = löschen
        $data['todo'] = $todo;
        // Person bearbeiten oder löschen
        if($id > 0 && ($todo == 1 || $todo == 2 ))
            $data['personen'] = $this->PersonenModel->getpersonen($id);

        echo view( 'templates/header');
        echo view( 'personen/edit', $data);
        echo view( 'templates/footer');

    }

    public function submit_edit() {

        // Person ändern
        if(isset($_POST['submit'] )) {

            // Daten speichern
            if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])) {
                $this->PersonenModel->createPerson();
            }
            return redirect()->to(base_url('Personen'));

        }
        // Person löschen
        elseif (isset($_POST['delete'])) {
            $this->PersonenModel->deletePerson();
            return redirect()->to(base_url('Personen'));
        }
        // Abbrechen
        elseif (isset($_POST['btnAbbrechen'])) {
            return redirect()->to(base_url('Personen/index_edit/'));
        }

    }
}
