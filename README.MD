# Formulaire de Réservation de Vols

## Description

Ce projet est un formulaire de réservation de vols en PHP.

## Lancement du projet

1. Importez le fichier SQL `php_html.sql` sur votre base de données MySQL.
2. Installez les dépendances avec Composer :
   ```
   composer update
   ```
3. Lancez le serveur PHP avec la commande suivante :
   ```
    php -S 127.0.0.1:8080 -t public
   ```
4. Accédez au formulaire de réservation à l'adresse `http://localhost:8080`.

## Utilisation de Docker

Vous pouvez également lancer le projet avec Docker. Pour cela, exécutez les commandes suivantes :
```
docker build -t formulaire-reservation-vols .
docker run -p 8080:80 formulaire-reservation-vols
```

## Hébergement web

Si vous souhaitez héberger le projet sur un hébergement web, assurez-vous que le dossier `public` soit la racine du serveur web (généralement `www/html`).

## Auteur


