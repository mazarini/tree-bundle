Installation
============

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Applications that use Symfony Flex
----------------------------------

Open a command console, enter your project directory and execute:

```console
$ composer require mazarini/tree-bundle
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require mazarini/tree-bundle
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Mazarini\TreeBundle\MazariniTreeBundle::class => ['all' => true],
];
```
Demo / Example
==============

Make sure symfony-cli is installed globally, as explained in the
[download page](https://symfony.com/download)
of Symfony.


### Step 1: Get sources

```console
$ git clone git@github.com:mazarini/tree-bundle.git
```


### Step 2: Install demo

```console
$ cd tree-bundle/.demo
$ composer install
$ yarn install
$ yarn dev
```

### Step 3: Run server and views pages

```console
$ symfony server:start
```

 Now, you can open a browser at https://127.0.0.1:8000


### Step 4: Views twig examples

All twig's examples are in .demo/templates.
