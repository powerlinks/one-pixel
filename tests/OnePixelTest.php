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

class OnePixelTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var OnePixel
     */
    protected $onePixel;

    public function setUp()
    {
        $this->onePixel = new OnePixel();
    }

    public function testGetHeaders()
    {
        $headers = $this->onePixel->getHeaders();
        $this->assertTrue(is_array($headers));
        $this->assertArrayHasKey('Content-type', $headers);
        $this->assertEquals('image/gif', $headers['Content-type']);
    }

    public function testGetPixel()
    {
        $onePixelFileContent = $this->onePixel->getPixel();
        $this->assertEquals(
            base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw=='),
            $onePixelFileContent
        );
    }
}
