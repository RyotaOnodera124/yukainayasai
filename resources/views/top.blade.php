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

<section class="hero">
    <h1 class="title">愉快な野菜たち<br></h1>
    <h2 class="subtitle">規格外野菜をもっと身近に</h2>
</section>

    <section class="concept">
        <div class="wrapper">
            <h2 class="title">私たちの思い</h2>
            <p>
                収穫量のうち、20%〜30%は規格外として廃棄しています。
                規格外の野菜は見た目こそ悪いものの、美味しさは変わりません。
                私たちは、そんな規格外野菜を皆さんの食卓に届けたいという思いのもと活動しています。
                『愉快な野菜たち』で、普段の食卓をもっと明るくしませんか？
            </p>
        </div>
        <img src="https://assets.codepen.io/85188/concept.jpg" alt="">
    </section>

    <section class="gallery">
        <div class="gallery-image">
            <img src="https://assets.codepen.io/85188/img1.jpg" alt="">
        </div>
        <div class="gallery-content wrapper">
            <h2 class="title">Lookbook</h2>
            <ul class="gallery-thumbnails">
                {{-- <li><img src="https://assets.codepen.io/85188/img1.jpg" alt=""></li>
                <li><img src="https://assets.codepen.io/85188/img2.jpg" alt=""></li>
                <li><img src="https://assets.codepen.io/85188/img3.jpg" alt=""></li>
                <li><img src="https://assets.codepen.io/85188/img4.jpg" alt=""></li>
                <li><img src="https://assets.codepen.io/85188/img5.jpg" alt=""></li>
                <li><img src="https://assets.codepen.io/85188/img6.jpg" alt=""></li>
                <li><img src="https://assets.codepen.io/85188/img7.jpg" alt=""></li>
                <li><img src="https://assets.codepen.io/85188/img8.jpg" alt=""></li>
                <li><img src="https://assets.codepen.io/85188/img9.jpg" alt=""></li> --}}
            </ul>
        </div>
    </section>

    <section class="shop">
        <div class="shop-content wrapper">
            <h2 class="title">Shop</h2>
            <p>いつでも送料無料。便利なオンラインショップをご利用ください。</p>
            <a class="btn" href="#">オンラインショップ</a>

            <h3>六本木店</h3>
            <p>
                東京都港区六本木2-4-5<br>
                営業日：金・土・日・祝<br>
                営業時間：11:00〜18:00
            </p>
        </div>
    </section>
</body>

</html>
