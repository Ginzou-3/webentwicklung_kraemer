<?php

namespace App\Controllers;

use App\Models\PersonenModel;

class Login extends BaseController
{
    public function __construct(){
        $this->PersonenModel = new PersonenModel();
        $this->session = \Config\Services::session();



    }

    public function index()
    {
        if ($this->validation->run($_POST, 'login')) {
            if ($this->PersonenModel->login() != NULL) {
                $password = $this->PersonenModel->login()['Password'];
                if (password_verify($_POST['password'], $password)) {
                    $this->session->set('loggedin', TRUE);
                    return redirect()->to(base_url() . '/ToDoListe');
                }
            }

        } else {
            $data['person'] = $_POST;
            $data['error'] = $this->validation->getErrors();
        }


        if (isset($data["person"]) && !empty($data["person"])) {
            echo view("templates/Header");
            echo view('Login', $data);
            echo view("templates/Footer");
        } else {

            echo view("templates/Header");
            echo view('Login');
            echo view("templates/Footer");
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url() . '/Login');
    }
}
