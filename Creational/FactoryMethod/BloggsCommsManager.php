<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace DesignPatterns\Creational\FactoryMethod;


/**
 * Class BloggsCommsManager
 * @package DesignPatterns\Creational\FactoryMethod
 */
class BloggsCommsManager extends CommsManager
{
    /**
     * @return string
     */
    public function getHeaderText()
    {
        return " BloggsCal Header Text\n";
    }

    /**
     * @return BloggsApptEncoder
     */
    public function getApptEncoder()
    {
        return new BloggsApptEncoder();
    }

    /**
     * @return string
     */
    public function getFooterText()
    {
        return " BloggsCal Footer Text\n";
    }
}