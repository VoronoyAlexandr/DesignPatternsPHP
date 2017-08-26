<?php
/**
 * @author Alexandr Voronoy <servermed@gmail.com>
 * @copyright Copyright (c) 2017, Alexandr Voronoy
 */

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\BloggsCommsManager;
use DesignPatterns\Creational\FactoryMethod\MegaCommsManager;
use PHPUnit\Framework\TestCase;

/**
 * Class CommsManagerTest
 * @package DesignPatterns\Creational\FactoryMethod\Tests
 */
class CommsManagerTest extends TestCase
{
    public function testCanCreateBloggsApptEncoder()
    {
        $factory = new BloggsCommsManager();

        $result = $factory->getApptEncoder();

        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\BloggsApptEncoder', $result);
    }

    public function testCanCreateMegaApptEncoder()
    {
        $factory = new MegaCommsManager();

        $result = $factory->getApptEncoder();

        $this->assertInstanceOf('DesignPatterns\Creational\FactoryMethod\MegaApptEncoder', $result);
    }


}
