<?php
/**
 * OnePixel.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 08/05/15 - 13:01
 */

namespace PowerLinks\OnePixel;


class OnePixel
{
    /**
     * @return array
     */
    public static function getHeaders()
    {
        return array(
            'Content-type' => 'image/gif'
        );
    }

    /**
     * @return string
     */
    public static function getPixel()
    {
        return base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw==');
    }
}