

A propos de ce projet
=====================

1. ce repositori contien le crud-laravel que vous pouvez avoir access a parti de la route **localhost:8000/etudiant** .
2. ce repositori contient egalement le projet contact a parti d'un mail en laravel vous pouvez avoir access a parti de la route **localhost:8000/contact**
3. la base de donnees du projet se trouve dans le dossier **BD**
4. l'aplication est configurer avec mon mail tout mail envoyer arrivera chez moi
5. si vous souhaitez recevoir le mail dans votre compte vous devrais :
- moidifier les données du fichier **.env**
- MAIL_MAILER=smtp
- MAIL_HOST=smtp.gmail.com
- MAIL_PORT=587
- MAIL_USERNAME=yourmail@gmail.com
- MAIL_PASSWORD=**code appplication generé part ton compte google
- MAIL_ENCRYPTION=tls
- MAIL_FROM_ADDRESS="yourmail@gmail.com"
- MAIL_FROM_NAME="${APP_NAME}"
7. en suite dans le fichier **contactcontroller.php** dans la foction **Mail ::to()->send();** remplace le Mail part  le tiens


If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
