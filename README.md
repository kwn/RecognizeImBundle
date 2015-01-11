KwnRecognizeImBundle
====================

This bundle integrates [RecognizeIm](https://github.com/kwn/RecognizeIm) client with Symfony 2.

Installation
------------

Add KwnRecognizeImBundle to your composer.json:

```js
{
    "require": {
        "kwn/recognizeim-bundle": "dev-master"
    }
}
```

Run update command:

```bash
$ php composer.phar update kwn/recognizeim-bundle
```

Enable bundle in AppKernel.php:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Kwn\RecognizeImBundle\KwnRecognizeImBundle(),
    );
}
```

Configuration
-------------

Configure bundle in app/config.yml file with credentials obtained from recognize.im account:

```yaml
// app/config.yml

kwn_recognize_im:
    client_id:  CLIENT_ID
    api_key:    API_KEY
    clapi_key:  CLAPI_KEY
```

Ready to use
------------

You can use ```recognizeim``` service now (or ```recognizeim.client.soap``` and ```recognizeim.client.rest``` shortcut services):

```php
<?php

use RecognizeIm\Model\Image;

// ...
$image  = new Image('/home/kwn/Pictures/test.jpg');
$result = $this->get('recognizeim')->getRestApiClient()->recognize($image, 'multi');
```