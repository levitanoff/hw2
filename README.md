# SiteChecker (Домашнее задание №4)
Возвращает числовой код ответа сервера по запрашиваемому адрусу страницы

## Требования
- PHP 7.4
- guzzlehttp/guzzle ^7.8

## Установка
```bash
$ composer require levitanoff/hw4
```

## Использование
```php
<?php
$client = new Levitanoff\Hw4\SiteChecker();
$client->getRequest('https://example.com');
echo $client->getCode();
```
