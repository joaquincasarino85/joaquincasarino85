<?php
namespace DesignPatternTest\composite;

use PHPUnit\Framework\TestCase;
use DesignPattern\composite\Box;
use DesignPattern\composite\Product;

/**
 * @covers Box
 */

class BoxTest extends TestCase{

    public function testAdd(){
        $box = new Box();
        $box->add(1);
        self::assertTrue(count($box->parts())>0);
    }

    public function testWeight(){
        $p = new Product(10);

        $box = new Box();
        $box->add($p);

        self::assertSame(10, $box->weight());
    }
}