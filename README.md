# Gestion des Employés et des Entreprises

Ce projet Symfony permet de gérer les employés et les entreprises via une interface web.

## Fonctionnalités

Liste des employés avec possibilité de création, modification et suppression.
Liste des entreprises avec possibilité de création, modification et suppression.

### Prérequis

PHP 7.4 ou supérieur
Composer
Symfony CLI
MySQL ou autre système de gestion de base de données compatible avec Doctrine

## Installation

Clonez le dépôt :

bash
Copier code
git clone (https://github.com/younes671/SfEntrepriseDemo.git)

### Installez les dépendances :

bash
Copier code
cd SfEntrepriseDemo
composer install

### Configurez la base de données dans le fichier .env :

env
Copier code
DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name

### Créez la base de données :

bash
Copier code
php bin/console doctrine:database:create

### Exécutez les migrations pour créer les tables de base de données :

bash
Copier code
php bin/console doctrine:migrations:migrate
Utilisation

### Lancez le serveur de développement :

bash
Copier code
symfony server:start

#### Accédez à l'application dans votre navigateur à l'adresse http://localhost:8000

## Documentation des Contrôleurs

### EmployeController

index: Affiche la liste des employés.
new/edit: Permet d'ajouter un nouvel employé ou de modifier un employé existant.
delete: Supprime un employé.
show: Affiche les détails d'un employé spécifique.

### EntrepriseController

index: Affiche la liste des entreprises.
new/edit: Permet d'ajouter une nouvelle entreprise ou de modifier une entreprise existante.
delete: Supprime une entreprise.
show: Affiche les détails d'une entreprise spécifique.
