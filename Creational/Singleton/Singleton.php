<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace DesignPatterns\Creational\Singleton;


/**
 * Class Singleton
 * @package DesignPatterns\Creational\Singleton
 */
final class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

}