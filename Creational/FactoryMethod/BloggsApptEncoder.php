<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace DesignPatterns\Creational\FactoryMethod;


/**
 * Class BloggsApptEncoder
 * @package DesignPatterns\Creational\FactoryMethod
 */
class BloggsApptEncoder extends ApptEncoder
{

    /**
     * @return string
     */
    public function encode()
    {
       return ' Format BloggsCal \n';
    }
}