<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page{

    /**
     * Método responsável por renderizar
     * o header da página
     * @return string
     */
    private static function getHeader(){
        return View::render('pages/header');
    }

    /**
     * Método responsável por renderizar
     * o footer da página
     * @return string
     */
    private static function getFooter(){
        return View::render('pages/footer');
    }

    /**
     * Método responsável por retornar
     * o conteúdo (VIEW) da página inicial da nossa aplicação
     * @param string $title
     * @param string $content
     * @return string
     */
    public static function getPage($title, $content){
        // VIEW da página
        return View::render('pages/page', [
            "title"     => "$title | MVC",
            "header"    => self::getHeader(),
            "content"   => $content,
            "footer"    => self::getFooter()
        ]);
    }

}
