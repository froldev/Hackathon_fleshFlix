<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class HomeController extends AbstractController
{

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $questionsForm = [
            'Quelle personne ne veux-tu absolument pas croiser dans un couloir ?' => [
                [
                    'Image' => 'https://vignette.wikia.nocookie.net/villains/images/5/5d/Samara_Morgan.v1.jpg/revision/latest/scale-to-width-down/2000?cb=20180419112621',
                    'Text' => 'Samara',
                    'Lettre' => 'Ghost'
                ],
                [
                    'Image'=>'https://i.pinimg.com/originals/83/9c/1f/839c1fd237ccbe001119d1fb06864fc7.jpg',
                    'Text'=> 'Michael Myers',
                    'Lettre'=>'Slasher'
                ],
                [
                    'Image'=>'https://i.ytimg.com/vi/x7SnXScLAg8/maxresdefault.jpg',
                    'Text'=> 'Mickael Jackson',
                    'Lettre'=>'Zombie'
                ],
                [
                    'Image'=>'http://golem13.fr/wp-content/uploads/2018/12/BAMBI-braconnier-peine-prison.jpg',
                    'Text'=> 'Bambi',
                    'Lettre'=>'Secret'
                ]
            ],

            'Quelqu\'un t\'attaque et tu as le droit de choisir un objet pour te défendre. Lequel prends-tu ?' => [
                [
                    'Image'=>'https://www.eurolam-thiers.com/1113-tm_large_default/couteau-eminceur-20-cm-zen-fischer-bargoin-couteau-chef.jpg',
                    'Text'=> 'Couteau',
                    'Lettre'=>'Slasher'
                ],
                [
                    'Image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRypE5CZXjQkrhRDNb3-ECwflshEKrzpPeeqiIdti11oTk7gwCkMw&s',
                    'Text'=> 'Batte de baseball',
                    'Lettre'=>'Zombie'
                ],
                [
                    'Image'=>'https://www.cravate-avenue.com/11215-home_default/lacets-plats-coton-couleur-vert-armee.jpg',
                    'Text'=> 'Bible',
                    'Lettre'=>'Ghost'
                ],
                [
                    'Image'=>'https://www.cadeau-maestro.com/56213-thickbox_default/canard-vibrant-i-rub-my-duckie.jpg',
                    'Text'=> 'Canard vibrant',
                    'Lettre'=>'Secret'
                ]

            ],
            'Qu’aimes-tu faire après une bonne journée de travail ?' => [
                [
                    'Image'=>'https://images2.persgroep.net/rcs/9EUHTrnmESnqAbC3CX5ilvJvlt8/diocontent/147400992/_crop/0/120/899/508/_fitwidth/694/?appId=21791a8992982cd8da851550a453bd7f&quality=0.9',
                    'Text'=> 'Regarder un film',
                    'Lettre'=>'Ghost'
                ],
                [
                    'Image'=> 'https://i.ytimg.com/vi/QIzDAGDzUVg/hqdefault.jpg',
                    'Text'=> 'Se balader tout(e) seul(e) dans un bois sombre',
                    'Lettre'=>'Slasher'
                ],
                [
                    'Image'=> 'https://www.terreur-nocturne.fr/wp-content/uploads/2019/08/la-nuit-des-morts-vivants-george-romero-1968.jpg',
                    'Text'=> 'Aller fleurir la tombe de son ami mystérieusement emporté par une épidémie fulgurante',
                    'Lettre'=>'Zombie'
                ],
                [
                    'Image'=>'https://i.ytimg.com/vi/K4jPqm1oclw/maxresdefault.jpg',
                    'Text'=> 'Faire des cupcakes',
                    'Lettre'=>'Secret'
                ]
            ],
            'Quel est le premier endroit auquel tu penses pour vous cacher ?' => [
                [
                    'Image'=>'https://img.ohmymag.com/article/insolite/une-femme-ecrit-une-lettre-de-rupture-et-va-se-cacher-sous-son-lit-pour-voir-la-reaction-de-son-copain_89e48fa3c9ae8a884b5a6adfcaf17b8c781550e9.jpg',
                    'Text'=> ' Sous le lit de ma soeur de 6 ans',
                    'Lettre'=>'Slasher'
                ],
                [
                    'Image'=>'https://www.le-lorrain.fr/files/uploads/2019/04/cathedrale-notre-dame-en-feu-770x400.jpg',
                    'Text'=> 'Dans une église',
                    'Lettre'=>'Ghost'
                ],
                [
                    'Image'=>'https://previews.123rf.com/images/rcphoto/rcphoto1310/rcphoto131000240/22941680-mausol%C3%A9e-dans-un-cimeti%C3%A8re-des-pionniers-de-vieux-brumeux-couvert.jpg',
                    'Text'=> 'Dans un mausolée',
                    'Lettre'=>'Zombie'
                ],
                [
                    'Image'=>'https://www.les-supers-parents.com/wp-content/uploads/2015/07/enfantquimord.jpg',
                    'Text'=> 'Derrière maman ou papa, ou papa et papa, ou maman et maman, bref, vous avez compris',
                    'Lettre'=> 'Secret'
                ],

            ],
            'Quel type de personne es-tu ?' => [
                [
                    'Image'=>'https://assets.change.org/photos/3/wn/ua/SnwNuAfdCHjPqqi-800x450-noPad.jpg?1554888818',
                    'Text'=> 'Ceux qui poussent à la salle',
                    'Lettre'=> 'Ghost'
                ],
                [
                    'Image'=>'https://pbs.twimg.com/media/DvphtuKWsAAu1lW.jpg',
                    'Text'=> 'Ceux qui disent chocolatine',
                    'Lettre'=> 'Secret'
                ],
                [
                    'Image'=>'https://images.wizbii.com/file/v1/8qakkdbfa1ea8e5m1f1m1z3ql0yo3nge.jpeg',
                    'Text'=> 'Ceux qui ont fait L',
                    'Lettre'=> 'Zombie'
                ],
                [
                    'Image'=>'https://www.arinella.fr/templates/yootheme/cache/vacances-entre-amis-cd5009e6.jpeg',
                    'Text'=> 'Ceux  qui partent en weekend sur une île déserte, entre potes, en buvant beaucoup trop et
                    sans écouter les avertissements du vieux monsieur qui les a pourtant bien prévenus qu\'il y avait
                    déjà eu un massacre 2 jours plus tôt',
                    'Lettre'=> 'Slasher'
                ]

            ],

            'Sais-tu courir vite, mais genre.. très très vite ?' => [
                [
                    'Image'=>'https://pich24.files.wordpress.com/2016/04/bip-bip-11.jpg?w=287&h=215',
                    'Text'=> 'Oui',
                    'Lettre'=> 'Slasher'
                ],
                [
                    'Image'=>'https://ukrarenda.net/wp-content/uploads/2019/03/zootopie-le-paresseux-best-of-i-got-flash-find-your-inner-zootopia-character-of-zootopie-le-paresseux.jpg',
                    'Text'=> 'Non',
                ]
            ],
            'As-tu des lunettes ?' => [
                [
                    'Image'=>'https://www.ambiance-unic.fr/1710-tm_large_default/lunettes-rondes-geek-double-foyers.jpg',
                    'Text'=> 'Oui',
                    'Lettre'=> 'Secret'
                ],
                [
                    'Image'=>'http://2.bp.blogspot.com/-CW0-0tQ80HU/UiELbE8GPRI/AAAAAAAADgk/t_-hqrTKsx0/s1600/Sillons.jpg',
                    'Text'=> 'Non',
                ]
            ],
            'Parles-tu latin ?' => [
                [
                    'Image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcrYIXOOE650G3tGekLHziG7sQTJFstXHeR-FIeDRQZwjGXHVfDw&s',
                    'Text'=> 'Oui',
                    'Lettre'=> 'Slasher'
                ],
                [
                    'Image'=>'https://cpb-us-w2.wpmucdn.com/blogs.memphis.edu/dist/8/2284/files/2018/06/study1-1pbpo5c.jpg',
                    'Text'=> 'Non',
                ]
            ],
            'Es-tu ? ' => [
                [
                    'Image'=>'https://www.brunet.ca/globalassets/sante/conseils-sante/une-bonne-sante-mentale/une-bonne-sante-mentale-big.jpg',
                    'Text'=> 'Oui',
                    'Lettre'=> 'Zombie'
                ],
                [
                    'Image'=>'https://s.aolcdn.com/hss/storage/midas/dcd50c0247a2eb97d3cca038fb7ce5f1/202131371/NormaBates_Dummy.jpg',
                    'Text'=> 'Non',
                ]
            ],
            'Sais-tu te battre ?'=> [
                [
                    'Image'=>'https://www.telerama.fr/sites/tr_master/files/styles/simplecrop1000/public/medias/2016/10/media_149399/rocky-dans-tous-ses-etats-sur-cine-frisson%2CM387805.jpg?itok=Xlsl8q6L',
                    'Text'=> 'Oui',
                    'Lettre'=> 'Ghost'
                ],
                [
                    'Image'=>'https://www.nzherald.co.nz/resizer/ieqYNn5vlvgg6hsAHVVR11ZmNxo=/360x384/filters:quality(70)/arc-anglerfish-syd-prod-nzme.s3.amazonaws.com/public/C6SAVDP4CBGFLIP6A752AJJ54A.jpg',
                    'Text'=> 'Non',
                ]
            ],
        ];



        return $this->twig->render("Home/index.html.twig", ["questions" => $questionsForm]);
    }
}
