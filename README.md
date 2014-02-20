Magnum CI API PHP Client
========================

[![Build Status](https://travis-ci.org/pdenis/magnum-client.png)](https://travis-ci.org/pdenis/magnum-client)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/pdenis/magnum-client/badges/quality-score.png?s=0acc7f80fee88ce4e8615597729ab3fd1f0cb878)](https://scrutinizer-ci.com/g/pdenis/magnum-client/)
[![Code Coverage](https://scrutinizer-ci.com/g/pdenis/magnum-client/badges/coverage.png?s=2b29e1b22c6268f75d98c92a58f2ca34c6427613)](https://scrutinizer-ci.com/g/pdenis/magnum-client/)
[![Latest Stable Version](https://poser.pugx.org/snide/php-magnum-client/v/stable.png)](https://packagist.org/packages/snide/php-magnum-client)
[![Total Downloads](https://poser.pugx.org/snide/php-magnum-client/downloads.png)](https://packagist.org/packages/snide/php-magnum-client)
[![License](https://poser.pugx.org/snide/php-magnum-client/license.png)](https://packagist.org/packages/snide/php-magnum-client)

## Installation

### Installation by Composer

If you use composer, add php-magnum-client library as a dependency to the composer.json of your application

```php
    "require": {
        ...
        "snide/php-magnum-client": "dev-master"
        ...
    },

```

## Usage

### To get Project info, you can do :

```php
<?php

include_once('../vendor/autoload.php');

use Snide\Magnum\Client;
use Snide\Magnum\Model\User;
use Snide\Magnum\Model\Project;

$client = new Client();
$project = new Project();
$project->setApiToken('YourProjectAPIKey');
$project = $client->fetchProject($project); // Fetch project & builds

```

### To get User  info, you can do :

```php
<?php

include_once('../vendor/autoload.php');

use Snide\Magnum\Client;
use Snide\Magnum\Model\User;
use Snide\Magnum\Model\Project;

$client = new Client();
$user = new User();
$user->setApiToken('YourProjectAPIKey');
$user = $client->fetchProject($user); // Fetch user profile

```

That's all!