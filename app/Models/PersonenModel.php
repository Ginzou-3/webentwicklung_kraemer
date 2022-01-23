<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonenModel extends Model{

    public function getCredentials(){

        $result = $this->db->query('SELECT Username, EMail, id FROM mitglieder');
        return $result->getResultArray();

    }

    public function login(){
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('Password');
        $this->personen->where('mitglieder.EMail', $_POST['email']);
        $result = $this->personen->get();


        return $result->getRowArray();
    }

    public function getpersonen($id = 0){
        $this->personen = $this->db->table('mitglieder');
        $this->personen->select('*');

        IF ($id != 0)
            $this->personen->where('mitglieder.id', $id);

        $this->personen->orderBy('Username');
        $result = $this->personen->get();

        if ($id != 0)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createPerson() {

        $this->personen = $this->db->table('mitglieder');
        $this->personen->insert(array(
            'Username' => $_POST['username'],
            'EMail' => $_POST['email'],
            'Password' => password_hash($_POST['password'], PASSWORD_DEFAULT)));

    }
    public function deletePerson() {
        $this->personen = $this->db->table('mitglieder');
        $this->personen->where('mitglieder.EMail', $_POST['email']);
        $this->personen->delete();
    }

    public function updatePerson() {

        $this->personen = $this->db->table('mitglieder');
        $this->personen->where('mitglieder.id', $_POST['id']);
        $this->personen->update(array('Username' => $_POST['username'],
            'EMail' => $_POST['email'],
            'Password' => password_hash($_POST['password'], PASSWORD_DEFAULT)));
    }




}