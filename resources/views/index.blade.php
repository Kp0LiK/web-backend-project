<!DOCTYPE html>
<html lang="en" lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airo</title>
    <link rel="stylesheet" href="{{asset('/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/media.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
</head>

<body>
    <header>
        @guest
        <div id="logo" onclick="slowScroll('#top')">
            <img src="images/шай-removebg-preview.png" alt="">
        </div>
        <div class="header_btn">
            <span class="icon-bars"></span>
        </div>

        <div id="about">
            <a href="#" onclick="slowScroll('#top')" title="Главная">@lang('main.head')</a>
            <a href="#" onclick="slowScroll('#kinds')" title="Чай">@lang('main.menu')</a>
            <a href="#" onclick="slowScroll('#teawith')" title="Чай с дядей Айро">@lang('main.tea with')</a>
            <a href="#" onclick="slowScroll('#contacts')" title="Контакты">@lang('main.contacts')</a>
            <a href="#" onclick="slowScroll('#faq')" title="О нас">@lang('main.about us')</a>
            <a href="ru">Ru</a>
            <a href="en">En</a>
            <!--<a href="kz">Kz</a>-->
        </div>
        @endguest

        
    </header>

    <div id="top">
        <img src="images/welcome-removebg-preview.png">
        <p class="text"><b>@lang('main.text1')</b></p>
        <p class="text"><b>@lang('main.text2')</b></p>
        <p class="text"><b>@lang('main.text3')</b></p>
        <p class="text"><b>@lang('main.text4')</b></p>
        <p class="text"><b class="airo">— @lang('main.uncle airo')</b></p>
    </div>

    <div id="kinds">
        <div class="kind_cont">
            <h2 class="title">@lang('main.menu')</h2>
            <h4 class="subtitle">@lang('main.subtitle')</h4>
        </div>

        <div class="raw">
            <div class="call_md_3">
                <div class="card">
                    <div class="card_image">
                        <img style="width: 280px;" src="images/Чай.png" alt="product">
                    </div>
                    <div class="card_title">@lang('main.tea')</div>
                    <div class="card_price">
                        <span>$2.99</span>
                        $1.99
                    </div>
                </div>
            </div>

            <div class="call_md_3">
                <div class="card">
                    <div class="card_image">
                        <img style="width: 220px;" src="images/Кофе.png" alt="product">
                    </div>
                    <div class="card_title">@lang('main.coffee')</div>
                    <div class="card_price">
                        <span>$3.55</span>
                        $3.00
                    </div>
                </div>
            </div>

            <div class="call_md_3">
                <div class="card">
                    <div class="card_image">
                        <img style="width: 240px;" src="images/Сладости.png" alt="product">
                    </div>
                    <div class="card_title">@lang('main.sweets')</div>
                    <div class="card_price">
                        <span>$5.00</span>
                        $3.99
                    </div>
                </div>
            </div>

            <div class="call_md_3">
                <div class="card">
                    <div class="card_image">
                        <img style="width: 180px;" src="images/Подарки1.png" alt="product">
                    </div>
                    <div class="card_title">@lang('main.souvenirs')</div>
                    <div class="card_price">
                        <span>$9.99</span>
                        $7.5
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    
    <div id="teawith">
        <section class="slider">
            <div class="container">
                <div class="slider__inner">
                    <div class="slider__item">
                        <div class="slider__item-content">
                            <div class="slider__title">
                            @lang('main.tea with')
                            </div>
                            <div class="slider__text">
                            @lang('main.slider_text')
                            </div>
                            <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn">
                            @lang('main.slider_btn')
                            </a>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-content">
                        <div class="slider__title">
                            @lang('main.tea with')
                            </div>
                            <div class="slider__text">
                            @lang('main.slider_text')
                            </div>
                            <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn">
                            @lang('main.slider_btn')
                            </a>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-content">
                        <div class="slider__title">
                            @lang('main.tea with')
                            </div>
                            <div class="slider__text">
                            @lang('main.slider_text')
                            </div>
                            <a data-fancybox data-src="#modal" href="javascript:;" class="slider__btn">
                            @lang('main.slider_btn')
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </div>

    <div id="contacts">
        <center>
            <h5>@lang('main.feedback')</h5>
        </center>
        <form id="form_input">
            <label for="name">@lang('main.name') <span>*</span></label><br>
            <input type="text" placeholder="@lang('main.pl_name')" name="name" id="name"><br>
            <label for="email">@lang('main.mail') <span>*</span></label><br>
            <input type="email" placeholder="@lang('main.pl_mail')" name="email" id="email"><br>
            <label for="message">@lang('main.message') <span>*</span></label><br>
            <textarea placeholder="@lang('main.pl_msg')" name="message" id="message"></textarea><br>
            <input type="submit" class="btn" value="@lang('main.send')">
            
        </form>
    </div>

    <div id="faq">
        <div>
            <span class="title">@lang('main.payment')</span><br>
            <span class="heading">@lang('main.payment1')</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto eum possimus optio aut quia
                quibusdam, ipsa vel, earum magni distinctio corporis deleniti minima quis minus nulla reiciendis eveniet
                soluta? Vel!</p>
            <span class="title">@lang('main.fact')</span><br>
            <span class="heading">@lang('main.fact1')</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ut reiciendis veritatis ducimus officia
                praesentium nisi dolor rerum, fugit modi? Molestias, quia pariatur maxime quidem dolorum minus ea qui
                nobis!</p>
        </div>
        <div>
            <span class="title">@lang('main.service')</span><br>
            <span class="heading">@lang('main.service1')</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta cum quasi, praesentium repellat
                exercitationem consectetur natus fuga adipisci saepe, iusto qui voluptatum voluptas nam perferendis
                placeat quia necessitatibus. Voluptates, distinctio?</p>
            <span class="title">@lang('main.live airo')</span><br>
            <span class="heading">@lang('main.live1')</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quam ipsum reprehenderit tenetur
                obcaecati eligendi animi, dignissimos eius perferendis eos porro pariatur itaque dolorem nihil
                voluptatum necessitatibus, repellat nesciunt aut!</p>
        </div>
        <div>
            <span class="title">@lang('main.discount')</span><br>
            <span class="heading">@lang('main.discount1')</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum porro recusandae eaque laboriosam culpa
                dolores neque error nobis quidem! Vero dignissimos consequatur itaque sed officia. Numquam accusamus
                explicabo veniam provident.</p>
            <span class="title">@lang('main.other')</span><br>
            <span class="heading">@lang('main.other1')</span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur delectus vel illo expedita
                praesentium eius nemo nostrum dolore dolorum assumenda qui iste, impedit, natus distinctio molestias
                temporibus blanditiis fuga non.</p>
        </div>
    </div>

    <footer class="footer">
        <div class="footer__content">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__info">
                        <div class="footer__title">
                        @lang('main.foot_title')
                        </div>
                        <div class="footer__text">
                        @lang('main.foot_text')
                        </div>
                        <ul class="footer__list">
                            <li><a class="footer__phone" href="tel:+77714648995">+7 771 464 89 95</a></li>
                            <li><a href="#">190103175@stu.sdu.edu.kz</a></li>
                            <li><a class="footer__adress" href="#">просп. Абылай Хана, 1/1, Каскелен</a></li>
                        </ul>
                    </div>
                    <div class="footer__map">
                        <iframe height="250px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11301.505954318725!2d76.66007988549919!3d43.20600203880941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38834f7675d8a6c3%3A0x7b7d14aec270c056!2z0KPQvdC40LLQtdGA0YHQuNGC0LXRgiDQodGD0LvQtdC50LzQsNC9INCU0LXQvNC40YDQtdC70Y8!5e0!3m2!1sru!2skz!4v1604263173012!5m2!1sru!2skz"
                            frameborder="0" style="border:0;" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            <div class="container">
                <div class="copy__text">
                    @lang('main.template')
                </div>
            </div>
        </div>
    </footer>

    <div id="modal">
      <form action="" method="POST">
      <input type="text" name="user_name" placeholder="@lang('main.pl_name')">
      <input type="tel" name="user_phone" placeholder="@lang('main.pl_phone')">
      <input type="submit" value="@lang('main.send')">
    </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{('/js/slick.min.js')}}"></script>
    <script src="форма обратной связи/contactform.js"></script>
    <script type="text/javascript" src="{{asset('/js/script.js')}}"></script>
    
</body>

</html>