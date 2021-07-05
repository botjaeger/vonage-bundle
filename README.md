# Vonage (formerly Nexmo) API for Symfony

Symfony integration of the [vonage/vonage-php-sdk-core](https://github.com/vonage/vonage-php-sdk-core) client

## Getting Started

### Installing

Just require the bundle with composer

```
composer require botjaeger/vonage-bundle
```

Then add the following line to your app/AppKernel.php
```
public function registerBundles()
{
    return [
        ...,
        new Botjaeger\VonageBundle\BotjaegerVonageBundle(),
    ];
}
```

### Configuration

Add the following lines to your config.yml
```
botjaeger_vonage:
    api_key: 'vonage_api_key'
    api_secret: 'vonage_api_secret'
```

### Usage

```
$api = $this->get('vonage.client');
...
```

### Test

Must have docker installed in your system
```
./test
```
