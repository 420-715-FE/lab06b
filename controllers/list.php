<?php

include_once(__DIR__ . "/../controller.php");
include_once(__DIR__ . '/../models/tasks.php');
include_once(__DIR__ . '/../models/priorities.php');

class ListController extends Controller {
  function handle($get) {
    $taskModel = new TaskModel($this->db);
    $priorityModel = new PriorityModel($this->db);

    $tasks = $taskModel->getAll();
    $priorities = $priorityModel->getAll();

    include(__DIR__ . '/../views/list.php');
  }
}

?>