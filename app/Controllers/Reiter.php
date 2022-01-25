<?php

namespace App\Controllers;

use App\Models\ReiterModel;

class Reiter extends BaseController
{
    public function __construct()
    {
        $this->ReiterModel = new ReiterModel();
    }

    public function index()
    {
        $data['reiter'] = $this->ReiterModel->getAll();

        echo view("templates/Header");
        echo view('Reiter', $data);
        echo view("templates/Footer");
    }

    public function ced_edit($id = 0, $todo = 0)
    {
        // Todo: 0 = create, 1 = Bearbeiten, 2 = löschen
        $data['todo'] = $todo;
        // Person bearbeiten oder löschen
        if ($id != 0 && ($todo == 1 || $todo == 2))
            $data['reiter'] = $this->ReiterModel->getReiter($id);


        echo view('templates/header');
        echo view('ReiterEdit', $data);
        echo view('templates/footer');
    }

    public function submit_edit()
    {

        // Person hinzufügen
        if (isset($_POST['save'])) {
            $this->ReiterModel->createReiter();
            return redirect()->to(base_url('Reiter'));
        } //Person ändern

        elseif (isset($_POST['edit'])) {

            $this->ReiterModel->updateReiter();
            return redirect()->to(base_url('Reiter'));

        } // Person löschen

        elseif (isset($_POST['delete'])) {
            $this->ReiterModel->deleteReiter();
            return redirect()->to(base_url('Reiter'));
        } // Abbrechen

        elseif (isset($_POST['reset'])) {
            return redirect()->to(base_url('Reiter'));
        }

    }
}