SOAP Client Extension for Yii 2
==============================

Note, PHP SOAP extension is required.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist mongosoft/yii2-soap-client "*"
```

or add

```json
"mongosoft/yii2-soap-client": "*"
```

to the `require` section of your `composer.json` file.

Usage
-----

You need to setup soap client application component:

```php
'components' => [
    'siteApi' => [
        'class' => 'mongosoft\soapclient\Client',
        'url' => 'http://myservice.com/api/hello',
        'options' => [
            'cache_wsdl' => WSDL_CACHE_NONE,
        ],
    ]
    ...
]
```

or define the client directly in the code:

```php
$client = new \mongosoft\soapclient\Client([
    'url' => 'http://myservice.com/api/hello',
]);
```

Example of calling the SOAP function:

```php
$client = Yii::$app->siteApi;
echo $client->getHello('Alex');
```
