<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace DesignPatterns\Creational\FactoryMethod;


/**
 * Class MegaApptEncoder
 * @package DesignPatterns\Creational\FactoryMethod
 */
class MegaApptEncoder extends ApptEncoder
{

    /**
     * @return string
     */
    public function encode()
    {
       return ' Format MegaCal \n';
    }
}