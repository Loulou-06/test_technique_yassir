# Test Technique CRUD

Ce projet contient des instructions pour l'installation et la configuration des différents éléments nécessaires. Si vous rencontrez des problèmes liés à ce README, suivez les liens ci-dessous pour obtenir des informations détaillées sur l'installation et la configuration de chaque élément.

Merci de suivre les liens ci-dessous en cas de besoin.

- PHP -> [https://windows.php.net/download/](https://windows.php.net/download/)
- Sail -> [https://laravel.com/docs/10.x/sail#starting-and-stopping-sail](https://laravel.com/docs/10.x/sail#starting-and-stopping-sail)
- Laravel Docker -> [https://laravel.com/docs/10.x/installation](https://laravel.com/docs/10.x/installation)
- Wamp -> [https://www.wampserver.com/](https://www.wampserver.com/)
- Composer -> [https://getcomposer.org/](https://getcomposer.org/)
- Docker -> [https://www.docker.com/](https://www.docker.com/)

## Projet Laravel avec Docker et Sail

### Prérequis
- PHP
- Laravel
- Docker
- Composer
- Wamp

### Installation
1. Clonez le repository : `git@github.com:Loulou-06/test_technique_yassir.git`
2. Accédez au dossier du projet : `cd test_technique_Yassir`
3. Installez les dépendances avec Composer : `composer install` ( `si besoin faire 'composer update`)
4. Copiez le fichier `.env.example` et renommez-le en `.env`

### Lancement du serveur
1. Assurez-vous que WAMP est en cours d'exécution.
2. Ouvrez une nouvelle console et accédez au répertoire racine du projet.
3. Exécutez la commande `./vendor/bin/sail up` pour démarrer les conteneurs Docker.
4. Exécutez la commande `php artisan serve` pour démarrer le serveur web.
5. Accédez au site web en visitant l'URL suivante dans votre navigateur : [http://localhost:8000/](http://localhost:8000/)

### Utilisation
- Laravel Tinker : Pour lancer Tinker, ouvrez un terminal et tapez la commande suivante : `php artisan tinker`
