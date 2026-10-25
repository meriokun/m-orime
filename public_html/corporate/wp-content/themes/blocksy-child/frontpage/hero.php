<section class="mainvisual">

    <div class="mainvisual__slider">
        <div class="slide slide01"></div>
        <div class="slide slide02"></div>
        <div class="slide slide03"></div>        
    </div>

    <div class="mainvisual__overlay">
        <div class="container">
            <div class="mainvisual__content">

                <p class="mainvisual__lead">Learn, Grow, Shine.</p>

                <h1 class="mainvisual__title">
                    英語学習を通して、<br>
                    一人ひとりの未来を育てます。
                </h1>

                <p class="mainvisual__text">
                    初心者からビジネスパーソンまで。<br>
                    オンライン英会話、法人向け研修、教材開発を通じて、
                    英語を学ぶすべての人をサポートしています。
                </p>

                <div class="mainvisual__btns">
                    <a href="#ourservices" class="btn btn-outline-light btn-lg">
                        サービスを見る
                    </a>

                    <a href="#inquiry" class="btn btn-primary btn-lg">
                        お問い合わせ
                    </a>
                </div>

            </div>
        </div>
    </div>

</section>

<style>

#header{
    z-index:1000;
}

/* =========================
   Main Visual
========================= */

.mainvisual{
    position:relative;
    height:700px;
    overflow:hidden;
}

/* スライダー */

.mainvisual__slider{
    position:absolute;
    inset:0;
    z-index:1;

    background:#f2f5f7;
}
.slide{
    position:absolute;
    inset:0;

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    opacity:0;

    transform:scale(1);
    animation: heroSlide 21s infinite linear;
}

.slide01{
    background-image:url('http://m-orime.site/corporate/wp-content/uploads/2026/05/pixta_40862781_M.jpg');
}

.slide02{
    background-image:url('http://m-orime.site/corporate/wp-content/uploads/2026/06/4353657_m-1.jpg');
    animation-delay:7s;
}
    
.slide03{
    background-image:url('http://m-orime.site/corporate/wp-content/uploads/2026/06/pixta_98020820_M.jpg');
    animation-delay:14s;
}

/* 黒オーバーレイ */

.mainvisual::before{
    content:"";
    position:absolute;
    inset:0;
    background:rgba(0,0,0,.20);
    z-index:2;
}

/* テキスト */

.mainvisual__overlay{
    position:relative;
    z-index:3;
    height:100%;
    display:flex;
    align-items:center;
    color:#fff;
}

.mainvisual__content{
    max-width:1200px;
    margin:0 auto;
    color:#fff;
}

/* Typography */

.mainvisual__lead{
    font-size:1.5rem;
    margin-bottom:10px;
    letter-spacing:.05em;
    font-weight:600;
}

.mainvisual__title{
    font-size:clamp(2rem,5vw,4rem);
    font-weight:700;
    line-height:1.4;
    margin-bottom:25px;
}

.mainvisual__text{
    font-size:1.3rem;
    line-height:1.8;
    margin-bottom:40px;
    font-weight:600;
}

/* Buttons */

.mainvisual__btns{
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.btn-primary{
    background:#fa8138;
    border-color:#fa8138;
}

.btn-primary:hover{
    background:rgba(250,129,56,.8);
    border-color:#fa8138;
}

.mainvisual__btns .btn{
    min-width:220px;
    border-radius:999px;
    padding:14px 30px;
    font-weight:700;
}

/* フェード＋ズーム */

@keyframes heroSlide {

    0% {
        opacity: 0;
        transform: scale(1);
    }

    8% {
        opacity: 1;
    }

    45% {
        opacity: 1;

    }

    53% {
        opacity: 0;

    }

    100% {
        opacity: 0;
        transform: scale(1);
    }
}

/* Tablet */

@media (max-width:991.98px){

    .mainvisual{
        height:500px;
    }

    .mainvisual__title{
        font-size:2.5rem;
    }

    .mainvisual__text{
        font-size:1rem;
    }
}

/* Smartphone */

@media (max-width:767.98px){

    .mainvisual{
        height:400px;
    }

    .mainvisual__overlay{
        text-align:center;
    }

    .mainvisual__content{
        max-width:100%;
    }

    .mainvisual__lead{
        font-size:.95rem;
    }

    .mainvisual__title{
        font-size:1.56rem;
        margin-bottom:15px;
    }

    .mainvisual__text{
        font-size:.95rem;
        margin-bottom:25px;
    }

    .mainvisual__btns{
        justify-content:center;
        gap:10px;
    }

    .mainvisual__btns .btn{
        min-width:180px;
        font-size:.9rem;
    }
}

</style>