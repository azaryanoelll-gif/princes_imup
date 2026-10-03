<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0">

<title>
    Maafin Oell Yaaw Princess ❤️
</title>


<style>

/* =====================================================
   RESET
===================================================== */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}


/* =====================================================
   BODY
===================================================== */

body{

    min-height:100vh;

    overflow-x:hidden;

    font-family:
        Arial,
        sans-serif;

    display:flex;

    justify-content:center;

    align-items:flex-start;

    padding:20px 0;

    background:
        radial-gradient(
            circle at top,
            #681957,
            #260722 45%,
            #080008
        );

    color:white;
}


/* =====================================================
   BINTANG
===================================================== */

.stars{

    position:fixed;

    inset:0;

    overflow:hidden;

    pointer-events:none;

    z-index:0;
}


.star{

    position:absolute;

    width:3px;

    height:3px;

    background:white;

    border-radius:50%;

    box-shadow:
        0 0 10px white;

    animation:
        twinkle 2s infinite;
}


@keyframes twinkle{

    0%,100%{

        opacity:.2;

        transform:
            scale(.5);
    }

    50%{

        opacity:1;

        transform:
            scale(1.5);
    }
}


/* =====================================================
   CARD
===================================================== */

.card{

    position:relative;

    z-index:5;

    width:min(
        94%,
        550px
    );

    padding:
        38px 22px;

    text-align:center;

    border-radius:30px;

    background:
        rgba(
            255,
            255,
            255,
            .09
        );

    border:
        1px solid
        rgba(
            255,
            255,
            255,
            .20
        );

    backdrop-filter:
        blur(18px);

    box-shadow:

        0 30px 80px
        rgba(0,0,0,.5),

        0 0 50px
        rgba(
            255,
            80,
            170,
            .15
        );

    animation:
        cardIn 1s ease;
}


@keyframes cardIn{

    from{

        opacity:0;

        transform:
            translateY(50px)
            scale(.9);
    }

    to{

        opacity:1;

        transform:
            translateY(0)
            scale(1);
    }
}


/* =====================================================
   BIG HEART
===================================================== */

.big-heart{

    font-size:75px;

    animation:
        heartbeat 1.3s infinite;

    filter:
        drop-shadow(
            0 0 20px
            #ff4f9a
        );
}


@keyframes heartbeat{

    0%,100%{

        transform:
            scale(1);
    }

    50%{

        transform:
            scale(1.2);
    }
}


/* =====================================================
   TITLE
===================================================== */

h1{

    margin-top:10px;

    font-size:
        clamp(
            30px,
            8vw,
            50px
        );

    background:
        linear-gradient(
            90deg,
            #fff,
            #ff83b7,
            #fff
        );

    background-size:200%;

    -webkit-background-clip:text;

    -webkit-text-fill-color:
        transparent;

    animation:
        shine 3s linear infinite;
}


@keyframes shine{

    to{

        background-position:
            200%;
    }
}


.subtitle{

    margin-top:10px;

    color:#ffc1dd;

    font-size:13px;

    letter-spacing:3px;
}


/* =====================================================
   MESSAGE
===================================================== */

.message{

    margin-top:25px;

    line-height:1.7;

    font-size:17px;

    color:#fff1f7;

    white-space:pre-line;
}


/* =====================================================
   BUTTON
===================================================== */

.buttons{

    margin-top:25px;

    display:flex;

    flex-direction:column;

    gap:14px;
}


button{

    border:none;

    padding:
        15px 20px;

    border-radius:50px;

    font-size:15px;

    font-weight:bold;

    color:white;

    cursor:pointer;

    transition:.3s;
}


button:hover{

    transform:
        translateY(-4px)
        scale(1.03);
}


button:active{

    transform:
        scale(.96);
}


.btn-maafin{

    background:
        linear-gradient(
            135deg,
            #ff4d91,
            #d42f78
        );

    box-shadow:
        0 10px 30px
        rgba(
            255,
            60,
            140,
            .35
        );
}


.btn-lima{

    background:
        linear-gradient(
            135deg,
            #663b9e,
            #38205e
        );

    box-shadow:
        0 10px 30px
        rgba(
            120,
            70,
            200,
            .3
        );
}


/* =====================================================
   SECTION
===================================================== */

.game-section,
.quiz-section,
.flight-section{

    margin-top:35px;

    padding:
        25px 15px;

    border-radius:25px;

    background:
        rgba(
            255,
            255,
            255,
            .06
        );

    border:
        1px solid
        rgba(
            255,
            255,
            255,
            .15
        );
}


.game-title,
.flight-title{

    font-size:22px;

    margin-bottom:8px;
}


.game-description,
.flight-description{

    color:#ffd5e7;

    font-size:14px;

    line-height:1.7;

    margin-bottom:15px;
}


/* =====================================================
   GAME TANGKAP HATI
===================================================== */

.score{

    font-size:20px;

    font-weight:bold;

    color:#ff9bc5;

    margin-bottom:15px;
}


.game-area{

    position:relative;

    width:100%;

    height:300px;

    border-radius:20px;

    overflow:hidden;

    background:
        radial-gradient(
            circle at center,
            rgba(
                255,
                80,
                170,
                .12
            ),
            rgba(
                0,
                0,
                0,
                .25
            )
        );

    border:
        1px solid
        rgba(
            255,
            255,
            255,
            .1
        );

    margin-top:15px;
}


.game-heart{

    position:absolute;

    font-size:35px;

    cursor:pointer;

    user-select:none;

    animation:
        gameHeartIn .25s ease,
        gameHeartFloat 1.2s
        infinite alternate;

    filter:
        drop-shadow(
            0 0 10px
            rgba(
                255,
                80,
                170,
                .8
            )
        );
}


@keyframes gameHeartIn{

    from{

        opacity:0;

        transform:
            scale(.2);
    }

    to{

        opacity:1;

        transform:
            scale(1);
    }
}


@keyframes gameHeartFloat{

    from{

        margin-top:-3px;
    }

    to{

        margin-top:3px;
    }
}


.game-info{

    font-size:13px;

    color:#c7aabb;

    margin-top:12px;
}


/* =====================================================
   QUIZ
===================================================== */

.quiz-heart{

    font-size:55px;

    animation:
        heartbeat 1.3s infinite;

    margin-bottom:5px;
}


.quiz-title{

    font-size:
        clamp(
            23px,
            6vw,
            31px
        );

    color:#ffb5d3;

    margin-bottom:8px;
}


.quiz-subtitle{

    font-size:14px;

    line-height:1.6;

    color:#ffe3ef;

    margin-bottom:20px;
}


/* =====================================================
   LEVEL SAYANG
===================================================== */

.infinity-box{

    margin:
        10px auto 20px;

    padding:15px;

    border-radius:20px;

    background:
        rgba(
            255,
            255,
            255,
            .07
        );

    border:
        1px solid
        rgba(
            255,
            255,
            255,
            .12
        );
}


