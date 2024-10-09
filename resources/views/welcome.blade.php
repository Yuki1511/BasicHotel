<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    {{-- Googleフォント --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,600&display=swap"
        rel="stylesheet">
    <title>Basic Hotel</title>
</head>

<body>
    <header>
        <a href="#" class="logo">
            <h1 class="font_english">Basic Hotel</h1>
        </a>
        <ul class="navi">
            <a href="#">
                <li>客室</li>
            </a>
            <a href="#">
                <li>日程・人数</li>
            </a>
            <a href="#">
                <li>プラン（仮）</li>
            </a>
            <a href="#">
                <li>カート（仮）</li>
            </a>
        </ul>
    </header>
    <main>
        <h4>客室一覧</h4>
        <div class="main_contents">
            <div class="basic_room rooms">
                {{-- 次回、写真を挿入 --}}
                <div class="room_image room_guide">
                    <a href="#">部屋写真</a>
                </div>
                <div class="room_guide">
                    <p>Basicルーム</p>
                    <p>宿泊可能人数：3名まで</p>
                    <p>価格：20,000円</p>
                </div>
            </div>
            <div class="deluxe_room rooms">
                <div class="room_image room_guide">
                    <a href="">部屋写真</a>
                </div>
                <div class="room_guide">
                    <p>デラックスルーム</p>
                    <p>宿泊可能人数：2名まで</p>
                    <p>価格：40,000円</p>
                </div>
            </div>
            <div class="premium_room rooms">
                <div class="room_image room_guide">
                    <a href="">部屋写真</a>
                </div>
                <div class="room_guide">
                    <p>プレミアムルーム</p>
                    <p>宿泊可能人数：2名まで</p>
                    <p>価格：50,000円</p>
                </div>
            </div>
        </div>
        <form action="#">
            <input type="submit" value="予約に進む">
        </form>
    </main>

</body>

</html>
