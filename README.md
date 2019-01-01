[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/nebed/laravel-ua-parser?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge) [![Build Status](https://travis-ci.org/nebed/laravel-ua-parser.svg?branch=master)](https://travis-ci.org/nebed/laravel-ua-parser) [![Average time to resolve an issue](http://isitmaintained.com/badge/resolution/nebed/laravel-ua-parser.svg)](http://isitmaintained.com/project/nebed/laravel-ua-parser "Average time to resolve an issue") [![Percentage of issues still open](http://isitmaintained.com/badge/open/nebed/laravel-ua-parser.svg)](http://isitmaintained.com/project/nebed/laravel-ua-parser "Percentage of issues still open")


# laravel-ua-parser

a UserAgent parser package for laravel5 which is based on UAParser/uap-php

## Install

PHP >= 5.5.9

#### install package

1.  use composer
```shell
composer require "nebed/laravel-ua-parser"
```


## Configure

#### Laravel

1.  register ServiceProvider in config/app.php
```php
Nebed\UserAgent\UserAgentServiceProvider::class
```
2.  add alias to aliases array in config/app.php
```php
'UA' => Nebed\UserAgent\Facades\UserAgent::class
```


## Usage
## basic usage
the UserAgent is an instance of the UAParser/Parser::create()
```php
<?php
use UA;

//assuming
// $_SERVER['HTTP_USER_AGENT'] = "Mozilla/5.0 (Macintosh; Intel Ma...";

$result = UA::parse($_SERVER['HTTP_USER_AGENT']);

// OR

$result = UA::parse($request->server('HTTP_USER_AGENT'));

print $result->ua->family;            // Safari
print $result->ua->major;             // 6
print $result->ua->minor;             // 0
print $result->ua->patch;             // 2
print $result->ua->toString();        // Safari 6.0.2
print $result->ua->toVersion();       // 6.0.2

print $result->os->family;            // Mac OS X
print $result->os->major;             // 10
print $result->os->minor;             // 7
print $result->os->patch;             // 5
print $result->os->patchMinor;        // [null]
print $result->os->toString();        // Mac OS X 10.7.5
print $result->os->toVersion();       // 10.7.5

print $result->device->family;        // Other

print $result->toString();            // Safari 6.0.2/Mac OS X 10.7.5
print $result->originalUserAgent;     // Mozilla/5.0 (Macintosh; Intel Ma...
```

more usage to see [UAParser/uap-php](https://github.com//ua-parser/uap-php)

## License

MIT

## Thanks

####[UAParser/uap-php](https://github.com//ua-parser/uap-php)
