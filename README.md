# One Pixel

This class return just a transparent single pixel for tracking purpose.

## Composer

```
{
    "require": {
        "powerlinks/one-pixel": "1.0.x-dev"
    },
    "repositories": [
        {
          "type": "git",
          "url": "git@github.com:powerlinks/one-pixel.git"
        }
    ]
}
```

## Usage

```
use PowerLinks\OnePixel\OnePixel;

$onePixel = new OnePixel();
$onePixel->getHeaders();
$onePixel->getPixel();
```

To use this library with symfony/http-foundation: 2.6.x

```
use Symfony\Component\HttpFoundation\Response;
use PowerLinks\OnePixel\OnePixel;

$response = new Response();

$onePixel = new OnePixel();
$response->headers->add($onePixel->getHeaders());
$response->setContent($onePixel->getPixel());
$response->send();
```