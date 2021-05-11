# Etape 1 : Créer le projet 
1. Pour commencer, il faut créer le projet. 
```bash
    composer create-project symfony/website-skeleton elodie_bidard_projet_partiel
```

 2. Afin de vérifier que le projet fonctionne, il faut le lancer. 
```bash
    symfony serve
```

# Etape 2 : Créer les entités
1. Pour créer une entité on va utiliser la commande : 
```bash
    symfony console make:entity (Name)
```

# Etape 3 : Créer le controllers
1. Pour créer un controller, il faut pour l'entité souhaitée écrire dans le terminal : 
```bash
    symfony console make:crud (EntityName)
```

# Etape 4 : Créer la base de donnée 
1. Pour créer la base de donnée, il faut commencer par modifier le fichier .env 
```bash
#dans le fichier .env
DATABASE_URL="mysql://root:@127.0.0.1:3306/blog"
#depuis le terminal
symfony console doctrine:database:create
```

# Etape 5 : Migrations 
1. Il faut maintenant effectuer une migration
```bash
    symfony console make:migration
```

2. Puis : 
```bash
    symfony console doctrine:migrations:migrate
```

# Etape 6 : Fixtures 
1. On installe le bundle qui nous permet de gérer les fixtures. Ce sont des données fake pour tester son application. 

```bash
composer require --dev doctrine/doctrine-fixtures-bundle
```
> Au cas où qu'ils ne prennent pas le bundle.
> ```bash
>    symfony console cache:clear
> ```
```bash
    php bin/console doctrine:fixtures:load
```