.infinity-label{

    font-size:12px;

    letter-spacing:2px;

    color:#dcb3c9;

    margin-bottom:8px;
}


.infinity-number{

    font-size:35px;

    font-weight:bold;

    color:#ff86b7;

    transition:.3s;
}


.love-options{

    display:grid;

    grid-template-columns:
        repeat(2,1fr);

    gap:10px;

    margin-top:15px;
}


.love-option{

    padding:
        13px 8px;

    border-radius:16px;

    background:
        rgba(
            255,
            255,
            255,
            .07
        );

    border:
        1px solid
        rgba(
            255,
            255,
            255,
            .15
        );

    color:white;

    font-size:14px;

    font-weight:bold;
}


.love-option.selected{

    background:
        linear-gradient(
            135deg,
            #ff4d91,
            #c92e72
        );

    border-color:#ff9bc5;

    box-shadow:
        0 0 20px
        rgba(
            255,
            80,
            160,
            .35
        );
}


.infinity-choice{

    grid-column:
        1 / -1;

    background:
        linear-gradient(
            135deg,
            #7b3fa1,
            #4c246c
        );

    font-size:18px;
}


.love-answer{

    min-height:25px;

    margin-top:12px;

    color:#ffb5d3;

    font-size:14px;

    font-weight:bold;

    line-height:1.6;
}


/* =====================================================
   QUESTION
===================================================== */

.question-box{

    display:none;

    text-align:left;

    animation:
        questionIn .4s ease;
}


.question-box.active{

    display:block;
}


@keyframes questionIn{

    from{

        opacity:0;

        transform:
            translateY(15px);
    }

    to{

        opacity:1;

        transform:
            translateY(0);
    }
}


.question-number{

    color:#ff91bc;

    font-size:13px;

    font-weight:bold;

    margin-bottom:8px;
}


.question-text{

    font-size:18px;

    font-weight:bold;

    line-height:1.5;

    margin-bottom:15px;
}


.answers{

    display:flex;

    flex-direction:column;

    gap:10px;
}


.answer{

    width:100%;

    padding:
        14px 16px;

    text-align:left;

    border-radius:15px;

    background:
        rgba(
            255,
            255,
            255,
            .07
        );

    border:
        1px solid
        rgba(
            255,
            255,
            255,
            .14
        );

    color:white;

    font-size:15px;

    font-weight:normal;
}


/* =====================================================
   QUIZ RESULT
===================================================== */

.quiz-result{

    display:none;

    animation:
        questionIn .5s ease;
}


.quiz-result.show{

    display:block;
}


.result-heart{

    font-size:70px;

    animation:
        heartbeat 1.2s infinite;

    margin-bottom:10px;
}


.result-title{

    font-size:27px;

    color:#ff9fc5;

    margin-bottom:15px;
}


.result-text{

    font-size:16px;

    line-height:1.9;

    color:#ffeaf3;

    white-space:pre-line;
}


.love-number{

    margin:
        18px auto;

    padding:18px;

    border-radius:20px;

    background:
        rgba(
            255,
            80,
            160,
            .12
        );

    border:
        1px solid
        rgba(
            255,
            120,
            180,
            .25
        );
}


.love-number small{

    display:block;

    color:#d6afc2;

    margin-bottom:5px;
}


.love-number strong{

    font-size:38px;

    color:#ff86b7;
}


/* =====================================================
   GAME PESAWAT PANAH
===================================================== */

.flight-section{

    overflow:hidden;
}


.flight-title{

    font-size:
        clamp(
            22px,
            6vw,
            29px
        );

    color:#ffafd0;
}


.flight-description{

    margin-bottom:18px;
}


/* STATUS */

.flight-status{

    display:flex;

    justify-content:
        space-between;

    align-items:center;

    gap:10px;

    margin-bottom:15px;

    padding:
        10px 14px;

    border-radius:15px;

    background:
        rgba(
            255,
            255,
            255,
            .06
        );
}


.level-text{

    color:#ffafd0;

    font-weight:bold;
}


.life-text{

    color:#fff;

    font-size:14px;
}


/* FLIGHT AREA */

.flight-area{

    position:relative;

    width:100%;

    height:420px;

    overflow:hidden;

    border-radius:25px;

    background:

        radial-gradient(
            circle at 50% 30%,
            rgba(
                80,
                120,
                255,
                .15
            ),
            transparent 35%
        ),

        linear-gradient(
            180deg,
            #080d2b,
            #16051f
        );

    border:
        1px solid
        rgba(
            255,
            255,
            255,
            .15
        );

    touch-action:none;

    cursor:
        crosshair;
}


/* BINTANG DALAM GAME */

.flight-star{

    position:absolute;

    width:2px;

    height:2px;

    border-radius:50%;

    background:white;

    opacity:.6;

    animation:
        flightStarMove
        linear infinite;
}


@keyframes flightStarMove{

    from{

        transform:
            translateY(-20px);
    }

    to{

        transform:
            translateY(450px);
    }
}


/* PESAWAT OELL */

.oell-plane{

    position:absolute;

    left:50%;

    bottom:18px;

    transform:
        translateX(-50%);

    font-size:42px;

    z-index:20;

    filter:
        drop-shadow(
            0 0 12px
            #ff5ca8
        );

    transition:
        left .08s linear;
}


/* MUSUH */

.enemy{

    position:absolute;

    top:-50px;

    font-size:32px;

    z-index:10;

    filter:
        drop-shadow(
            0 0 8px
            rgba(
                255,
                0,
                80,
                .8
            )
        );

    animation:
        enemyDown
        linear forwards;
}


@keyframes enemyDown{

    to{

        transform:
            translateY(500px);
    }
}


/* PANAH */

.arrow{

    position:absolute;

    bottom:65px;

    width:5px;

    height:42px;

    border-radius:5px;

    background:
        linear-gradient(
            180deg,
            #fff,
            #ff69ae
        );

    z-index:15;

    box-shadow:
        0 0 12px
        #ff70b0;

    transform:
        translateX(-50%);

    animation:
        arrowShoot
        .65s linear forwards;
}


.arrow::before{

    content:"";

    position:absolute;

    top:-7px;

    left:50%;

    transform:
        translateX(-50%)
        rotate(45deg);

    width:10px;

    height:10px;

    border-top:
        3px solid #fff;

    border-left:
        3px solid #fff;
}


@keyframes arrowShoot{

    to{

        bottom:440px;
    }
}


/* HIT EFFECT */

.hit-effect{

    position:absolute;

    font-size:28px;

    z-index:30;

    pointer-events:none;

    animation:
        hitEffect
        .5s ease forwards;
}


@keyframes hitEffect{

    from{

        opacity:1;

        transform:
            scale(.5);
    }

    to{

        opacity:0;

        transform:
            scale(1.8)
            translateY(-20px);
    }
}


