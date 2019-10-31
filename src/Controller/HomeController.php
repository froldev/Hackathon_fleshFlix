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
            'Quelle personne ne veux tu absolument pas croiser dans un couloir ?' => [
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

            'Quelqu\'un t\'attaque et tu as le droit de choisir un objet pour te défendre, lequel prends-tu ?' => [
                [
                    'Image'=>'https://www.colichef.fr/4544/couteau-de-cuisine-japonais-713-24-cm.jpg',
                    'Text'=> 'couteau',
                    'Lettre'=>'Slasher'
                ],
                [
                    'Image'=>'https://make-and-mark.com/app/uploads/2017/11/Batte-de-baseball-or-1.png',
                    'Text'=> 'batte de baseball',
                    'Lettre'=>'Zombie'
                ],
                [
                    'Image'=>'https://www.cdiscount.com/pdt2/3/8/1/1/300x300/shl8995857522381/rw/lacet-de-chaussure-110cm-lacets-brillants-de-perl.jpg',
                    'Text'=> 'Bible',
                    'Lettre'=>'Ghost'
                ],
                [
                    'Image'=>'https://www.cadeau-maestro.com/56213-thickbox_default/canard-vibrant-i-rub-my-duckie.jpg',
                    'Text'=> 'canard vibrant',
                    'Lettre'=>'Secret'
                ]

            ],
            'Qu’aimes tu faire après une bonne journée de travail ?' => [
                [
                    'Image'=>'data:image/jpeg;base64,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',
                    'Text'=> 'Regarder un film',
                    'Lettre'=>'Ghost'
                ],
                [
                    'Image'=> 'https://i.ytimg.com/vi/QIzDAGDzUVg/hqdefault.jpg',
                    'Text'=> 'Se ballader tout(e) seul(e) dans un bois sombre ',
                    'Lettre'=>'Slasher'
                ],
                [
                    'Image'=> 'https://www.terreur-nocturne.fr/wp-content/uploads/2019/08/la-nuit-des-morts-vivants-george-romero-1968.jpg',
                    'Text'=> 'Aller fleurir la tombe de son ami mystérieusement emporté par une épidémie fulgurante',
                    'Lettre'=>'Zombie'
                ],
                [
                    'Image'=>'https://i.ytimg.com/vi/K4jPqm1oclw/maxresdefault.jpg',
                    'Text'=> 'faire des cupcake',
                    'Lettre'=>'Secret'
                ]
            ],
            'Quel est le premier endroit auquel vous pensez pour vous cacher ?' => [
                [
                    'Image'=>'https://www.chambrekids.com/9603-large_product/lit-enfant-90x200-bloom-chene.jpg',
                    'Text'=> ' Sous le lit de ta soeur de 6 ans',
                    'Lettre'=>'Slasher'
                ],
                [
                    'Image'=>'data:image/jpeg;base64,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',
                    'Text'=> 'Dans une église',
                    'Lettre'=>'Ghost'
                ],
                [
                    'Image'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Recoleta_115.jpg/220px-Recoleta_115.jpg',
                    'Text'=> 'Dans un mausolé',
                    'Lettre'=>'Zombie'
                ],
                [
                    'Image'=>'https://www.les-supers-parents.com/wp-content/uploads/2015/07/enfantquimord.jpg',
                    'Text'=> 'Derrière maman ou papa, ou papa et papa ou maman et maman bref vous avez compris ',
                    'Lettre'=> 'Secret'
                ],

            ],
            'Quel type de personne êtes vous ?' => [
                [
                    'Image'=>'https://assets.change.org/photos/3/wn/ua/SnwNuAfdCHjPqqi-800x450-noPad.jpg?1554888818',
                    'Text'=> 'ceux qui pousse à la salle ',
                    'Lettre'=> 'Ghost'
                ],
                [
                    'Image'=>'https://pbs.twimg.com/media/DvphtuKWsAAu1lW.jpg',
                    'Text'=> 'ceux qui disent chocolatine ',
                    'Lettre'=> 'Secret'
                ],
                [
                    'Image'=>'https://images.wizbii.com/file/v1/8qakkdbfa1ea8e5m1f1m1z3ql0yo3nge.jpeg',
                    'Text'=> 'ceux qui ont fait L',
                    'Lettre'=> 'Zombie'
                ],
                [
                    'Image'=>'https://www.arinella.fr/templates/yootheme/cache/vacances-entre-amis-cd5009e6.jpeg',
                    'Text'=> 'ceux  qui partent en weekend sur une île déserte, entre potes, en buvant beaucoup trop, et sans écouter les avertissements du vieux monsieur qui les a pourtant bien prévenu qu\'il y avait déjà eu un massacre 2 jours plus tôt',
                    'Lettre'=> 'Slasher'
                ]

            ],

            'Savez-vous courir vite, mais genre.. très très vite ?' => [
                [
                    'Image'=>'https://pich24.files.wordpress.com/2016/04/bip-bip-11.jpg?w=287&h=215',
                    'Text'=> 'Oui ',
                    'Lettre'=> 'Slasher'
                ],
                [
                    'Image'=>'https://ukrarenda.net/wp-content/uploads/2019/03/zootopie-le-paresseux-best-of-i-got-flash-find-your-inner-zootopia-character-of-zootopie-le-paresseux.jpg',
                    'Text'=> 'Non',
                ]
            ],
            'Avez-vous des lunettes ?' => [
                [
                    'Image'=>'https://www.ambiance-unic.fr/1710-tm_large_default/lunettes-rondes-geek-double-foyers.jpg',
                    'Text'=> 'Oui ',
                    'Lettre'=> 'Secret'
                ],
                [
                    'Image'=>'http://2.bp.blogspot.com/-CW0-0tQ80HU/UiELbE8GPRI/AAAAAAAADgk/t_-hqrTKsx0/s1600/Sillons.jpg',
                    'Text'=> 'Non',
                ]
            ],
            'Parlez vous latin ?' => [
                [
                    'Image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcrYIXOOE650G3tGekLHziG7sQTJFstXHeR-FIeDRQZwjGXHVfDw&s',
                    'Text'=> 'Oui ',
                    'Lettre'=> 'Slasher'
                ],
                [
                    'Image'=>'https://cpb-us-w2.wpmucdn.com/blogs.memphis.edu/dist/8/2284/files/2018/06/study1-1pbpo5c.jpg',
                    'Text'=> 'Non',
                ]
            ],
            'Êtes vous ? ' => [
                [
                    'Image'=>'https://www.brunet.ca/globalassets/sante/conseils-sante/une-bonne-sante-mentale/une-bonne-sante-mentale-big.jpg',
                    'Text'=> 'Oui ',
                    'Lettre'=> 'Zombie'
                ],
                [
                    'Image'=>'https://s.aolcdn.com/hss/storage/midas/dcd50c0247a2eb97d3cca038fb7ce5f1/202131371/NormaBates_Dummy.jpg',
                    'Text'=> 'Non',
                ]
            ],
            'Savez-vous vous battre ?'=> [
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
