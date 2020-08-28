# Nexmo API for Symfony

Symfony integration of the [nexmo/nexmo-php](https://github.com/Nexmo/nexmo-php) client

## Getting Started

### Installing

Just require the bundle with composer

```
composer require botjaeger/nexmo-bundle
```

Then add the following line to your app/AppKernel.php
```
public function registerBundles()
{
    return [
        ...,
        new Botjaeger\NexmoBundle\BotjaegerNexmoBundle(),
    ];
}
```

### Configuration

Add the following lines to your config.yml
```
botjaeger_nexmo:
    api_key: 'nexmo_api_key'
    api_secret: 'nexmo_api_secret'
```

### Usage

Then call 'botjaeger_nexmo.nexmo_client.client' in the container (some simplified methods)
```
$api = $this->get('botjaeger_nexmo.nexmo_client.client');
...
```
Or use the default nexmo client
```
$api = $this->get('default_nexmo.client');
...
```

### Test

Must have docker installed in your system
```
./test
```
