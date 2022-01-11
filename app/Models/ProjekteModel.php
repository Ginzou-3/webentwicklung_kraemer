<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjekteModel extends Model{

    public function getAll(){

        $result = $this->db->query('SELECT * FROM projekte');
        return $result->getResultArray();

    }

}