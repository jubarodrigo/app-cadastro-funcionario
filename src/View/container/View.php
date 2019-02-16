<?php
/**
 * Created by PhpStorm.
 * User: juba
 * Date: 15/02/19
 * Time: 21:31
 */

namespace src\View\container;

class View
{
    public static function render(
        $data,
        $arquivo,
        $cabecalho = 'src/View/container/top.php')
    {
        require $cabecalho;
        require $arquivo;
    }
}