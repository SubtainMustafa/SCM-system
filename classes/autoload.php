<?php
/**
 * Created by PhpStorm.
 * User: subta
 * Date: 12/24/2017
 * Time: 10:07 PM
 */

spl_autoload_register(function ($name){
   require_once $name. "php";
});

?>