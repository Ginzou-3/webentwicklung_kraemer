<?php

namespace App\Models;

use CodeIgniter\Model;

class ReiterModel extends Model{

    public function getAll(){

        $result = $this->db->query('SELECT * FROM reiter');
        return $result->getResultArray();

    }

    public function getReiter($id = 0){
        $this->reiter = $this->db->table('reiter');
        $this->reiter->select('*');

        IF ($id != 0)
            $this->reiter->where('reiter.id', $id);

        $this->reiter->orderBy('Name');
        $result = $this->reiter->get();

        if ($id != 0)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createReiter() {

        $this->reiter = $this->db->table('reiter');
        $this->reiter->insert(array(
            'Name' => $_POST['reiter'],
            'Beschreibung' => $_POST['beschreibung']));

    }
    public function deleteReiter() {
        $this->reiter = $this->db->table('reiter');
        $this->reiter->where('reiter.Name', $_POST['reiter']);
        $this->reiter->delete();
    }

    public function updateReiter() {

        $this->reiter = $this->db->table('reiter');
        $this->reiter->where('reiter.id', $_POST['id']);
        $this->reiter->update(array(
            'Name' => $_POST['reiter'],
            'Beschreibung' => $_POST['beschreibung']));
    }

}