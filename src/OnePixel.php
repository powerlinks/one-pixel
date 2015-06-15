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
    public function getHeaders()
    {
        return array(
            'Content-type' => 'image/gif'
        );
    }

    /**
     * @return string
     */
    public function getPixel()
    {
        return base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw==');
    }
}