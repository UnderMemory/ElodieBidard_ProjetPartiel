<?php

namespace App\DataFixtures;

use App\Entity\Roman;
use App\Entity\Auteur;
use App\Repository\AuteurRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{

    private $auteurRepository;
    function __construc(AuteurRepository $auteurRepository)
    {
        $this->auteurRepository = $auteurRepository;
    }

    public function load(ObjectManager $manager)
    {
        $auteurs = [
            [
                'nom' => "Pancol",
                'roman' => 
                [
                    [
                        'titre' => 'Les écureuils de Central Park sont tristes le lundi',
                        'couverture' => "https://static.fnac-static.com/multimedia/FR/Images_Produits/FR/fnac.com/Visual_Principal_340/6/1/3/9782226208316/tsp20120919192748/Les-ecureuils-de-Central-Park-sont-tristes-le-lundi.jpg",
                        'prix' => 9.90,
                        'genre' => 'Roman et Nouvelles',
                        'resume' => "Souvent la vie s’amuse.
                                Elle nous offre un diamant, caché sous un ticket de métro ou le tombé d’un rideau. Embusqué dans un mot, un regard, un sourire un peu nigaud.
                                Il faut faire attention aux détails. Ils sèment notre vie de petits cailloux et nous guident. Les gens brutaux, les gens pressés, ceux qui portent des gants de boxe ou font gicler le gravier, ignorent les détails. Ils veulent du lourd, de l’imposant, du clinquant, ils ne veulent pas perdre une minute à se baisser pour un sou, une paille, la main d’un homme tremblant.
                                Mais si on se penche, si on arrête le temps, on découvre des diamants dans une main tendue… Et la vie n’est plus jamais triste. Ni le samedi, ni le dimanche, ni le lundi…",
                        'nomAuteur' => 'Pancol'
                    ],

                    [
                        'titre' => 'Bed bug',
                        'couverture' => "https://static.fnac-static.com/multimedia/Images/FR/NR/27/17/ac/11278119/1540-1/tsp20191212070552/Bed-bug.jpg",
                        'prix' => 19.90,
                        'genre' => 'Roman et Nouvelles',
                        'resume' => "Rose est une jeune biologiste. Elle fait des recherches à Paris et à New York sur une luciole, Lamprohiza splendidula, qui semble très prometteuse pour la recherche médicale.
                                Si elle étudie avec grande maîtrise l'alchimie sexuelle des insectes et leur reproduction, elle se trouve totalement désemparée face à Léo quand elle en tombe amoureuse.
                                La vie n'est pas comme dans un laboratoire.
                                Et ce n'est pas sa mère (cachée derrière des lunettes noires) ni sa grand-mère (qui parle à Dieu et à ses doigts de pied) qui vont pouvoir l'aider.
                                Bed bug ou le désarroi amoureux d'une femme au bord d'un lit.",
                        'nomAuteur' => 'Pancol'
                    ]
                ]
            ],

            [
                'nom' => "Vargas",
                'roman' => 
                [
                    [
                        'titre' => 'Quand sort la recluse',
                        'couverture' => "https://static.fnac-static.com/multimedia/Images/FR/NR/eb/1c/8e/9313515/1540-1/tsp20210226071601/Quand-sort-la-recluse.jpg",
                        'prix' => 8.40,
                        'genre' => 'Roman Policier et Thriller',
                        'resume' => "«- Trois morts, c'est exact, dit Danglard. Mais cela regarde les médecins, les épidémiologistes, les zoologues. Nous, en aucun cas. Ce n'est pas de notre compétence. - Ce qu'il serait bon de vérifier, dit Adamsberg. J'ai donc rendez-vous demain au Muséum d'Histoire naturelle. - Je ne veux pas y croire, je ne veux pas y croire. Revenez-nous, commissaire. Bon sang mais dans quelles brumes avez-vous perdu la vue? - Je vois très bien dans les brumes, dit Adamsberg un peu sèchement, en posant ses deux mains à plat sur la table. Je vais donc être net. Je crois que ces trois hommes ont été assassinés. - Assassinés, répéta le commandant Danglard. Par l'araignée recluse?»",
                        'nomAuteur' => 'Vargas'
                    ],

                    [
                        'titre' => 'Pars vite et reviens tard',
                        'couverture' => "https://static.fnac-static.com/multimedia/Images/FR/NR/b6/e6/1a/1762998/1540-1/tsp20210226071656/Pars-vite-et-reviens-tard.jpg",
                        'prix' => 7.80,
                        'genre' => 'Roman Policier et Thriller',
                        'resume' => "D'étranges signes tracés à la peinture noire sur des portes dans tout Paris. À première vue, on pourrait croire à l'oeuvre d'un tagueur. Le commissaire Adamsberg, lui, y décèle une menace sourde, un relent maléfique. De son côté, Joss Le Guern, le Crieur de la place Edgar-Quinet, se demande qui glisse dans sa boîte à messages d'incompréhensibles annonces. Certains billets sont en latin, d'autres semblent copiés sur des ouvrages vieux de plusieurs siècles. Et tous prédisent le retour d'un fléau venu du fond des âges...",
                        'nomAuteur' => 'Vargas'
                    ],
                ]
            ],

            [
                'nom' => "Sapkowski",
                'roman' => 
                [
                    [
                        'titre' => 'The Witcher Sorceleur - Tome 1 : Sorceleur : Le Dernier Voeu',
                        'couverture' => "https://static.fnac-static.com/multimedia/Images/FR/NR/7b/ed/a1/10612091/1540-1/tsp20190117161317/Le-dernier-voeu.jpg",
                        'prix' => 15.90,
                        'genre' => 'Fantaisie',
                        'resume' => "Geralt de Riv est un homme inquiétant, un mutant devenu le parfait assassin grâce à la magie et à un long entraînement. En ces temps obscurs, ogres, goules et vampires pullulent, et les magiciens sont des manipulateurs experts. Contre ces menaces, il faut un tueur à gages à la hauteur, et Geralt est plus qu'un guerrier ou un mage. C'est un sorceleur.
                        ?Au cours de ses aventures, il rencontrera une magicienne capricieuse aux charmes vénéneux, un troubadour paillard au grand coeur... et, au terme de sa quête, peut-être réalisera-t-il son dernier voeu : retrouver son humanité perdue.",
                        'nomAuteur' => 'Sapkowski'
                    ],

                    [
                        'titre' => "The Witcher Sorceleur - Tome 2 : Sorceleur : L'Épée de la providence",
                        'couverture' => "https://static.fnac-static.com/multimedia/Images/FR/NR/7d/ed/a1/10612093/1540-1/tsp20190117161317/L-epee-de-la-providence.jpg",
                        'prix' => 15.90,
                        'genre' => 'Fantaisie',
                        'resume' => "Geralt de Riv, le mutant aux cheveux d’albâtre, n’en a pas fini avec sa vie errante de tueur de monstres légendaires.
                        Fidèle aux règles de la corporation maudite des sorceleurs et à l’enseignement qui lui a été prodigué, Geralt assume sa mission sans faillir dans un monde hostile et corrompu qui ne laisse aucune place à l’espoir.
                        Mais la rencontre avec la petite Ciri, l’Enfant élue, va donner un sens nouveau à l’existence de ce héros solitaire. Geralt cessera-t-il enfin de fuir devant la mort pour affronter la providence et percer à jour son véritable destin ?",
                        'nomAuteur' => 'Sapkowski'
                    ],
                ]
            ],

            [
                'nom' => "Murakami",
                'roman' => 
                [

                    [
                        'titre' => "La ballade de l'impossible",
                        'couverture' => "https://static.fnac-static.com/multimedia/Images/FR/NR/1e/8f/27/2592542/1540-1/tsp20151223144429/La-ballade-de-l-impoible.jpg",
                        'prix' => 8.40,
                        'genre' => 'Roman et Nouvelles',
                        'resume' => "Dans un avion, une chanson ramène Watanabe à ses souvenirs. Son amour de lycée pour Naoko, hantée comme lui par le suicide de leur ami Kizuki. Puis sa rencontre avec une jeune fille, Midori, qui combat ses démons en affrontant la vie. Hommage aux amours enfuies, le premier roman culte d'Haruki Murakami fait resurgir la violence et la poésie de l'adolescence.",
                        'nomAuteur' => 'Murakami'
                    ],

                    [
                        'titre' => 'Kafka sur le rivage',
                        'couverture' => "https://static.fnac-static.com/multimedia/Images/FR/NR/74/ee/1d/1961588/1540-1/tsp20160606152717/Kafka-sur-le-rivage.jpg",
                        'prix' => 9.60,
                        'genre' => 'Roman et Nouvelles',
                        'resume' => "Kafka Tamura, un jeune Tokyoïte de quinze ans, s'enfuit de chez lui pour échapper à la malédiction odipienne que son père a prononcée contre lui. Il traverse le Japon pour rejoindre la petite île de Shikoku. Une nuit, le jeune garçon se réveille au milieu d'un bois, couvert d'un sang qui n'est pas le sien. Paniqué, Kafka trouve alors refuge dans une bibliothèque dirigée par une ex-star de la chanson et son assistant, Oshima, qui le prend sous sa protection. Dans un quartier de Tokyo, un vieil homme cherche un chat égaré. Nakata est un simple d'esprit. Dans son enfance, un accident inexplicable lui a fait perdre toutes ses capacités intellectuelles, mais gagner celle de deviser avec les chats. Un jour, il croise le chemin d'un effroyable personnage. Et la vie de Nakata bascule. Obéissant à une force obscure, il se met en route. Au cours de son voyage picaresque, Nakata fait la connaissance d'Hoshino, un jeune chauffeur routier qui, touché par le vieil homme, lui propose de l'accompagner. Dès lors, les itinéraires de Kafka et de Nakata convergent dangereusement, et le jeune garçon est loin de se douter qu'en s'efforçant de fuir son destin, il se précipite à sa rencontre.",
                        'nomAuteur' => 'Murakami'
                    ]
                ]
            ]
        ];


        foreach ($auteurs as $a) {
            // normalement il aurait fallut faire une boucle sur le tableau d'auteurs avec 
            // a l'intérieur un boucle qui créer les romans pour l'auteur courran
            // mais je n'ai pas réussi à la mettre en place
            $auteur = new Auteur;
            $auteur
                ->setNom($a['nom']);
            $manager->persist($auteur);

            foreach ($a[Roman] as $r) {
                $roman = new Roman;
                $roman
                    ->setTitre($r['titre'])
                    ->setCouverture($r['couverture'])
                    ->setPrix($r['prix'])
                    ->setGenre($r['genre'])
                    ->setResume($r['resume'])
                    ->setAuteur($auteur);
    
                $manager->persist($roman);
        }
        }
        $manager->flush();
    }
}
