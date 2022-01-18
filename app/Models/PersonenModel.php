<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonenModel extends Model{

    public function getCredentials(){

        $result = $this->db->query('SELECT Username, EMail FROM mitglieder');
        return $result->getResultArray();

    }

    public function login(){
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('Password');
        $this->personen->where('mitglieder.EMail', $_POST['email']);
        $result = $this->personen->get();


        return $result->getRowArray();
    }

    public function getpersonen($email = NULL){
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');

        IF ($email != NULL)
            $this->personen->where('mitglieder.EMail', $email);

        $this->personen->orderBy('Username');
        $result = $this->personen->get();

        if ($email != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createPerson() {

        $this->personen = $this->db->table('mitglieder');
        $this->personen->insert(array(
            'Username' => $_POST['username'],
            'EMail' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)));

    }
    public function deletePerson() {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->where('mitglieder.EMail', $_POST['email']);
        $this->personen->delete();
    }

    public function updatePerson() {

        echo("<pre>");
        echo var_dump($_POST);
        echo("</pre>");

        $this->personen = $this->db->table('mitglieder');
        $this->personen->where('mitglieder.EMail', $_POST['email']);
        $this->personen->update(array('Username' => $_POST['username'],
            'EMail' => $_POST['email']));
    }




}