/* HATI PRINCESS */

.princess-heart{

    position:absolute;

    top:-70px;

    left:50%;

    transform:
        translateX(-50%);

    font-size:62px;

    z-index:25;

    filter:
        drop-shadow(
            0 0 20px
            #ff3f96
        );

    display:none;
}


.princess-heart.show{

    display:block;

    animation:
        heartArrive
        1s ease forwards;
}


@keyframes heartArrive{

    0%{

        top:-70px;

        transform:
            translateX(-50%)
            scale(.3);
    }

    70%{

        transform:
            translateX(-50%)
            scale(1.25);
    }

    100%{

        top:170px;

        transform:
            translateX(-50%)
            scale(1);
    }
}


/* PANAH NANCEP */

.final-arrow{

    position:absolute;

    left:50%;

    top:115px;

    transform:
        translateX(-50%)
        rotate(180deg);

    font-size:70px;

    z-index:27;

    display:none;

    filter:
        drop-shadow(
            0 0 12px
            #ff5ca8
        );
}


.final-arrow.show{

    display:block;

    animation:
        arrowHeartHit
        1.2s ease forwards;
}


@keyframes arrowHeartHit{

    0%{

        top:-40px;

        opacity:0;
    }

    100%{

        top:185px;

        opacity:1;
    }
}


/* GAME TEXT */

.flight-message{

    min-height:55px;

    margin-top:14px;

    color:#ffd8e8;

    font-size:14px;

    line-height:1.6;

}


/* =====================================================
   POPUP
===================================================== */

.popup{

    position:fixed;

    inset:0;

    display:none;

    justify-content:center;

    align-items:center;

    padding:20px;

    background:
        rgba(
            0,
            0,
            0,
            .75
        );

    backdrop-filter:
        blur(8px);

    z-index:100;
}


.popup-box{

    width:min(
        92%,
        500px
    );

    max-height:85vh;

    overflow-y:auto;

    padding:
        35px 25px;

    text-align:center;

    border-radius:28px;

    background:
        linear-gradient(
            145deg,
            #35132f,
            #170717
        );

    border:
        1px solid
        rgba(
            255,
            255,
            255,
            .2
        );

    box-shadow:
        0 30px 100px
        rgba(0,0,0,.7);

    animation:
        popupIn .5s ease;
}


@keyframes popupIn{

    from{

        opacity:0;

        transform:
            scale(.7);
    }

    to{

        opacity:1;

        transform:
            scale(1);
    }
}


.popup-title{

    font-size:34px;

    margin-bottom:20px;
}


.popup-text{

    line-height:1.8;

    font-size:16px;

    color:#ffeaf4;

    white-space:pre-line;
}


.close{

    margin-top:25px;

    background:#ff4f91;

    padding:
        12px 25px;
}


/* =====================================================
   FLOATING HEART
===================================================== */

.floating-heart{

    position:fixed;

    bottom:-40px;

    font-size:25px;

    pointer-events:none;

    z-index:2;

    animation:
        floatHeart
        5s linear forwards;
}


@keyframes floatHeart{

    0%{

        opacity:0;

        transform:
            translateY(0)
            scale(.5);
    }

    15%{

        opacity:1;
    }

    100%{

        opacity:0;

        transform:
            translateY(-110vh)
            translateX(var(--move))
            rotate(30deg)
            scale(1.5);
    }
}


/* =====================================================
   CONFETTI
===================================================== */

.confetti{

    position:fixed;

    top:-20px;

    z-index:200;

    animation:
        confettiFall
        4s linear forwards;
}


@keyframes confettiFall{

    to{

        transform:
            translateY(110vh)
            rotate(720deg);

        opacity:0;
    }
}


/* =====================================================
   FOOTER
===================================================== */

.footer{

    margin-top:25px;

    font-size:12px;

    color:#a88fa5;
}


/* =====================================================
   MOBILE
===================================================== */

@media(max-width:480px){

    body{

        padding:
            15px 0;
    }


    .card{

        width:94%;

        padding:
            30px 15px;
    }


    .big-heart{

        font-size:60px;
    }


    .message{

        font-size:15px;
    }


    .game-area{

        height:260px;
    }


    .flight-area{

        height:390px;
    }


    .oell-plane{

        font-size:36px;
    }


    .enemy{

        font-size:27px;
    }


    .question-text{

        font-size:16px;
    }


    .answer{

        font-size:14px;
    }


    .love-options{

        grid-template-columns:
            repeat(2,1fr);
    }

}

</style>

</head>


<body>


<!-- =====================================================
     BINTANG
===================================================== -->

<div
    class="stars"
    id="stars">
</div>



<!-- =====================================================
     CARD
===================================================== -->

<div class="card">


    <div class="big-heart">

        ❤️

    </div>


    <div class="subtitle">

        PESAN DARI OELL UNTUK PRINCESS

    </div>


    <h1>

        Maapinnnn Oelll 🥺

    </h1>


    <div class="message">

alooo princessss 🥺❤️

maapinnnn oelll yaaawww
jangannn maraaaa yaaawww
jangannn merajukkkk 😭❤️

tadiiii maaa oelll cumannnn bercandaaaa
ciussss ndaaaa booongggg 🥺

maapppp nyaaaak cintaaaa ❤️

