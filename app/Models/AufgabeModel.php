<?php namespace App\Models;
use CodeIgniter\Model;

class AufgabeModel extends Model{

    public function getData(){

        $result = $this->db->query('SELECT * FROM aufgaben');
        return $result->getResultArray();

    }

}
