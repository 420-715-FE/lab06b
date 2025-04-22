<?php

include_once(__DIR__ . "/../controller.php");
include_once(__DIR__ . '/../models/tasks.php');

class AddController extends Controller {
    private $taskModel;

    public function __construct($db) {
        parent::__construct($db);
        $this->taskModel = new TaskModel($db);
    }

    function handle($get) {
    }

    function handlePost($get, $post) {
    }
}

?>