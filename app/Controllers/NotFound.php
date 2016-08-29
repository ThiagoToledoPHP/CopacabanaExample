<?php

namespace CopacabanaExample\app\Controllers{

    /**
     * This is a not found (404) controller class
     * If Copacabana don't find a class file, this is the class to resolve the requisition
     * To access this controller you can use http://youtdomain.com/404
     *
     * Class NotFound
     * @package CopacabanaExample\app\Controllers
     */
    class NotFound
    {

        public function main(){
            echo "Ops, i'am the NotFound controller. :P";
        }

    }

}