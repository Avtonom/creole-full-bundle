# creole-full-bundle
Bundle for Symfony for creole markdown Wiki parser for PHP from softark/creole
https://github.com/softark/creole#readme

Installation
------------

Retrieve the bundle with composer:

.. code-block:: sh

    php composer.phar require avtonom/creole-full-bundle --no-update


Installation is recommended to be done via [composer][] by running:

	composer require avtonom/creole-full-bundle "~1.1"

Alternatively you can add the following to the `require` section in your `composer.json` manually:

```json
"avtonom/creole-full-bundle": "~1.1"
```

Run `composer update` afterwards.

Register these bundles in your AppKernel:

.. code-block:: php

  <?php
  // app/AppKernel.php
  public function registerBundles()
  {
      return array(
          // ...
          new Avtonom\CreoleBundle\AvtonomCreoleBundle(),
          // ...
      );
  }

todo
