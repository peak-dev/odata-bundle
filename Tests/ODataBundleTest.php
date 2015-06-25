<?php

namespace masch\Bundle\ODataBundle\Tests;

/**
 * @author Mark Schmale <masch@masch.it>
 */
class ODataBundleTest extends \PHPUnit_Framework_TestCase
{
    private static $className = '\masch\Bundle\ODataBundle\ODataBundle';
    /**
     * tests if the bundle class exists
     */
    public function testThereIsAODataBundleClass()
    {
        static::assertTrue(class_exists(static::$className));
    }

    /**
     *
     */
    public function testIsIsASymfonyBundle()
    {
        $reflection = new \ReflectionClass(static::$className);

        $isBundle = $reflection->isSubclassOf('\Symfony\Component\HttpKernel\Bundle\Bundle');

        static::assertTrue($isBundle, 'is not a sublcass of Bundle');
    }
}
