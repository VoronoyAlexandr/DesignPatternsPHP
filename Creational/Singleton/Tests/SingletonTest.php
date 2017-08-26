<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

/**
 * Class SingletonTest
 * @package DesignPatterns\Creational\Singleton\Tests
 */
class SingletonTest extends TestCase
{


    public function testUniqueness()
    {

        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Singleton', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }

}