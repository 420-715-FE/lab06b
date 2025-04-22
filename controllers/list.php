<?php

include_once(__DIR__ . "/../controller.php");
include_once(__DIR__ . '/../models/tasks.php');
include_once(__DIR__ . '/../models/priorities.php');

class ListController extends Controller {
    private $taskModel;
    private $priorityModel;

    public function __construct($db) {
        parent::__construct($db);
        $this->taskModel = new TaskModel($db);
        $this->priorityModel = new PriorityModel($db);
    }

    public function handle($get) {
    }
}

?>