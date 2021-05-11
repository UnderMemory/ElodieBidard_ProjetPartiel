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

# Etape 7 : Mise en page de l'application
1. Rajouter Bootstrap au fichier Twig.yaml
```bash
    form_themes: ["bootstrap_4_layout.html.twig"]
```

2. Dans base.html.twig
```bash
{% block stylesheets %}  
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
{% endblock %}

   {% block javascripts %}

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        {% endblock %}
```

# Etape 8 : Création d'un message Flash
1. Dans le controller, dans la partie /edit
```php
    # Création d'un message Flash (session flash)
        $this->addFlash(
            'info',
            'Modification enregistrée avec succès !'
        );
```
2. dans edit.html.twig
```bash
  {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class="alert alert-{{ label }} my-3">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
```

# Etape 9 : Contraintes de validation pour le formulaire
1. Dans le fichier Entity/Roman.php
```php

 /**
     * @Assert\NotBlank(message="Ce champ ne peut être vide")
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="entrez un prix entre 1 et 30")
     * @Assert\Range(
     * min = 1,
     * max = 30,
     * minMessage = "minimum 1",
     * maxMessage = "maximum 30")
     */
    private $prix;
```

```bash
 @Assert\NotBlank(message="Ce champ ne peut être vide")
```
Ce message permet de contraindre l'utilisateur à remplir le champ avant de valider le formulaire.

```bash
@Assert\NotBlank(message="entrez un prix entre 1 et 30")
    @Assert\Range(
    min = 1,
    max = 30,
    minMessage = "minimum 1",
    maxMessage = "maximum 30")
```
Ces messages permettent de contraindre l'utilisateur à remplir le champs avec un prix allant d'un montant minimum à un montant maximum avant de valider le formulaire. 