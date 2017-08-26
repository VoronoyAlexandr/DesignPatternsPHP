<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * Class MegaCommsManager
 * @package DesignPatterns\Creational\FactoryMethod
 */
class MegaCommsManager extends CommsManager
{
    /**
     * @return string
     */
    public function getHeaderText()
    {
        return "MegaCal Header Text\n";
    }

    /**
     * @return MegaApptEncoder
     */
    public function getApptEncoder()
    {
        return new MegaApptEncoder();
    }

    /**
     * @return string
     */
    public function getFooterText()
    {
        return "MegaCal Footer Text\n";
    }
}