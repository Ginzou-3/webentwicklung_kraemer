<?php

namespace App\Models;

use CodeIgniter\Model;

class AufgabenModel extends Model{

    public function getAll(){

        $result = $this->db->query('SELECT * FROM aufgaben');
        return $result->getResultArray();

    }

}
