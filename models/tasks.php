<?php

class TaskModel {
  private $db;

  function __construct($db) {
    $this->db = $db;
  }

  function getAll() {
    $query = $this->db->query("
        SELECT tache.id, tache.description, pri.id AS id_priorite, pri.description AS description_priorite
        FROM tache
        JOIN priorite pri ON tache.id_priorite = pri.id
        ORDER BY tache.id_priorite, tache.description
    ");
    return $query->fetchAll();
  }

  function insert($description, $priority) {
      $query = $this->db->prepare("INSERT INTO tache(description, id_priorite) VALUES(?, ?)");
      $query->execute([$description, $priority]);
  }

  function delete($id) {
    $query = $this->db->prepare('DELETE FROM taches WHERE id = ?');
    $query->execute([ $id ]);
  }
}

?>