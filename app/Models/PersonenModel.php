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
        $this->personen->select('password');
        $this->personen->where('mitglieder.email', $_POST['email']);
        $result = $this->personen->get();

        return $result->getRowArray();
    }

    public function date(){
        $result = $this->db->query('SELECT datumvon, datumbis FROM dokumente WHERE produktid = id');
        return $result->getResultArray();
    }

}
