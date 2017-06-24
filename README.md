# Controller
Abstract controller

[![Latest Stable Version](https://poser.pugx.org/iagafonov/controller/v/stable)](https://packagist.org/packages/iagafonov/controller)
[![Build Status](https://travis-ci.org/IVAgafonov/Controller.svg?branch=master)](https://travis-ci.org/IVAgafonov/Controller)
[![Coverage Status](https://coveralls.io/repos/github/IVAgafonov/Controller/badge.svg?branch=master)](https://coveralls.io/github/IVAgafonov/Controller?branch=master)

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```
composer require iagafonov/controller
```

### Use
```php
use IVAgafonov\Controller\AbstractController
use IVAgafonov\Controller\ControllerInterface

class MyController extends AbstractController implements ControllerInterface
{
    public function index()
    {
    
    }
}
```
