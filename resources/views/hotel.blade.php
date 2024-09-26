<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BasicHotel</title>
    <style>
        body {
            coler: #333333;
            background-color: #ffffff;
            font-size: 100%;
            line-height: 1.7;
            margin: 10px auto;
            width: 90%;
            -webkid-text-size-adjust: 100%;
        }

        a {
            text-decoration: none;
        }

        .main-nav {
            display: flex;
            font-size: 1.25rem;
            text-transform: uppercase;
            list-style: none;
        }

        .main-nav li {
            margin-left: 36px;
        }
    </style>
</head>

<body>
    <header>
        <h1>BasicHotel</h1>
        <nav>
            <ul class="main-nav">
                <li><a href="/">利用者一覧</a></li>
                <li><a href="/"></a>予約一覧</li>
            </ul>
            <ul class="main-nav">
                <li><a href="/"></a>利用者一覧</li>
                <li><a href="/"></a>予約一覧</li>
            </ul>
        </nav>
    </header>
</body>
@yield('body')

</html>
