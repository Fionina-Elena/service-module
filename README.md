# Service Module

Блок услуг + форма заявки на Laravel.

## Требования

- PHP 8.1+
- Composer
- MySQL

## Установка и запуск

1. Перейти в папку проекта:
```bash
cd service-module
```

2. Установить зависимости:
```bash
composer install
```

3. Настроить `.env`:
```bash
cp .env.example .env
php artisan key:generate
```

4. Настроить базу данных в `.env`:

```bash
DB_CONNECTION=mysql
DB_DATABASE=service-module
DB_USERNAME=root
DB_PASSWORD=
```

5. Запустить миграции:
```bash
php artisan migrate
```

6. Запустить сервер:
```bash
php artisan serve
```

Открыть в браузере: `http://127.0.0.1:8000`

## Страницы

- `/` — главная: блок услуг + форма заявки
- `/applications` — список заявок
