# One Pixel

This class return just a transparent single pixel for tracking purpose.

## Composer

```
{
    "require": {
        "powerlinks/one-pixel": "1.0.x-dev"
    }
}
```

## Usage

```php
use PowerLinks\OnePixel\OnePixel;

// instantiating usage 
$onePixel = new OnePixel();
$onePixel->getHeaders();
$onePixel->getPixel();

// static usage
OnePixel::getHeaders();
OnePixel::getPixel();
```

To use this library with symfony/http-foundation: 2.6.x

```php
use Symfony\Component\HttpFoundation\Response;
use PowerLinks\OnePixel\OnePixel;

$response = new Response();
$response->headers->add(OnePixel::getHeaders());
$response->setContent(OnePixel::getPixel());
$response->send();
```