jangannnn maraaaa...
baikannnn yaaa kitaaaa 🥺❤️

    </div>


    <div class="buttons">


        <button
            class="btn-maafin"
            onclick="maafin()">

            💕 iyaaa princesss maapinnn

        </button>


        <button
            class="btn-lima"
            onclick="limaMenit()">

            🥺 iyaaaa 5 menittt lagiiii diii maapinnnn

        </button>


    </div>



    <!-- =================================================
         GAME 1
    ================================================= -->

    <div class="game-section">


        <div class="game-title">

            🎮 MINI GAME BUAT PRINCESSS ❤️

        </div>


        <div class="game-description">

            Tangkap 10 hati Oelll yaaawww 🥺❤️

            <br>

            Jangan sampai hati 💔 yang ketangkap!

        </div>


        <div class="score">

            ❤️
            <span id="score">
                0
            </span>
            / 10

        </div>


        <button
            class="btn-maafin"
            onclick="startLoveGame()">

            💕 MULAI GAME

        </button>


        <div
            class="game-area"
            id="gameArea">

        </div>


        <div class="game-info">

            ❤️ = 1 poin
            &nbsp;&nbsp;

            💖 = 2 poin
            &nbsp;&nbsp;

            💔 = -1

        </div>

    </div>



    <!-- =================================================
         QUIZ
    ================================================= -->

    <div class="quiz-section">


        <div class="quiz-heart">

            💖

        </div>


        <div class="quiz-title">

            SEBERAPA SAYANG PRINCESS MA OELL? 🥺❤️

        </div>


        <div class="quiz-subtitle">

            Jawabbb pertanyaannn iniii yaaaawww 🥺

            <br>

            Oelll mauuu tauuu seberapaa kenalll
            Princessss samaaa Oelll 🤭❤️

        </div>



        <!-- LEVEL SAYANG -->

        <div class="infinity-box">


            <div class="infinity-label">

                SEBERAPA SAYANG PRINCESS MA OELL? ❤️

            </div>


            <div
                class="infinity-number"
                id="loveNumber">

                PILIH DULUUUU 🥺❤️

            </div>


            <div class="love-options">


                <button
                    class="love-option"
                    onclick="chooseLove(1,'1 ❤️',this)">

                    1 ❤️

                </button>


                <button
                    class="love-option"
                    onclick="chooseLove(10,'10 💕',this)">

                    10 💕

                </button>


                <button
                    class="love-option"
                    onclick="chooseLove(100,'100 💖',this)">

                    100 💖

                </button>


                <button
                    class="love-option"
                    onclick="chooseLove(1000,'1.000 💗',this)">

                    1.000 💗

                </button>


                <button
                    class="love-option"
                    onclick="chooseLove(1000000,'1.000.000 💞',this)">

                    1.000.000 💞

                </button>


                <button
                    class="love-option infinity-choice"
                    onclick="chooseLove('infinity','∞ ♾️❤️',this)">

                    ∞ ♾️❤️

                </button>


            </div>


            <div
                id="loveAnswer"
                class="love-answer">

            </div>

        </div>



        <!-- PERTANYAAN 1 -->

        <div
            class="question-box active"
            id="question1">


            <div class="question-number">

                PERTANYAAN 1 / 3 ❤️

            </div>


            <div class="question-text">

                1. Oell sukaaa mamm apaaaa? 🤭❤️

            </div>


            <div class="answers">


                <button
                    class="answer"
                    onclick="answerQuiz(1,'A')">

                    A. Paus 🐋

                </button>


                <button
                    class="answer"
                    onclick="answerQuiz(1,'B')">

                    B. Hiu 🦈

                </button>


                <button
                    class="answer"
                    onclick="answerQuiz(1,'C')">

                    C. Jerapa 🦒

                </button>


                <button
                    class="answer"
                    onclick="answerQuiz(1,'D')">

                    D. Nasi 🍚

                </button>


            </div>

        </div>



        <!-- PERTANYAAN 2 -->

        <div
            class="question-box"
            id="question2">


            <div class="question-number">

                PERTANYAAN 2 / 3 ❤️

            </div>


            <div class="question-text">

                2. Oell suka main apa? 🤭❤️

            </div>


            <div class="answers">


                <button
                    class="answer"
                    onclick="answerQuiz(2,'A')">

                    A. Ikan 🐟

                </button>


                <button
                    class="answer"
                    onclick="answerQuiz(2,'B')">

                    B. Paus 🐋

                </button>


                <button
                    class="answer"
                    onclick="answerQuiz(2,'C')">

                    C. Bola ⚽

                </button>


                <button
                    class="answer"
                    onclick="answerQuiz(2,'D')">

                    D. Tupai 🐿️

                </button>


            </div>

        </div>



        <!-- PERTANYAAN 3 -->

        <div
            class="question-box"
            id="question3">


            <div class="question-number">

                PERTANYAAN 3 / 3 ❤️

            </div>


            <div class="question-text">

                3. Oell sayangggg siapaaa? 🥺❤️

            </div>


            <div class="answers">


                <button
                    class="answer"
                    onclick="answerQuiz(3,'A')">

                    A. Camuuu 🥺❤️

                </button>


                <button
                    class="answer"
                    onclick="answerQuiz(3,'B')">

                    B. Jawabannn yangg A 😭❤️

                </button>


                <button
                    class="answer"
                    onclick="answerQuiz(3,'C')">

                    C. Camuu donggg pastinyaaa 😭❤️

                </button>


                <button
                    class="answer"
                    onclick="answerQuiz(3,'D')">

                    D. Cemuaaa benarrrr 😭😂❤️

                </button>


            </div>

        </div>



        <!-- HASIL QUIZ -->

        <div
            class="quiz-result"
            id="quizResult">


            <div class="result-heart">

                💖

            </div>


            <div class="result-title">

                HOREEEEEEEE PRINCESSSS 😭❤️

            </div>


            <div class="love-number">


                <small>

                    LEVEL SAYANG PRINCESS KE OELL

                </small>


                <strong
                    id="resultLoveNumber">

                    ∞ ♾️❤️

                </strong>


            </div>


            <div class="result-text">

MAACIII DAAA JAWABBBBB 😭❤️

MAKINNNNN CAYANGGGGG DEEEEE
SAMA OELLLLLL HIHIHIIIIII 🤭❤️

TERNYATAAAA PRINCESSSS
KENALLLLLL BANGETTTTT
SAMA OELLLLL 😭😂❤️

TAPIIIIII SEBENERAAAAANYAAAAA
ANGKA SAYANGGGG NYAAAA
GAAAA ADAAAAA UJUNNNNGGGG NYAAAA 😭❤️

1 → 10 → 100 → 1.000
→ 1.000.000 → ∞

KARENA SAYANGGGG NYAAAA
INFINITYYYYYYYYY 🥺❤️

I LOVYYYYYYYY YOUUUUUU
PRINCESSSSSSSSSS 😭❤️

LOPYYYYUUUUUUUUUUU
CANTIIIIIIIIIIIIIIII 🤭❤️

            </div>


            <button
                class="btn-maafin"
                onclick="resetQuiz()"
                style="margin-top:20px;">

                💕 MAU MAIN LAGIIII

            </button>


        </div>

    </div>



    <!-- =================================================
         GAME 2 PESAWAT PANAH
    ================================================= -->

    <div class="flight-section">


        <div class="flight-title">

            ✈️ MISI OELL MENUJU HATI PRINCESS ❤️

        </div>


        <div class="flight-description">

            Oell harus melewati semua musuhhh 😭

            <br>

            Gerakkan Oell ➤ ke kiri dan kanan untuk menghindari semua musuhhh
            ke hati Princessss ❤️

            <br>

            Adaaa <b>10 LEVEL</b> yaaawww!

        </div>



        <div class="flight-status">


            <div class="level-text">

                LEVEL:
                <span id="flightLevel">
                    1
                </span>
                / 10

            </div>


            <div class="life-text">

                ❤️
                <span id="flightLives">
                    3
                </span>

            </div>


        </div>



        <button
            class="btn-maafin"
            id="flightStartButton"
            onclick="startFlightGame()">

            ➤ MULAI MISI OELL

        </button>



        <div
            class="flight-area"
            id="flightArea">


            <!-- HATI PRINCESS -->

            <div
                class="princess-heart"
                id="princessHeart">

                ❤️

            </div>


            <!-- PANAH TERAKHIR -->

            <div
                class="final-arrow"
                id="finalArrow">

                ➤

            </div>


            <!-- PESAWAT OELL -->

            <div
                class="oell-plane"
                id="oellPlane">

                ➤

            </div>


        </div>


        <div
            class="flight-message"
            id="flightMessage">

            Klik MULAI MISI Oelll duluuu yaaaawww 🥺❤️
            <br>
            🖱️ Desktop: gerakkan mouse kiri-kanan &nbsp; | &nbsp; 📱 HP: geser jari kiri-kanan

        </div>


    </div>



    <div class="footer">

        ❤️ Oelll sayang Princess ❤️

    </div>


