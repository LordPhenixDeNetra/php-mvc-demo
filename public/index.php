<?php
require_once '../controllers/UserController.php';

$controller = new UserController();

// Gestion des requêtes POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'create') {
        $controller->store($_POST);
    } elseif (isset($_POST['action']) && $_POST['action'] == 'update') {
        $controller->update($_POST['id'], $_POST);
    } elseif (isset($_POST['action']) && $_POST['action'] == 'delete') {
        $controller->delete($_POST['id']);
    }
} else { // Gestion des requêtes GET
    if (isset($_GET['action']) && $_GET['action'] == 'create') {
        $controller->create();
    } elseif (isset($_GET['action']) && $_GET['action'] == 'edit' && isset($_GET['id'])) {
        $controller->edit($_GET['id']);
    } else {
        $controller->index();
    }
}
?>
