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
        if(isset($_POST['email']) && isset($_POST['password'])){
            If ($this->PersonenModel->login() != NULL){
                $password = $this->PersonenModel->login()['Password'];
                return redirect()->to(base_url() . '/ToDoListe');
                /*if(password_verify($_POST['password'], $password)){
                    $this->session->set('loggedin', TRUE);
                    return redirect()->to(base_url() . '/ToDoListe');
                }*/
            }
        }

        echo view("templates/Header");
        echo view('Login');
        echo view("templates/Footer");
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url() . '/login');
    }
}