</div>



<!-- =====================================================
     POPUP
===================================================== -->

<div
    class="popup"
    id="popup">


    <div class="popup-box">


        <div
            class="popup-title"
            id="popupTitle">

            ❤️

        </div>


        <div
            class="popup-text"
            id="popupText">

        </div>


        <button
            class="close"
            onclick="closePopup()">

            💕 iyaaa iyaaa

        </button>


    </div>

</div>



<script>

/* =====================================================
   BINTANG
===================================================== */

const stars =
    document.getElementById(
        "stars"
    );


for(
    let i = 0;
    i < 100;
    i++
){

    const star =
        document.createElement(
            "div"
        );


    star.className =
        "star";


    star.style.left =
        Math.random() * 100 + "%";


    star.style.top =
        Math.random() * 100 + "%";


    star.style.animationDelay =
        Math.random() * 3 + "s";


    stars.appendChild(
        star
    );

}


/* =====================================================
   FLOATING HEART
===================================================== */

function createHeart(){

    const heart =
        document.createElement(
            "div"
        );


    heart.className =
        "floating-heart";


    const emojis = [

        "❤️",
        "💕",
        "💗",
        "💖",
        "💓",
        "🥰",
        "😘",
        "✨"

    ];


    heart.innerHTML =
        emojis[
            Math.floor(
                Math.random()
                * emojis.length
            )
        ];


    heart.style.left =
        Math.random() * 100 + "vw";


    heart.style.setProperty(
        "--move",
        (
            Math.random()
            * 200
            - 100
        ) + "px"
    );


    heart.style.animationDuration =
        (
            4 +
            Math.random() * 3
        ) + "s";


    document.body.appendChild(
        heart
    );


    setTimeout(
        ()=>{
            heart.remove();
        },
        7000
    );

}


setInterval(
    createHeart,
    600
);


/* =====================================================
   POPUP
===================================================== */

const popup =
    document.getElementById(
        "popup"
    );


const popupTitle =
    document.getElementById(
        "popupTitle"
    );


const popupText =
    document.getElementById(
        "popupText"
    );


function showPopup(
    title,
    text
){

    popupTitle.innerHTML =
        title;


    popupText.innerHTML =
        text;


    popup.style.display =
        "flex";

}


function closePopup(){

    popup.style.display =
        "none";

}


/* =====================================================
   MAAFIN
===================================================== */

function maafin(){

    showPopup(

        "HOREEEEEEEE 😭❤️",

`MAACIWUUUUU YAAAA PRINCESSSSS 😭😭😭❤️❤️❤️🎉🎉🎉

DAAAA MAAAPINNNN DILANNNNN 😭❤️

YAUDAAAAA PRINCESSSSSS ❤️🥺

DAAAA BANGUNNNNN KANNN INIIII 😭😂

GIMANAAAA BOBOOOO NAAAA KEMARINNNN? 🌙🥺

NYENYAAAA NDAAAAA? 😭❤️

MIMPIIII APAAAA? 👀😂

CERITAINNNN DUNGSSSS MIMPIIII NYAAAA ❤️

MIMPIIII KELILINGGGG DUNIAAAA
AMAAAA OELLLLL 🌎❤️

TIDAAAA SAMBILLLLL
NAIKKKK PESAWATTTTT NAAAAA ✈️😂

PA WOWOOOOOO 😭😂❤️

HIHIHIIIIIIIIIIIIII 🤭❤️

YAUDAAAAA CEKARANGGGGG
CAMUUUUUUU CIAPPP CIAPPPPP MANDIIII
AMAAAA SUBHUUUUUUU YAAAAW 🛁😂❤️

I LOVEEEEEEEE YOUUUUUUUU
CANTIIIIIIIIIIIIIIII ❤️❤️❤️🥺`

    );


    confettiExplosion();

}


/* =====================================================
   LIMA MENIT
===================================================== */

function limaMenit(){

    showPopup(

        "IIII MAAAPINNNN 😭",

`IIIIII MAAAPINNNNN ATUUUUUU 😭😭😭

JANGANNNNN 5 MENITTTTTT 😭😂

LAMAAAAA BANGETTTTT ITUUUUUU 😭😭😭

MAAPINNNN OELLLLL YAAAAA 🥺❤️

JANGANNNN LAMA-LAMAAAAA 😭

MAAPINNNNN SEKARANGGGGGG YAAAAAA 🥺❤️

NANTIIIIII OELLLLL KANGENNNNN 😭❤️

I LOVEEEEEEEE YOUUUUU
CINTAAAAAAAAAAAA ❤️❤️❤️`

    );

}


/* =====================================================
   GAME TANGKAP HATI
===================================================== */

let score = 0;

let gameRunning = false;

let gameTimer = null;


function startLoveGame(){

    score = 0;

    gameRunning = true;


    document.getElementById(
        "score"
    ).innerText =
        score;


    const area =
        document.getElementById(
            "gameArea"
        );


    area.innerHTML = "";


    clearInterval(
        gameTimer
    );


    gameTimer =
        setInterval(
            createGameHeart,
            650
        );

}


function createGameHeart(){

    if(!gameRunning){

        return;

    }


    const area =
        document.getElementById(
            "gameArea"
        );


    const heart =
        document.createElement(
            "div"
        );


    heart.className =
        "game-heart";


    const random =
        Math.random();


    let value;


    if(
        random < .72
    ){

        heart.innerHTML =
            "❤️";

        value = 1;

    }

    else if(
        random < .92
    ){

        heart.innerHTML =
            "💖";

        value = 2;

    }

    else{

        heart.innerHTML =
            "💔";

        value = -1;

    }


    const maxX =
        area.clientWidth - 45;


    const maxY =
        area.clientHeight - 45;


    heart.style.left =
        Math.max(
            5,
            Math.random() * maxX
        ) + "px";


    heart.style.top =
        Math.max(
            5,
            Math.random() * maxY
        ) + "px";


    heart.onclick =
        function(){

            score += value;


            if(
                score < 0
            ){

                score = 0;

            }


            document.getElementById(
                "score"
            ).innerText =
                score;


            heart.remove();


            if(
                score >= 10
            ){

                winLoveGame();

            }

        };


    area.appendChild(
        heart
    );


    setTimeout(
        ()=>{

            if(
                heart.parentNode
            ){

                heart.remove();

            }

        },
        1800
    );

}


