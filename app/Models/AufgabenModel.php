<?php

namespace App\Models;

use CodeIgniter\Model;

class AufgabenModel extends Model{

    public function getAll(){

        $result = $this->db->query('SELECT * FROM aufgaben');
        return $result->getResultArray();

    }

    public function getaufgaben($id = 0){
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select('*');

        IF ($id != 0)
            $this->aufgaben->where('aufgaben.id', $id);

        $this->aufgaben->orderBy('Name');
        $result = $this->aufgaben->get();

        if ($id != 0)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createAufgaben() {
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->insert(array(
            'Name' => $_POST['aufgabe'],
            'Beschreibung' => $_POST['beschreibung'],
            'Erstellungsdatum' => $_POST['createDate'],
            'Fälligkeitsdatum' => $_POST['dueDate'],
            'reiterid' => $_POST['selectReiter'],
            'projekteid' => $_POST['id'],
            'erstellerid' => $_POST['selectPerson']));
    }

    public function deleteAufgaben() {
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.Name', $_POST['name']);
        $this->aufgaben->delete();
    }

    public function updateAufgaben() {

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->where('aufgaben.id', $_POST['id']);
        $this->aufgaben->update(array(
            'Name' => $_POST['name'],
            'Beschreibung' => $_POST['beschreibung'],
            'Erstellungsdatum' => $_POST['date'],
            'Fälligkeitsdatum' => $_POST['date_end'],
            'reiterid' => $_POST['reiter'],
            'erstellerid' => $_POST['ersteller']));
    }

}
