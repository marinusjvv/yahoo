<?php

namespace MarinusJvv\Tests;

use MarinusJvv\Yahoo\Gallery;

class GalleryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that We can get the basics of the Namespacing etc up and running
     */
    public function testInitial()
    {
        $gallery = new Gallery();
        $this->assertTrue($gallery->returnTrue());
    }
}