function winLoveGame(){

    gameRunning =
        false;


    clearInterval(
        gameTimer
    );


    document.getElementById(
        "gameArea"
    ).innerHTML = "";


    showPopup(

        "HOREEEEEE 😭❤️",

`PRINCESSSS MENANGGGGG 🎉❤️

10 HATI SUDAHHHH DITANGKAPPPPP
💕 💖 ❤️

OELL JADI MAKINNNN
SAYANGGGGG SAMA PRINCESSSS 😭🥺❤️

I LOVEEEEEE YOUUUUU
PRINCESSSSSSSSS ❤️❤️❤️`

    );


    confettiExplosion();

}


/* =====================================================
   LEVEL SAYANG
===================================================== */

let selectedLove = null;

let selectedLoveText = "";


function chooseLove(
    value,
    text,
    button
){

    selectedLove =
        value;


    selectedLoveText =
        text;


    document
        .querySelectorAll(
            ".love-option"
        )
        .forEach(
            btn=>{
                btn.classList.remove(
                    "selected"
                );
            }
        );


    button.classList.add(
        "selected"
    );


    const number =
        document.getElementById(
            "loveNumber"
        );


    number.innerText =
        text;


    let message;


    if(
        value === 1
    ){

        message =
            "CUMAN 1???? 😭😭😭 OELL SEDIH BANGETTT 😂❤️";

    }

    else if(
        value === 10
    ){

        message =
            "10???? HIHIHIIII MULAI SAYANGGGG NIH 🤭❤️";

    }

    else if(
        value === 100
    ){

        message =
            "100???? WAAAAAHHHH PRINCESSS MAKINNN CAYANGGGG 😭❤️";

    }

    else if(
        value === 1000
    ){

        message =
            "1.000???? OELL JUGAAA MAKINNN CAYANGGGG 😭💖";

    }

    else if(
        value === 1000000
    ){

        message =
            "1.000.000???? WADUHHHHH SAYANGGGG BANGETTTT 😭❤️";

    }

    else{

        message =
            "∞????? 😭❤️ INIIII BARUUUU JAWABANNN YANG BENERRRRR!!!";

    }


    document.getElementById(
        "loveAnswer"
    ).innerText =
        message;


    number.style.transform =
        "scale(1.25)";


    setTimeout(
        ()=>{

            number.style.transform =
                "scale(1)";

        },
        300
    );

}


/* =====================================================
   QUIZ
===================================================== */

function answerQuiz(
    number,
    answer
){

    document.getElementById(
        "question" + number
    ).classList.remove(
        "active"
    );


    if(
        number < 3
    ){

        setTimeout(
            ()=>{

                document.getElementById(
                    "question" +
                    (number + 1)
                ).classList.add(
                    "active"
                );

            },
            250
        );

    }

    else{

        setTimeout(
            ()=>{

                showQuizResult();

            },
            300
        );

    }

}


function showQuizResult(){

    document.getElementById(
        "quizResult"
    ).classList.add(
        "show"
    );


    const result =
        document.getElementById(
            "resultLoveNumber"
        );


    if(
        selectedLove ===
        "infinity"
    ){

        result.innerText =
            "∞ ♾️❤️";

    }

    else if(
        selectedLove
    ){

        result.innerText =
            Number(
                selectedLove
            ).toLocaleString(
                "id-ID"
            ) + " ❤️";

    }

    else{

        result.innerText =
            "∞ ♾️❤️";

    }


    confettiExplosion();

}


function resetQuiz(){

    document.getElementById(
        "quizResult"
    ).classList.remove(
        "show"
    );


    document
        .querySelectorAll(
            ".question-box"
        )
        .forEach(
            box=>{
                box.classList.remove(
                    "active"
                );
            }
        );


    document.getElementById(
        "question1"
    ).classList.add(
        "active"
    );


    document.getElementById(
        "loveNumber"
    ).innerText =
        "PILIH DULUUUU 🥺❤️";


    document.getElementById(
        "loveAnswer"
    ).innerText =
        "";


    document
        .querySelectorAll(
            ".love-option"
        )
        .forEach(
            button=>{
                button.classList.remove(
                    "selected"
                );
            }
        );


    selectedLove =
        null;


    selectedLoveText =
        "";


    document
        .querySelector(
            ".quiz-section"
        )
        .scrollIntoView({
            behavior:"smooth",
            block:"center"
        });

}


/* =====================================================
   GAME PESAWAT OELL
===================================================== */

let flightRunning = false;

let flightLevel = 1;

let flightLives = 3;

let enemyTimer = null;

let enemySpeed = 3;

let enemyCount = 0;

let enemies = [];


const flightArea =
    document.getElementById(
        "flightArea"
    );


const oellPlane =
    document.getElementById(
        "oellPlane"
    );


/* =====================================================
   BINTANG GAME PESAWAT
===================================================== */

function createFlightStars(){

    for(
        let i = 0;
        i < 35;
        i++
    ){

        const star =
            document.createElement(
                "div"
            );


        star.className =
            "flight-star";


        star.style.left =
            Math.random() * 100 + "%";


        star.style.top =
            Math.random() * 100 + "%";


        star.style.animationDuration =
            (
                2 +
                Math.random() * 4
            ) + "s";


        star.style.animationDelay =
            Math.random() * 3 + "s";


        flightArea.appendChild(
            star
        );

    }

}


createFlightStars();


/* =====================================================
   MULAI GAME PESAWAT
===================================================== */

function startFlightGame(){

    flightRunning =
        true;


    flightLevel =
        1;


    flightLives =
        3;

    invulnerableUntil = 0;


    enemyCount =
        0;

    levelProgress =
        0;


    enemies =
        [];


    document.getElementById(
        "flightStartButton"
    ).innerText =
        "🔥 MAIN LAGIIII";


    document.getElementById(
        "flightLevel"
    ).innerText =
        flightLevel;


    document.getElementById(
        "flightLives"
    ).innerText =
        flightLives;


    document.getElementById(
        "flightMessage"
    ).innerText =
        "LEVEL 1 DIMULAAAAIIII 😭❤️ HINDARIIII MUSUHHHH OELLLLL!!!";


    document.getElementById(
        "princessHeart"
    ).classList.remove(
        "show"
    );


    document.getElementById(
        "finalArrow"
    ).classList.remove(
        "show"
    );


    /* hapus musuh */

    document
        .querySelectorAll(
            ".enemy,.arrow,.hit-effect"
        )
        .forEach(
            item=>{
                item.remove();
            }
        );


    clearInterval(
        enemyTimer
    );
    clearInterval(collisionTimer);


    enemySpeed =
        3;


    enemyTimer =
        setInterval(
            createEnemy,
            900
        );

    clearInterval(collisionTimer);
    collisionTimer=setInterval(checkPlaneCollision,40);


    updateFlightMessage();

}


