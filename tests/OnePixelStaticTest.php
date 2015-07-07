<?php
/**
 * OnePixelTest.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 11/05/15 - 10:01
 */

namespace PowerLinks\OnePixel\Tests;

use PowerLinks\OnePixel\OnePixel;
use PHPUnit_Framework_TestCase;

class OnePixelStaticTest extends PHPUnit_Framework_TestCase
{
    public function testGetHeaders()
    {
        $headers = OnePixel::getHeaders();
        $this->assertTrue(is_array($headers));
        $this->assertArrayHasKey('Content-type', $headers);
        $this->assertEquals('image/gif', $headers['Content-type']);
    }

    public function testGetPixel()
    {
        $onePixelFileContent = OnePixel::getPixel();
        $this->assertEquals(
            base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw=='),
            $onePixelFileContent
        );
    }
}