<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>愉快な野菜たち</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <link rel="icon" href="images/favicon.svg" type="image/svg+xml">
</head>

<body>
    <!-- ローディング画面 -->
    <div id="loading">
        <p>Loading...</p>
        <div id="loading-screen"></div>
    </div>

<!-- ナビゲーションメニュー -->
<nav>
    <button id="menu-open" class="btn-menu">
        <svg height="24" viewBox="0 0 24 24" width="24">
            <title>メニューを開く</title>
            <path clip-rule="evenodd" d="m4.25 8c0-.41421.33579-.75.75-.75h14c.4142 0 .75.33579.75.75s-.3358.75-.75.75h-14c-.41421 0-.75-.33579-.75-.75zm0 4c0-.4142.33579-.75.75-.75h14c.4142 0 .75.3358.75.75s-.3358.75-.75.75h-14c-.41421 0-.75-.3358-.75-.75zm.75 3.25c-.41421 0-.75.3358-.75.75s.33579.75.75.75h14c.4142 0 .75-.3358.75-.75s-.3358-.75-.75-.75z" fill-rule="evenodd"/>
        </svg>
    </button>
    <div id="menu-panel">
        <button id="menu-close" class="btn-menu">
            <svg height="24" viewBox="0 0 24 24" width="24">
                <title>メニューを閉じる</title>
                <path clip-rule="evenodd" d="m7.53033 6.46967c-.29289-.29289-.76777-.29289-1.06066 0s-.29289.76777 0 1.06066l4.46963 4.46967-4.46963 4.4697c-.29289.2929-.29289.7677 0 1.0606s.76777.2929 1.06066 0l4.46967-4.4696 4.4697 4.4696c.2929.2929.7677.2929 1.0606 0s.2929-.7677 0-1.0606l-4.4696-4.4697 4.4696-4.46967c.2929-.29289.2929-.76777 0-1.06066s-.7677-.29289-1.0606 0l-4.4697 4.46963z" fill-rule="evenodd"/>
            </svg>
        </button>
        <ul class="menu-list">
            <li><a href="{{ route('vegetables.index') }}">野菜検索</a></li>
            <li><a href="{{ route('articles.index') }}">レシピ投稿</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">オンラインショップ</a></li>
        </ul>
    </div>
</nav>
    <x-app-layout>
        <section class="hero">
            <h1 class="title">愉快な野菜たち<br></h1>
        </section>

        <section class="concept">
            <div class="wrapper">
                <h2 class="title">私たちの思い</h2>
                <p>
                    収穫量のうち、20%〜30%は規格外として廃棄しています。<br>
                    規格外の野菜は見た目こそ悪いものの、美味しさは変わりません。<br>
                    そんな規格外野菜を皆さんの食卓に届けたいという思いのもと活動しています。<br>
                    『愉快な野菜たち』で、普段の食卓をもっと明るくしませんか？<br>
                </p>
            </div>
            <img src="images/vegetable1.jpg" alt="">
        </section>

        <section class="gallery">
            <div class="gallery-image">
                <img src="images/farmer.jpg" alt="">
            </div>
            <div class="gallery-content wrapper">
                <h2 class="title">出荷野菜一覧</h2>
                <ul class="gallery-thumbnails">
                    <li><img src="images/vegetable2.jpg" alt=""></li>
                    <li><img src="images/vegetable3.jpg" alt=""></li>
                    <li><img src="images/vegetable4.jpg" alt=""></li>
                    <li><img src="images/vegetable5.jpg" alt=""></li>
                    <li><img src="images/vegetable6.jpg" alt=""></li>
                    <li><img src="images/vegetable7.jpg" alt=""></li>
                    <li><img src="images/vegetable8.jpg" alt=""></li>
                    <li><img src="images/vegetable9.jpg" alt=""></li>
                    <li><img src="images/vegetable10.jpg" alt=""></li>
                </ul>
            </div>
        </section>

        <section class="shop">
            <div class="shop-content wrapper">
                <h2 class="title">Shop</h2>
                <p>日本全国に郵送可能。便利なオンラインショップをご利用ください。</p>
                <a class="btn" href="#">オンラインショップ</a>

                <h3>〇〇店</h3>
                <p>
                    住所：〇〇<br>
                    定休日：祝日、不定休<br>
                    営業時間：9:00〜18:00
                </p>
            </div>
        </section>
    </x-app-layout>
</body>

</html>