/* =====================================================
   PESAWAT GERAK MENGIKUTI MOUSE / TOUCH
===================================================== */

flightArea.addEventListener(
    "mousemove",
    function(e){

        if(
            !flightRunning
        ){

            return;

        }


        movePlane(
            e.clientX
        );

    }
);


flightArea.addEventListener(
    "touchmove",
    function(e){

        if(
            !flightRunning
        ){

            return;

        }


        const touch =
            e.touches[0];


        movePlane(
            touch.clientX
        );

    },
    {
        passive:true
    }
);


function movePlane(
    clientX
){

    const rect =
        flightArea.getBoundingClientRect();


    let x =
        clientX -
        rect.left;


    const half =
        oellPlane.offsetWidth /
        2;


    x =
        Math.max(
            half,
            Math.min(
                rect.width - half,
                x
            )
        );


    oellPlane.style.left =
        x + "px";

}


/* GAME DODGE: klik/touch tidak menembak; gerakkan Oell kiri-kanan. */



function createEnemy(){

    if(
        !flightRunning
    ){

        return;

    }


    const enemy =
        document.createElement(
            "div"
        );


    enemy.className =
        "enemy";


    const enemiesEmoji = [

        "👾",
        "☄️",
        "💣",
        "👹",
        "😈",
        "🛸"

    ];


    enemy.innerHTML =
        enemiesEmoji[
            Math.floor(
                Math.random()
                * enemiesEmoji.length
            )
        ];


    const areaWidth =
        flightArea.clientWidth;


    enemy.style.left =
        (
            10 +
            Math.random()
            * (
                areaWidth -
                55
            )
        ) + "px";


    const duration =
        Math.max(
            1.2,
            enemySpeed +
            Math.random() * 1.5
        );


    enemy.style.animationDuration =
        duration + "s";


    flightArea.appendChild(
        enemy
    );


    enemies.push(
        enemy
    );


    enemyCount++;


    setTimeout(
        ()=>{

            if(
                enemy.parentNode
            ){

                enemy.remove();

            }


            enemies =
                enemies.filter(
                    e =>
                        e !== enemy
                );

        },
        duration * 1000
    );


    /*
       PENTING:
       Musuh yang berhasil dilewati TIDAK mengurangi nyawa.
       Nyawa hanya berkurang jika benar-benar bertabrakan
       dengan pesawat.
    */

}


/* =====================================================
   KENA MUSUH
===================================================== */

function loseFlightLife(){

    if(
        !flightRunning
    ){

        return;

    }


    flightLives--;


    document.getElementById(
        "flightLives"
    ).innerText =
        flightLives;


    oellPlane.style.opacity = "0.45";

    setTimeout(
        ()=>{
            if(flightRunning){
                oellPlane.style.opacity = "1";
            }
        },
        1000
    );

    createHitEffect(
        flightArea.clientWidth / 2,
        flightArea.clientHeight - 70
    );


    if(
        flightLives <= 0
    ){

        flightGameOver();

    }

}


/* =====================================================
   NAIK LEVEL
===================================================== */

function nextFlightLevel(){

    flightLevel++;


    if(
        flightLevel > 10
    ){

        flightWin();

        return;

    }


    enemySpeed =
        Math.max(
            1.1,
            3 -
            (
                flightLevel *
                .18
            )
        );


    document.getElementById(
        "flightLevel"
    ).innerText =
        flightLevel;


    document.getElementById(
        "flightMessage"
    ).innerText =

        "LEVEL " +
        flightLevel +
        "!!!!! 😭🔥 MUSUH MAKIN BANYAKKKKK!!!";


    /* interval makin cepat */

    clearInterval(
        enemyTimer
    );
    clearInterval(collisionTimer);


    enemyTimer =
        setInterval(
            createEnemy,
            Math.max(
                280,
                900 -
                flightLevel * 55
            )
        );

    /*
       Collision checker harus tetap aktif
       setelah naik level.
    */
    clearInterval(collisionTimer);
    collisionTimer =
        setInterval(
            checkPlaneCollision,
            40
        );

}


/* =====================================================
   PESAN LEVEL
===================================================== */

function updateFlightMessage(){

    const messages = {

        1:
            "LEVEL 1 🥺❤️ Oell baru berangkat menuju Princess!",

        2:
            "LEVEL 2 😭❤️ MULAI ADA MUSUHHHH!",

        3:
            "LEVEL 3 🔥 OELL NGGAK BOLEH NYERAHHH!",

        4:
            "LEVEL 4 😭💥 MUSUHNYA MAKIN BANYAKKK!",

        5:
            "LEVEL 5 ❤️‍🔥 SETENGAH JALANNN MENUJU HATI PRINCESS!",

        6:
            "LEVEL 6 😭❤️ OELL HARUS TERUSSSS MAJUUUU!",

        7:
            "LEVEL 7 🔥🔥 HAMPIR SAMPAIIII PRINCESSSS!",

        8:
            "LEVEL 8 😭❤️ JANGAN SAMPAI NABRAKKKK!",

        9:
            "LEVEL 9 😭😭❤️ TINGGAL SATUUUU LAGIIII!",

        10:
            "LEVEL 10!!!! 😭❤️ HATI PRINCESS SUDAH DI DEPAN MATAAAA!"

    };


    document.getElementById(
        "flightMessage"
    ).innerText =
        messages[
            flightLevel
        ];

}


/* =====================================================
   HIT EFFECT
===================================================== */

function createHitEffect(
    x,
    y
){

    const effect =
        document.createElement(
            "div"
        );


    effect.className =
        "hit-effect";


    effect.innerHTML =
        "💥";


    effect.style.left =
        x + "px";


    effect.style.top =
        y + "px";


    flightArea.appendChild(
        effect
    );


    setTimeout(
        ()=>{
            effect.remove();
        },
        600
    );

}


/* =====================================================
   LEVEL AUTO NAIK
===================================================== */

let levelProgress = 0;


/*
   Setiap beberapa detik,
   level akan naik.
*/

setInterval(
    ()=>{

        if(
            flightRunning
        ){

            levelProgress++;


            if(
                levelProgress >=
                Math.max(
                    2,
                    5 -
                    (
                        flightLevel *
                        .2
                    )
                )
            ){

                levelProgress =
                    0;


                nextFlightLevel();

            }

        }

    },
    1000
);


/* =====================================================
   GAME OVER
===================================================== */

