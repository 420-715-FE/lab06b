<?php

class PriorityModel {
  private $db;

  function __construct($db) {
    $this->db = $db;
  }

  function getAll() {
    $query = $this->db->query("SELECT id, description FROM priorite ORDER BY id");
    return $query->fetchAll();
  }
}

?>