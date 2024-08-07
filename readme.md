Pour acceder a la page d'accueil : [Lien de la page](http://localhost/MVC_POO_Demo/public/index.php)

Voici un fichier `README.md` complet et détaillé en français pour expliquer la structure et le fonctionnement de votre projet CRUD en PHP utilisant le pattern MVC :

```markdown
# Application CRUD avec PHP, POO et MVC

Ce projet est une application CRUD (Create, Read, Update, Delete) simple, construite en utilisant PHP, la Programmation Orientée Objet (POO) et le modèle de conception MVC (Model-View-Controller). L'application permet de gérer une liste d'utilisateurs avec des détails de base tels que le nom et l'email.

## Table des matières

1. [Structure du projet](#structure-du-projet)
2. [Configuration de la base de données](#configuration-de-la-base-de-données)
3. [Installation](#installation)
4. [Utilisation](#utilisation)
5. [Fichiers et répertoires](#fichiers-et-répertoires)
6. [Technologies utilisées](#technologies-utilisées)
7. [Licence](#licence)

## Structure du projet

```
/crud
  /controllers
    - UserController.php
  /models
    - User.php
    - Database.php
  /views
    /user
      - create.php
      - edit.php
      - index.php
  /public
    - index.php
    - style.css
    - script.js
  - README.md
```

## Configuration de la base de données

Pour configurer la base de données, créez une nouvelle base de données et exécutez le script SQL suivant pour créer la table `users` :

```sql
CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Utilisation

1. Naviguez vers l'application dans votre navigateur web.
2. Vous verrez une liste d'utilisateurs.
3. Utilisez le lien "Créer un nouvel utilisateur" pour ajouter un nouvel utilisateur.
4. Utilisez le lien "Modifier" à côté de chaque utilisateur pour modifier les détails de l'utilisateur.
5. Utilisez le bouton "Supprimer" à côté de chaque utilisateur pour supprimer l'utilisateur de la liste.

## Fichiers et répertoires

### /controllers

- **UserController.php** : Ce fichier contient la classe `UserController` qui gère toutes les actions liées à la gestion des utilisateurs telles que l'affichage de la liste des utilisateurs, l'affichage des formulaires de création/modification, et la gestion des opérations de création/mise à jour/suppression.

### /models

- **User.php** : Ce fichier contient la classe `User` qui représente l'entité utilisateur. Il inclut des méthodes pour les opérations CRUD (create, read, update, delete) qui interagissent avec la base de données.
- **Database.php** : Ce fichier contient la classe `Database` qui gère la connexion à la base de données MySQL en utilisant PDO.

### /views

- **/user**
  - **create.php** : Ce fichier contient le formulaire HTML pour créer un nouvel utilisateur.
  - **edit.php** : Ce fichier contient le formulaire HTML pour modifier un utilisateur existant.
  - **index.php** : Ce fichier affiche la liste des utilisateurs dans un tableau avec des options pour créer, modifier et supprimer des utilisateurs.

### /public

- **index.php** : Ce fichier est le point d'entrée principal de l'application. Il route les requêtes vers les actions du contrôleur approprié en fonction des paramètres de la requête.
- **style.css** : Ce fichier contient les styles CSS pour l'application.
- **script.js** : Ce fichier contient du JavaScript optionnel pour l'interactivité (actuellement un simple placeholder).

### README.md

Ce fichier fournit une vue d'ensemble du projet, y compris les instructions de configuration, les lignes directrices d'utilisation et une description de la structure du projet.