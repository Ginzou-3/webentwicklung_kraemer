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

    public function date($produkt_id){
        $result = $this->db->query('SELECT datumvon, datumbis 
                                        FROM dokumente 
                                        INNER JOIN dokumentenpositionen ON dekomentenpositionen.dokumenteid = dokumente.id 
                                        WHERE $produktid = id');
        return $result->getRowArray();
    }

}
