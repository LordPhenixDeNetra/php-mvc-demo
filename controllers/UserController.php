<?php
require_once '../models/User.php';

class UserController {
    // Méthode pour afficher tous les utilisateurs
    public function index() {
        $user = new User();
        $users = $user->readAll();
        require_once '../views/user/index.php';
    }

    // Méthode pour afficher le formulaire de création d'un utilisateur
    public function create() {
        require_once '../views/user/create.php';
    }

    // Méthode pour enregistrer un nouvel utilisateur
    public function store($data) {
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        if ($user->create()) {
            header("Location: index.php");
        }
    }

    // Méthode pour afficher le formulaire de modification d'un utilisateur
    public function edit($id) {
        $user = new User();
        $user->id = $id;
        $user->readOne();
        require_once '../views/user/edit.php';
    }

    // Méthode pour mettre à jour un utilisateur
    public function update($id, $data) {
        $user = new User();
        $user->id = $id;
        $user->name = $data['name'];
        $user->email = $data['email'];
        if ($user->update()) {
            header("Location: index.php");
        }
    }

    // Méthode pour supprimer un utilisateur
    public function delete($id) {
        $user = new User();
        $user->id = $id;
        if ($user->delete()) {
            header("Location: index.php");
        }
    }
}
?>
