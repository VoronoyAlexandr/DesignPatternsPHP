<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace DesignPatterns\Creational\FactoryMethod;


/**
 * Class CommsManager
 * @package DesignPatterns\Creational\FactoryMethod
 */
abstract class CommsManager
{
    abstract function getHeaderText();

    abstract function getApptEncoder();

    abstract function getFooterText();

}