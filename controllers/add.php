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
        include(__DIR__ . '/../views/add.php');
    }

    function handlePost($get, $post) {
        try {
            $description = htmlspecialchars(trim($post['description']));
            $priority = intval($post['priority']);
            $this->taskModel->insert($description, $priority);
        } catch (Exception $e) {
            throw new Exception('Some POST fields are missing.');
        }

        header('Location: ?action=list');
    }
}

?>