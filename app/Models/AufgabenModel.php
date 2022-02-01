<?php

namespace App\Models;

use CodeIgniter\Model;

class AufgabenModel extends Model{

    public function getAll(){

        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select("aufgaben.*, group_concat(mitglieder.Username Separator \", \")  As Mitglieder, projekte.Name As Reiter, reiter.Name As Projekt");
        $this->aufgaben->join("mitglieder", "aufgaben.erstellerid = mitglieder.id", "left");
        $this->aufgaben->join("projekte","projekte.id = aufgaben.projekteid", "left");
        $this->aufgaben->join("reiter","reiter.id = aufgaben.reiterid", "left");
        $this->aufgaben->groupBy("aufgaben.Name");
        $result = $this->aufgaben->get();

        return $result->getResultArray();

    }

    public function getaufgaben($name = null){
        $this->aufgaben = $this->db->table('aufgaben');
        $this->aufgaben->select("aufgaben.*, group_concat(mitglieder.Username Separator \", \")  As Mitglieder");
        $this->aufgaben->where("aufgaben.Name", $name);
        $this->aufgaben->join("mitglieder", "aufgaben.erstellerid = mitglieder.id", "left");
        $this->aufgaben->groupBy("aufgaben.Name");
        $result = $this->aufgaben->get();

        return $result->getRowArray();
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
            'erstellerid' => "1"));
    }

}
