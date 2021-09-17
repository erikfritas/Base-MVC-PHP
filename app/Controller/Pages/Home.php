<?php

/** Controller Home.php
 * controla tudo o que é requisitado na home da aplicação
 */

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{

    /** Método responsável por pegar os dados do Model e
     * retornar a View (em HTML) da nossa Home
     * @return string
     */
    public static function getHome() {
        $organization = new Organization();

        # guarda a VIEW da página em uma variável
        $content = View::render('pages/home', [
            'name'          => $organization->name,
            'description'   => $organization->description,
            'site'          => $organization->site
        ]);

        # retorna a VIEW à página
        return parent::getPage("HOME", $content);
    }

}
