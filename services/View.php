<?php
/**
 * Created by PhpStorm.
 * User: eduar
 * Date: 13/07/2018
 * Time: 23:59
 */

abstract class View
{
    protected $view;
    private $path;

    public function __construct()
    {
        $this->view = new stdClass();
    }

    public function render($path)
    {
        $this->path = $path;
        include_once '../resources/views/layout/template.php';
    }

    public function content()
    {
        include_once "../resources/views/{$this->path}.php";
    }

    public function redirect($url)
    {
        header('Location: '.Host::getHost().$url);
    }
}