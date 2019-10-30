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
            '1' => [
                'https://resize-parismatch.lanmedia.fr/f/webp/r/625,417,forcex,center-middle/img/var/news/storage/images/paris-match/actu/faits-divers/l-etrange-crime-d-un-homme-masque-comme-jason-dans-vendredi-13-1350611/22311269-1-fre-FR/L-etrange-crime-d-un-homme-masque-comme-Jason-dans-Vendredi-13.jpg',
                'https://i.pinimg.com/originals/83/9c/1f/839c1fd237ccbe001119d1fb06864fc7.jpg',
                'https://img.cinemablend.com/filter:scale/quill/2/3/5/c/4/f/235c4f89480da826c2e1ffb8a9c0e10ea3a3bdb9.jpg?mw=600',
                'https://i1.wp.com/alarencontreduseptiemeart.com/wp-content/uploads/2018/11/Massacre-%C3%A0-la-tron%C3%A7onneuse.jpg?fit=945%2C496&ssl=1'
                ],
            '2' => [
                'https://www.colichef.fr/4544/couteau-de-cuisine-japonais-713-24-cm.jpg',
                'https://make-and-mark.com/app/uploads/2017/11/Batte-de-baseball-or-1.png',
                'https://www.cdiscount.com/pdt2/3/8/1/1/300x300/shl8995857522381/rw/lacet-de-chaussure-110cm-lacets-brillants-de-perl.jpg',
                'https://www.cadeau-maestro.com/56213-thickbox_default/canard-vibrant-i-rub-my-duckie.jpg'
                ],
        ];

        return $this->twig->render("Home/index.html.twig", ["questions" => $questionsForm]);
    }
}
