# laravel5-tinkoff

Пакет для интеграции с платежной системой банка Тинькофф

[[Документация](https://oplata.tinkoff.ru/landing/develop/documentation)]

## Установка

* Установка через composer: `composer require shakinm/laravel5-tinkoff:@dev`
* ```php artisan vendor:publish --tag=tinkoff```
* Если используется Laravel 5.5 и выше, то пропустите этот шаг:

Зарегистрируйте ServiceProvider в `config/app.php`

```php
        'providers' => [
		// [...]
                Shakinm\Tinkoff\TinkoffServiceProvider::class,
        ],
```

Также можете зарегистрировать фасад `Tinkoff` :

```php
        'aliases' => [
		// [...]
                'Tinkoff' => Shakinm\Tinkoff\TinkoffFacade::class,
        ],
```

## Настройки

``` 
<?php

// config/tinkoff.php

return [
    'terminalKey'=> env('TINKOFF_TERMINAL_KEY',''),
    'secretKey'=> env('TINKOFF_SECRET_KEY',''),
    'api_url'=> env('TINKOFF_API_URL',''),
];

```
## Использование


 
* terminalKey - Уникальный идентификатор терминала. Выдается банком на каждый магазин.
* secretKey - Используется для подписи запросов/ответов
* api_url - URL для отправки запросов например: https://securepay.tinkoff.ru
  
## IDE    
Для того, чтобы работали подсказки в IDE установить    
https://github.com/barryvdh/laravel-ide-helper