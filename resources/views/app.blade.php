<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Услуги')</title>

    @stack('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background: #2c3e50;
            color: #fff;
            padding: 20px 0;
        }

        header a {
            color: #fff;
            text-decoration: none;
        }

        header nav {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            margin-right: auto;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            margin: 40px 0 10px;
        }

        .section-desc {
            text-align: center;
            color: #666;
            margin-bottom: 40px;
        }

        @media (max-width: 768px) {
            header nav {
                flex-direction: column;
                text-align: center;
            }

            .logo {
                margin-right: 0;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Услуги</div>
                <a href="/">Главная</a>
                <a href="/applications">Заявки</a>
            </nav>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>