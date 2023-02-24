# test_technique_yassir

Si vous rencontrer un éventuel problème lié a ce readme je vous invite a suivre les liens suivant pour l'installation et la configuration de chaque element.

Merci de suivre les liens ci-dessous si besoin.
PHP -> https://windows.php.net/download/
Sail ->  https://laravel.com/docs/10.x/sail#starting-and-stopping-sail
Laravel docker -> https://laravel.com/docs/10.x/installation
Wamp -> https://www.wampserver.com/
Composer -> https://getcomposer.org/
Docker -> https://www.docker.com/

Projet Laravel avec Docker et Sail

Prérequis
  php
  laravel
  Docker
  Composer
  Wamp
  
Installation
  Clonez le repo : git clone https://github.com/mon-projet.git
  Accédez au dossier du projet : cd mon-projet
  Installez les dépendances avec Composer : composer install
  Copiez le fichier .env.example et renommez-le en .env
  

Lancement du serveur

  1. Assurez-vous que WAMP est en cours d'exécution.
  2. Ouvrez une nouvelle console et accédez au répertoire racine du projet.
  3. Exécutez la commande `./vendor/bin/sail up` pour démarrer les conteneurs Docker.
  4. Exécutez la commande `php artisan serve` pour démarrer le serveur web.
  5. Accédez au site web en visitant l'URL suivante dans votre navigateur : http://localhost:8000/
  
  
Utilisation
  Laravel Tinker
  Pour lancer Tinker, ouvrez un terminal et tapez la commande suivante : php artisan tinker
  

  
