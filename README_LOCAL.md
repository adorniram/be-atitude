# Guide d'installation locale

Ce guide explique comment faire fonctionner ce site localement après l'avoir cloné.

## Prérequis
- PHP installé sur votre machine
- [Composer](https://getcomposer.org/) installé
- [Laragon](https://laragon.org/) ou un environnement local équivalent (WAMP, XAMPP, etc.)

## Étapes à suivre

1. **Ouvrir le terminal**

2. **Mettre à jour les dépendances avec Composer**
```bash
composer update
```

3. **Lancer Laragon**
- Ouvrez Laragon et démarrez les services nécessaires (Apache/Nginx et MySQL).

4. **Migrer la base de données**
```bash
php artisan migrate
```

5. **Lancer l'application**
```bash
php artisan serve
```

6. **Accéder au site**
- Ouvrez votre navigateur et allez à l'adresse affichée dans le terminal (par défaut : http://127.0.0.1:8000)

---

Si vous rencontrez des problèmes, vérifiez que tous les prérequis sont bien installés et que votre base de données est correctement configurée dans le fichier `.env`.