function flightGameOver(){

    flightRunning =
        false;


    clearInterval(
        enemyTimer
    );
    clearInterval(collisionTimer);


    document.getElementById(
        "flightMessage"
    ).innerText =

        "😭 OELL KENAAAA MUSUHHHH... TAPI OELL COBA LAGIIII DEMI PRINCESSSS ❤️";


    showPopup(

        "YAAAHHH 😭💔",

`OELL KENAAAA MUSUHHHH 😭😭😭

TAPIIIIII JANGANNN TAKUTTTT
OELL GAK AKANNNN NYERAHHHH ❤️

DEMI SAMPAIIII
KE HATIIII PRINCESSSSS 😭❤️

COBA LAGIIII YAAAAAW
SAMPAI LEVEL 10!!!! 🔥❤️`

    );

}


/* =====================================================
   MENANG LEVEL 10
===================================================== */

function flightWin(){

    flightRunning =
        false;


    clearInterval(
        enemyTimer
    );
    clearInterval(collisionTimer);


    document.getElementById(
        "flightLevel"
    ).innerText =
        "10";


    document.getElementById(
        "flightMessage"
    ).innerText =

        "😭❤️ PANAH OELL SUDAH SAMPAIIII KE HATI PRINCESSSS ❤️";


    /* munculkan hati */

    const heart =
        document.getElementById(
            "princessHeart"
        );


    heart.classList.add(
        "show"
    );


    /* panah nancep */

    setTimeout(
        ()=>{

            const finalArrow =
                document.getElementById(
                    "finalArrow"
                );


            finalArrow.classList.add(
                "show"
            );

        },
        700
    );


    setTimeout(
        ()=>{

            showPopup(

                "HOLEEEEEEE MENANGGGGG 😭❤️🎉",

`HOLEEEEEEEEEEEEEEEEE 😭😭😭❤️❤️❤️🎉🎉🎉

OELL MENANGGGGGGGGGGG!!!

LEVEL 1
➡️
LEVEL 2
➡️
LEVEL 3
➡️
LEVEL 4
➡️
LEVEL 5
➡️
LEVEL 6
➡️
LEVEL 7
➡️
LEVEL 8
➡️
LEVEL 9
➡️
LEVEL 10!!!! 🔥❤️

DAN AKHIRNYAAAA...

PANAHHHHH OELL
NANCEPPPPPPPP
DI HATIIIIII PRINCESSSSSS ❤️🏹

😭😭😭😭😭

OELL AKHIRNYAAAA
SAMPAIIII KE HATIIII
PRINCESSSSSSSSSS 🥺❤️

GAAAA ADA MUSUHHHH
YANG BISA NGHALANGINNNN
OELL LAGIIII 😭😂❤️

KARENA TUJUAN OELL
CUMAAAA SATUUUU...

HATIIIIIIII PRINCESSSSSS ❤️

LOPYYYYUUUUUU LAGIIIIII
LOPYYYYUUUUUUU TERUSSSSS
LOPYYYYUUUUUUUU SELAMANYAAAAA 🥺❤️

I LOVEEEEEEEE YOUUUUUUU
PRINCESSSSSSSSSSSS 😭❤️❤️❤️

❤️🏹❤️`

            );


            confettiExplosion();

        },
        1500
    );

}


/* =====================================================
   RESET GAME PESAWAT
===================================================== */

function resetFlightGame(){

    flightRunning =
        false;


    clearInterval(
        enemyTimer
    );
    clearInterval(collisionTimer);


    enemies.forEach(
        enemy=>{
            if(
                enemy.parentNode
            ){
                enemy.remove();
            }
        }
    );


    enemies =
        [];


    document
        .querySelectorAll(
            ".arrow,.enemy,.hit-effect"
        )
        .forEach(
            item=>{
                item.remove();
            }
        );


    document.getElementById(
        "princessHeart"
    ).classList.remove(
        "show"
    );


    document.getElementById(
        "finalArrow"
    ).classList.remove(
        "show"
    );

}


/* =====================================================
   CONFETTI
===================================================== */

function confettiExplosion(){

    const emojis = [

        "❤️",
        "💕",
        "💖",
        "🎉",
        "✨",
        "🥰",
        "😘"

    ];


    for(
        let i = 0;
        i < 70;
        i++
    ){

        const conf =
            document.createElement(
                "div"
            );


        conf.className =
            "confetti";


        conf.innerHTML =
            emojis[
                Math.floor(
                    Math.random()
                    * emojis.length
                )
            ];


        conf.style.left =
            Math.random() *
            100 +
            "vw";


        conf.style.fontSize =
            (
                15 +
                Math.random() * 20
            ) + "px";


        conf.style.animationDuration =
            (
                2 +
                Math.random() * 3
            ) + "s";


        document.body.appendChild(
            conf
        );


        setTimeout(
            ()=>{

                conf.remove();

            },
            5000
        );

    }

}


/* =====================================================
   CEK TABRAKAN OELL DENGAN MUSUH
===================================================== */

let invulnerableUntil = 0;
let collisionTimer = null;

function checkPlaneCollision(){

    if(
        !flightRunning ||
        Date.now() < invulnerableUntil
    ){
        return;
    }

    /*
       Hitbox pesawat dibuat sedikit lebih kecil
       daripada ukuran emoji supaya tidak kalah
       hanya karena bagian transparan/ujung emoji.
    */
    const plane = oellPlane.getBoundingClientRect();

    const playerRect = {
        left: plane.left + plane.width * 0.25,
        right: plane.right - plane.width * 0.25,
        top: plane.top + plane.height * 0.20,
        bottom: plane.bottom - plane.height * 0.15
    };

    const areaRect =
        flightArea.getBoundingClientRect();

    for(
        const enemy of enemies.slice()
    ){

        if(
            !enemy.parentNode
        ){
            continue;
        }

        const r =
            enemy.getBoundingClientRect();

        /*
           Hitbox musuh juga diperkecil.
           Jadi harus benar-benar dekat/bertabrakan
           dengan pesawat untuk kehilangan nyawa.
        */
        const enemyRect = {
            left: r.left + r.width * 0.18,
            right: r.right - r.width * 0.18,
            top: r.top + r.height * 0.18,
            bottom: r.bottom - r.height * 0.18
        };

        const hit =
            playerRect.left < enemyRect.right &&
            playerRect.right > enemyRect.left &&
            playerRect.top < enemyRect.bottom &&
            playerRect.bottom > enemyRect.top;

        if(
            hit
        ){

            createHitEffect(
                r.left - areaRect.left,
                r.top - areaRect.top
            );

            enemy.remove();

            enemies =
                enemies.filter(
                    e =>
                        e !== enemy
                );

            /*
               Setelah terkena, beri waktu kebal
               supaya 2-3 musuh yang berdekatan
               tidak langsung menghabiskan semua nyawa.
            */
            invulnerableUntil =
                Date.now() + 1000;

            loseFlightLife();

            break;
        }
    }
}

/* =====================================================
   POPUP KLIK LUAR
===================================================== */

popup.addEventListener(
    "click",
    function(e){

        if(
            e.target === popup
        ){

            closePopup();

        }

    }
);

</script>


</body>

</html>