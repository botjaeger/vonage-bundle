# Nexmo API for Symfony

Symfony integration of the [nexmo/nexmo-php](https://github.com/Nexmo/nexmo-php) client

## Getting Started

### Installing

Just require the bundle with composer

```
composer require botjaeger/nexmo-bundle
```

Then add the following line to your app/AppKernel.php
```php
public function registerBundles()
{
    return [
        ...
        new Botjaeger\NexmoBundle\BotjaegerNexmoBundle(),
    ];
}
```

### Configuration

Add the following lines to your config.yml
```
botjaeger_nexmo:
    api_key: 'my application id'
    api_secret: 'my application auth key'
```

### Usage

Then call 'botjaeger_nexmo' in the container
```php
$api = $this->get('botjaeger_nexmo');
...
```

### Test

Must have docker installed in your system
```
./test
```
