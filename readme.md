<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About Project

Laravel api for sending messages and checking balance with ClockWorkSms 

## Requirements

* [Composer](https://getcomposer.org/)
* [Laravel](https://laravel.com/)

## Installation

Require package:
``` bash
composer require seymur/clockworksms:dev-master
```

Now add the service provider in config/app.php file:
```  
'providers' => [
    // ...
        Seymur\Clockworksms\ClockWorkServiceProvider::class,
],
```

after this add alias in config/app.php file:

``` 
'aliases' => [
 //...
     'Clockworksms' => Seymur\Clockworksms\Facades\Clockworksms::class,
 ],
```

use command (optional): 
``` 
composer dump-autoload
```
now u can use api like this 
```
use Seymur\Clockworksms\Facades\Clockworksms;
 //...

    Clockworksms::send($apiKey,$number,$message);
```

or you can use 
```
\Seymur\Clockworksms\Facades\Clockworksms::send($apiKey,$number,$message);
```

for sending bulk message use array
```
    Clockworksms::send($apiKey,[441234567890,994515553344,441234567891],$message);
```

for checking balance use:
```
    Clockworksms::balance($apiKey);
```