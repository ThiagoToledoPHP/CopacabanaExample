<?php

    /**
     *
     * Hello, nice to meet you
     *
     * This is the very very simple example to you start your app using Copacabana Framework.
     * If you need  change the rooter ways, check the detail API documentation in
     * https://github.com/ThiagoToledoPHP/Copacabana and update the composer.json file
     * (autoload / psr-4 section ) and project ('composer update' console command)
     *
     */

    //Using the composer to autoload Copacabana Class
    include_once("vendor/autoload.php");

    //Simple use the class
    $copacabana = new Copacabana\helpers\Copacabana("CopacabanaExample");

    //Listener
    $copacabana->listen();

?>