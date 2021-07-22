# PHP Unit Testing with PHPUnit

composer require phpunit/phpunit

./vendor/bin/phpunit

autoload

append the following to composer.json file:

```
    "autoload": {
        "psr-4": {
            "App\\": "app"
        }
    }
```

composer dump-autoload -o

create in roote directory file called phpunit.xml with the following content

```
<?xml version="1.0" encoding="UTF-8"?>
<phpunit bootstrap="vendor/autoload.php"
         colors="true"
         verbose="true"
         stopOnFailure="false">
    <testsuites>
        <testsuite name="Test suite">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```


