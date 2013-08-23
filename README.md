Symfony Setting Bundle
======================

Bundle for Symfony to store the application settings in database table

## Installation

Let Composer download and install the bundle by first adding it to your composer.json
in your composer.json:

```json
{
    "require": {
        "webmakers/symfony-setting-bundle": "dev-master"
    }
}
```
and then running 
```shell
// In shell
composer update webmakers/symfony-setting-bundle
```

> Note that once we had a stable version tagged you should use a tagged release instead of the master branch.

#### Enable the bundle
```php
// in app/AppKernel.php
public function registerBundles() {
    $bundles = array(
        // ...
        new Webmakers\SettingBundle\WebmakersSettingBundle(),
    );
    // ...
    return $bundles;
}
```

#### Create the table
```shell
// In shell
php app/console doctrine:schema:update --force
```

## Usage

#### Controller
```php
$this->get('wm.setting')->getSetting('SETTING_NAME');
```

#### Twig
```twig
{{ get_setting('SETTING_NAME') }}
```
