<?php

namespace App\Models;

use CodeIgniter\Model;

class ReiterModel extends Model{

    public function getAll(){

        $result = $this->db->query('SELECT * FROM reiter');
        return $result->getResultArray();

    }

}