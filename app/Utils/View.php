<?php

namespace App\Utils;

class View{

    /**
     * Método responsável por
     * retornar o conteúdo de uma View
     * antes de ser processado.
     * @param string $view
     * @return string
     */
    private static function getContentView($view){
        $file = __DIR__."/../../resources/view/$view.html";
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por
     * retornar o conteúdo *renderizado* de
     * uma View.
     * @param string $view
     * @param array $vars (string/numeric)
     * @return string
     */
    public static function render($view, $vars=[]){
        # Conteúdo da View
        $contentView = self::getContentView($view);

        $vars_keys = array_map(function($n){
            return "{{{$n}}}";
        }, array_keys($vars));

        $vars_values = array_values($vars);

        # Retorna o conteúdo renderizado
        return str_replace($vars_keys, $vars_values, $contentView);
    }

}
