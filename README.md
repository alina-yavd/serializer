Serializer
===============

This is a serializer library for PHP arrays and objects. Supports serialization to JSON, XML, YAML.

Installation
------------

For creating new project based on this template just execute the following command:

```bash
$ composer create-project alina-yavd/serializer project-name
```

> NOTE: You can add `--no-dev` right after `create-project` flag if you don't want to install dev dependencies to your project

Usage
-----

To use the Serializer component, use `serialize()` method:

```php
$json = new JsonSerializer();

echo $json->serialize( $array );
```

> NOTE: Currently `JsonSerializer`, `XmlSerializer` and `YamlSerializer` are supported.