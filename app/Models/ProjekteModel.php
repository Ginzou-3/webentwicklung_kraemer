<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjekteModel extends Model{

    public function getAll(){

        $result = $this->db->query('SELECT * FROM projekte');
        return $result->getResultArray();

    }

    public function createProjekt(){
        $this->projekte = $this->db->table('projekte');
        $this->projekte->insert(array(
            'Name' => $_POST['project'],
            'Beschreibung' => $_POST['description'],
            'erstellerid'=> "1"));
        //TODO work with session to save data

    }

    public function deleteProjekt(){
        $this->projekte = $this->db->table('projekte');
        $this->projekte->where('projekte.Name', $_POST['selectfield']);
        $this->projekte->delete();
    }


}