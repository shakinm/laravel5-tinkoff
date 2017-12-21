# laravel5-tinkoff

## Установка

1. composer require shakinm/laravel5-tinkoff:@dev
2. php artisan vendor:publish --tag=tinkoff

## Настройки

config/tinkoff.php
    
 terminalKey - Уникальный идентификатор терминала. Выдается банком на каждый магазин.
 secretKey - Используется для подписи запросов/ответов
 api_url - URL для отправки запросов например: https://securepay.tinkoff.ru
    
Для того, чтобы работыли подсказки в IDE устновить    
https://github.com/barryvdh/laravel-ide-helper