Serializer
===============

This is a serializer library for PHP arrays and objects. Supports serialization to JSON, XML, YAML.

Installation
------------

Install library via [composer](http://getcomposer.org/download/):

```
$ composer require alina-yavd/serializer
```

Usage
-----

To use the Serializer component, use `serialize()` method:

```php
$json = new JsonSerializer();

echo $json->serialize( $array );
```

> NOTE: Currently `JsonSerializer`, `XmlSerializer` and `YamlSerializer` classes are available.
>
> You can extend library and add supported serialization formats by extending `AbstractSerializer` class.
