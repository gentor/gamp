Intercom
===============

Send analytics data to Google Analytics from Laravel. A package for GA Measurement Protocol API

Installation
------------

Installation using composer:

```
composer require gentor/gamp
```


Add the service provider in `config/app.php`:

```php
Gentor\Gamp\GampServiceProvider::class,
```

Add the facade alias in `config/app.php`:

```php
Gentor\Gamp\Facades\Gamp::class,
```

Configuration
-------------

Change your default settings in `app/config/gamp.php`:

```php
<?php
return [
    'tracking_id' => env('GA_TRACKING_ID'),
    ...
];
```


Documentation
-------------

[GA Measurement Protocol API](https://github.com/theiconic/php-ga-measurement-protocol)

