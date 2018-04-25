@extends('frontend.layouts.master')
@section('content')

<section class="banner bg-full overlay" style="background-image: url(images/img01.jpg);" data-scroll-index="0">
  <div class="caption">
    <!-- <div id="defaultCountdown" class="comming-timer"></div> -->
    <h1 class="text-uppercase">Профессиональная организация и оформление мероприятий под ключ!</h1>
    <p>Экономия бюджета до 30%, за счет собственного продюсерского центра и отдела по оформлению; закупа напитков у производителя и услуг артистов без переплаты</p>
    <span class="video-icon text-uppercase text-center">
      <a href="home.html#" class="icofont icofont-play-alt-2"></a>
      Смотрите Наши видео
    </span>
  </div>
</section>


<div class="info-holder container">
  <div class="row">
    <div class="col-xs-12 col-sm-3">
      <div class="col md-round">
        <span class="icofont icofont-clock-time"></span>
        <span class="border">/</span>
        <div class="align-right">
          <strong class="text-uppercase">Дата</strong>
          <time datetime="2017-03-02 20:00" class="date">12 июля 2018 года</time>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-3">
      <div class="col md-round">
        <span class="icofont icofont-location-pin"></span>
        <span class="border">/</span>
        <div class="align-right">
          <strong class="text-uppercase">Место</strong>
          <address class="address">Мега,Шымкент</address>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-3">
      <div class="col md-round">
        <span class="icofont icofont-chair"></span>
        <span class="border">/</span>
        <div class="align-right">
          <strong class="text-uppercase">Количество</strong>
          <span class="date">60 человек</span>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-3">
      <div class="col md-round">
        <span class="icofont icofont-record"></span>
        <span class="border">/</span>
        <div class="align-right">
          <strong class="text-uppercase">Ведущий</strong>
          <span class="date">12 Специалист</span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="abt-holder" data-scroll-index="1">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="holder">
          <!-- tabset of the page -->
          <ul class="tabset list-unstyled text-center text-uppercase">
            <li><a href="home.html#tab1">О мероприятии</a></li>
            <li><a href="home.html#tab2" class="active">что вы узнаете</a></li>
          </ul>
          <!-- tabset of the page end -->
          <!-- tab content of the page -->
          <div class="tab-content">
            <div id="tab1">
              <!-- topic list of the page -->
              <ul class="list-unstyled topic-list">
                <li>
                  <span class="icon text-center md-round"><i class="icofont icofont-ui-note"></i></span>
                  <div class="txt-holder">
                    <h2 class="heading text-uppercase">Менеджеры с опытом от 10 лет</h2>
                    <p>Наши менеджеры профессионалы своего дела. Они организовали на отлично большое количество торжеств и знают своё дело.</p>
                  </div>
                </li>
                <li>
                  <span class="icon text-center md-round"><i class="icofont icofont-fountain-pen"></i></span>
                  <div class="txt-holder">
                    <h2 class="heading text-uppercase">Индивидуальный сценарий мероприятия</h2>
                    <p>Самые разнообразные и сумасшедшие идеи для Вашего мероприятия мы воплотим в жизнь по Вашему желанию.</p>
                  </div>
                </li>
                <li>
                  <span class="icon text-center md-round"><i class="icofont icofont-social-envato"></i></span>
                  <div class="txt-holder">
                    <h2 class="heading text-uppercase">Надежные и проверенные годами поставщики</h2>
                    <p>На рынке event-услуг большое количество непрофессионалов. Мы работаем только с проверенными поставщиками, которые зарекомендовали себя в течение нескольких лет сотрудничества с нами.</p>
                  </div>
                </li>
              </ul>
              <!-- topic list of the page end -->
            </div>
            <div id="tab2">
              <!-- topic list of the page -->
              <ul class="list-unstyled topic-list">
                <li>
                  <span class="icon text-center md-round"><i class="icofont icofont-fountain-pen"></i></span>
                  <div class="txt-holder">
                    <h2 class="heading text-uppercase">Предпраздничные репетиции</h2>
                    <p>День мероприятия достаточно насыщен различными событиями. Чтобы Вы были уверены, что все пройдет гладко и как и задумано, мы проводим репетиции накануне торжества.</p>
                  </div>
                </li>
                <li>
                  <span class="icon text-center md-round"><i class="icofont icofont-ui-note"></i></span>
                  <div class="txt-holder">
                    <h2 class="heading text-uppercase">Личный менеджер</h2>
                    <p>В день Вашего мероприятия мы предоставляем личного менеджера. Он будет решать любые возникающие сложности от булавки до доставки гостей.</p>
                  </div>
                </li>
                <li>
                  <span class="icon text-center md-round"><i class="icofont icofont-social-envato"></i></span>
                  <div class="txt-holder">
                    <h2 class="heading text-uppercase">Профессиональная организация мероприятий под ключ</h2>
                    <p>Для того, чтобы день торжества запомнился только яркими воспоминаниями, мы берем на себя решение всех возникающих вопросов и задач.</p>
                  </div>
                </li>
              </ul>
              <!-- topic list of the page end -->
            </div>
          </div>
          <!-- tab content of the page end -->
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="img-holder">
          <img src="images/img02.jpg" alt="image description" class="img-responsive">
        </div>
      </div>
    </div>
  </div>
</div>

<div data-scroll-index="2">
  <!-- speaker sec of the page -->
  <section class="speaker-sec container">
    <div class="row">
      <header class="col-xs-12 header">
        <span class="title">встреча с нашим ведущим</span>
        <h3 class="heading2 text-uppercase">Опытныу ведущие</h3>
      </header>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <!-- speaker slider of the page -->
        <div class="speaker-slider">
          <!-- slide of the page -->
          <div class="slide">
            <div class="col">
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img03.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Jonathon Doe</a></h4>
                  <span class="skill">UX Designer</span>
                  <strong class="topic">Topic:  Design for Human</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img06.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Jennifer Jones</a></h4>
                  <span class="skill">Project Manager</span>
                  <strong class="topic">Topic:  How to handle clients</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
            </div>
            <div class="col">
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img04.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Jenny Duren</a></h4>
                  <span class="skill">Product Designer</span>
                  <strong class="topic">Topic:  Before you design.</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img07.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">martin Baron</a></h4>
                  <span class="skill">Product Designer</span>
                  <strong class="topic">Topic:  Think before design</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
            </div>
            <div class="col">
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img05.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">David Ramon</a></h4>
                  <span class="skill">UI Designer</span>
                  <strong class="topic">Topic:  How to design UI</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img08.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Merry Stone</a></h4>
                  <span class="skill">Graphic Designer</span>
                  <strong class="topic">Topic:  Secrets of Print Design</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
            </div>
          </div>
          <!-- slide of the page end -->
          <!-- slide of the page -->
          <div class="slide">
            <div class="col">
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img03.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Jonathon Doe</a></h4>
                  <span class="skill">UX Designer</span>
                  <strong class="topic">Topic:  Design for Human</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img06.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Jennifer Jones</a></h4>
                  <span class="skill">Project Manager</span>
                  <strong class="topic">Topic:  How to handle clients</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
            </div>
            <div class="col">
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img04.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Jenny Duren</a></h4>
                  <span class="skill">Дизайнер продуктов</span>
                  <strong class="topic">Тема: Перед тем, как проектировать.</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img07.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">martin Baron</a></h4>
                  <span class="skill">Дизайнер продуктов</span>
                  <strong class="topic">Тема: Подумайте перед дизайном</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
            </div>
            <div class="col">
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img05.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">David Ramon</a></h4>
                  <span class="skill">Пользовательский интерфейс</span>
                  <strong class="topic">Тема: Как создать интерфейс</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img08.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Merry Stone</a></h4>
                  <span class="skill">Графический дизайнер</span>
                  <strong class="topic">Тема: Секреты дизайна</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
            </div>
          </div>
          <!-- slide of the page end -->
          <!-- slide of the page -->
          <div class="slide">
            <div class="col">
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img03.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Jonathon Doe</a></h4>
                  <span class="skill">Дизайнер UX</span>
                  <strong class="topic">Тема: Дизайн для человека</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img06.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Jennifer Jones</a></h4>
                  <span class="skill">Менеджер проекта</span>
                  <strong class="topic">Тема: Как обращаться с клиентами</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
            </div>
            <div class="col">
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img04.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Jenny Duren</a></h4>
                  <span class="skill">Product Designer</span>
                  <strong class="topic">Тема: Перед тем, как проектировать.</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img07.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">martin Baron</a></h4>
                  <span class="skill">Дизайнер продуктов</span>
                  <strong class="topic">Тема: Подумайте перед дизайном</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
            </div>
            <div class="col">
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img05.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">David Ramon</a></h4>
                  <span class="skill">Пользовательский интерфейс</span>
                  <strong class="topic">Тема: Как создать интерфейс</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <a href="home.html#"><img src="images/img08.png" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase"><a href="home.html#">Merry Stone</a></h4>
                  <span class="skill">Графический дизайнер</span>
                  <strong class="topic">Тема: Секреты дизайна</strong>
                </div>
              </div>
              <!-- speaker col of the page end -->
            </div>
          </div>
          <!-- slide of the page end -->
        </div>
        <!-- speaker slider of the page end -->
      </div>
    </div>
  </section>

  <div class="cta-sec bg-full overlay" style="background-image: url(images/img09.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5">
          <span class="title">Хотите узнать больше о дизайне?</span>
          <p>Оформим помещение, изготовим декорации, сошьем костюмы. Флористика. Декорирование тканями.Пригласим звезд. Звезды российской и зарубежной эстрады.Подберем и арендуем зал, ресторан, лимузин.Подготовим развлекательную программу с оригинальным сценарием.</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-5">
          <div class="video-holder text-center text-uppercase">
            <a href="home.html#" class="video"><i class="icofont icofont-ui-play"></i>  Смотрите наши видео</a>
            <div class="arrow-img" style="background-image: url(images/arrow.png);"></div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
          <a href="home.html#" class="btn-primary md-round text-uppercase"><i class="icofont icofont-chair md-round text-center"></i> Book a Seat</a>
        </div>
      </div>
    </div>
  </div>
</div>

<div data-scroll-index="3">
  <section class="schedule-sec container">
    <div class="row">
      <header class="col-xs-12 header">
        <span class="title">узнайте о нашем графике</span>
        <h3 class="heading2 text-uppercase">РАСПИСАНИЕ СОБЫТИЙ</h3>
      </header>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <!-- schedule holder of the page -->
        <div class="schedule-holder bg-full overlay md-round" style="background-image: url(images/img10.jpg);">
          <!-- schedule tab of the page -->
          <ul class="list-unstyled schedule-tab">
            <li>
              <a href="home.html#tab3" class="md-round">
                <span class="day text-uppercase">День 1</span>
                <time datetime="2017-02-03 20:00" class="time text-uppercase">9:20 am - 6:30 pm</time>
              </a>
            </li>
            <li>
              <a href="home.html#tab4" class="md-round">
                <span class="day text-uppercase">День 2</span>
                <time datetime="2017-02-03 20:00" class="time text-uppercase">9:20 am - 6:30 pm</time>
              </a>
            </li>
            <li>
              <a href="home.html#tab5" class="md-round active">
                <span class="day text-uppercase">День 3</span>
                <time datetime="2017-02-03 20:00" class="time text-uppercase">9:20 am - 6:30 pm</time>
              </a>
            </li>
            <li>
              <a href="home.html#tab6" class="md-round">
                <span class="day text-uppercase">День 4</span>
                <time datetime="2017-02-03 20:00" class="time text-uppercase">9:20 am - 6:30 pm</time>
              </a>
            </li>
          </ul>
          <!-- schedule tab of the page -->
          <!-- tab content of the page -->
          <div class="tab-content md-round">
            <div id="tab3">
              <!-- time tab of the page -->
              <ul class="list-unstyled time-tab text-uppercase">
                <li><a href="home.html#tab7">9:20 am - 11:00 am</a></li>
                <li><a href="home.html#tab8" class="active">11:20 am - 1:00 pm</a></li>
                <li><a href="home.html#tab9">перерыв</a></li>
                <li><a href="home.html#tab10">3:00 pm - 4:20 pm</a></li>
                <li><a href="home.html#tab11">5:00 pm - 6:30 pm</a></li>
              </ul>
              <!-- time tab of the page end -->
              <!-- tab content of the page -->
              <div class="tab-content content2">
                <div id="tab7">
                  <div class="img-holder">
                    <img src="images/img11.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Шоу балет</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Алматы #3</a></li>
                    </ul>
                    <p>Высочайшее мастерство танцоров балета «Сейшн» было отмечено также на престижных международных конкурсах: «Гордость Балтики» (Гран-при), «Минута славы» на Первом (полуфинал). Национальный танец «Кустар» в постановке этого коллектива внесён в перечень шедевров мирового искусства ЮНЕСКО.</p>
                  </div>
                </div>
                <div id="tab8">
                  <div class="img-holder">
                    <img src="images/img13.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Вокальные проекты</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Предлагаем Вам неизменно живое исполнение и великолепный вокал одних из лучших эстрадных певиц Казахстана: Анастасии Зиберевой, Натали Янковских и Ксении Николаевой.Они такие разные, но общее у них одно - вы не сможете усидеть на месте! Почему? Потому что вокал для них не профессия, вокал для них жизнь. Они не работают, они дышат сценой и, очень тонко чувствуя настроение зрителя, отдают себя ему без остатка.</p>
                  </div>
                </div>
                <div id="tab9">
                  <div class="img-holder">
                    <img src="images/img11.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Встреча гостей</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Театр начинается с вешалки, а праздник - со встречи гостей и, от того какой будет задан тон в начале торжества, зависит настроение гостей в течение всего вечера. Наш штат артистов легко и непринуждённо поможет организовать встречу ваших гостей, занять их время, сделать уникальный перформас.</p>
                  </div>
                </div>
                <div id="tab10">
                  <div class="img-holder">
                    <img src="images/img13.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">3D шоу</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Арт-балет "Сейшн" представляет уникальную программу"О К Е А Н"</p>
                  </div>
                </div>
              </div>
              <!-- tab content of the page end -->
            </div>
            <div id="tab4">
              <!-- time tab of the page -->
              <ul class="list-unstyled time-tab text-uppercase">
                <li><a href="home.html#tab12" class="active">11:20 am - 1:00 pm</a></li>
                <li><a href="home.html#tab13">3:00 pm - 4:20 pm</a></li>
                <li><a href="home.html#tab14">перерыв</a></li>
                <li><a href="home.html#tab15">5:00 pm - 6:30 pm</a></li>
                <li><a href="home.html#tab16">9:20 am - 11:00 am</a></li>
              </ul>
              <!-- time tab of the page end -->
              <!-- tab content of the page -->
              <div class="tab-content content2">
                <div id="tab12">
                  <div class="img-holder">
                    <img src="images/img11.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Проекты со звездами</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Наша команда имеет большой опыт работы на подтанцовке у звезд эстрады, участии в съёмке клипов: Парвиз Назаров, Жамиля Серкибаева, Роза Рымбаева, Дидье Маруани, Владимир Ступин - этот список можно продолжать и продолжать.</p>
                  </div>
                </div>
                <div id="tab13">
                  <div class="img-holder">
                    <img src="images/img13.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Светящиеся доски</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Флэш-доски это новый вид творчества. Используя  флуоресцентный  маркер и своё воображение вы сможете изобразить что угодно, а с помощью небольшой магии они  начнут светиться неоновым светом.</p>
                  </div>
                </div>
                <div id="tab14">
                  <div class="img-holder">
                    <img src="images/img11.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">The pitchem show</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>«The pitchem show» это новый и непохожий на другие формат развлечения. Дети становятся настоящими диджеями: учатся крутить вертушки, миксовать биты и делать качественные треки. Смогут почувствовать, какого это - быть повелителями музыки</p>
                  </div>
                </div>
                <div id="tab15">
                  <div class="img-holder">
                    <img src="images/img13.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Гонки</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Почувствовать себя гонщиком формулы один или героем уличных гонок, да легко! Гонки- Почувствовать себя гонщиком формулы один или героем уличных гонок, да легко! Коробка переключения передач, руль и автомобильное кресло — погрузят вас в атмосферу бешеной скорости, крутых виражей и дорогих машин. А главное, никаких штрафов за превышение и нарушений правил ПДД</p>
                  </div>
                </div>
                <div id="tab16">
                  <div class="img-holder">
                    <img src="images/img11.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Интерактивный батут</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Интерактивный батут - это развлечение нового поколения, где каждый ребёнок сможет открыть для себя много нового. Ну чем не веселье прыгать выше гор, парить в воздухе как птица? А когда все это сопровождается компьютерной игрой? И не простой, между прочим, а той, которая управляется вашими же прыжками.</p>
                  </div>
                </div>
              </div>
              <!-- tab content of the page end -->
            </div>
            <div id="tab5">
              <!-- time tab of the page -->
              <ul class="list-unstyled time-tab text-uppercase">
                <li><a href="home.html#tab17">9:20 am - 11:00 am</a></li>
                <li><a href="home.html#tab19">перерыв</a></li>
                <li><a href="home.html#tab21">5:00 pm - 6:30 pm</a></li>
                <li><a href="home.html#tab20">3:00 pm - 4:20 pm</a></li>
                <li><a href="home.html#tab18" class="active">11:20 am - 1:00 pm</a></li>
              </ul>
              <!-- time tab of the page end -->
              <!-- tab content of the page -->
              <div class="tab-content content2">
                <div id="tab17">
                  <div class="img-holder">
                    <img src="images/img11.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Интерактивный тир</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Стрельба в тире - забава, которой уже много много лет. «Королевство детских праздников» решили рискнуть и усовершенствовать эту игру. Вашему вниманию представляется «интеллектуальный тир»!</p>
                  </div>
                </div>
                <div id="tab18">
                  <div class="img-holder">
                    <img src="images/img13.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Ультра дискотека</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Ультра дискотека – лучи лазеров , светящиеся рисунки на лицах , браслеты , воздушные шары вот что отлично дополняет детское день рождение. Стробоскопы добавляют яркие впечатления. Флэш моб от ультрафиолетовых человечков удивят детей.</p>
                  </div>
                </div>
                <div id="tab19">
                  <div class="img-holder">
                    <img src="images/img11.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Шоу куб</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Шоу куб - уникальная и ни на что не похожая программа. Где каждый ребёнок сможет принять участие и попробовать свои силы, а за старания и умения получит приз в денежном эквиваленте.</p>
                  </div>
                </div>
                <div id="tab20">
                  <div class="img-holder">
                    <img src="images/img13.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Караоке киллер</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Караоке киллер - Это шоу для тех кто не боится петь, кто может перевоплотится в бесстрашного героя и спеть песню с огромным пауком на руке, а может изменить голос оперной певицы?! Самое главное, за смелость и смекалку получат призы! Необычное музыкальное день рождение, сделайте его незабываемым.</p>
                  </div>
                </div>
                <div id="tab21">
                  <div class="img-holder">
                    <img src="images/img11.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">ШОУ с дрессированными собаками</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Пожалуй, никто так не любит животных, как маленькие дети! И это не удивительно, ведь с пушистыми собачками — это грандиозный, весёлый и бесшабашный праздник. </p>
                  </div>
                </div>
              </div>
              <!-- tab content of the page end -->
            </div>
            <div id="tab6">
              <!-- time tab of the page -->
              <ul class="list-unstyled time-tab text-uppercase">
                <li><a href="home.html#tab22" class="active">11:20 am - 1:00 pm</a></li>
                <li><a href="home.html#tab23">9:20 am - 11:00 am</a></li>
                <li><a href="home.html#tab24">3:00 pm - 4:20 pm</a></li>
                <li><a href="home.html#tab25">5:00 pm - 6:30 pm</a></li>
                <li><a href="home.html#tab26">перерыв</a></li>
              </ul>
              <!-- time tab of the page end -->
              <!-- tab content of the page -->
              <div class="tab-content content2">
                <div id="tab22">
                  <div class="img-holder">
                    <img src="images/img11.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Шоу программы «Окулус»</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Хотите получить еще больше незабываемых впечатлений от Вашего праздника и удивить гостей? Аттракцион «Виртуальной реальности» может это сделать. это суперсовременное развлечение, которое позволит, не выходя c мероприятия побывать в самых разнообразных уголках мира: глубины океана, горы, космос.... А любителям экстрима можно прокатить своего друга, родственника или гостя в красивейшем парке на американских горках!</p>
                  </div>
                </div>
                <div id="tab23">
                  <div class="img-holder">
                    <img src="images/img13.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Чокнутая лаборатория</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Чокнутая лаборатория – на два часа дети отправляются в свободное плавание интересной науки где смогут не только по химичить, но и попробовать себя в роли химика испытателя. Каждый ребенок примет участие в экспериментах, а в награду за это получит коктейль собственного приготовления.</p>
                  </div>
                </div>
                <div id="tab24">
                  <div class="img-holder">
                    <img src="images/img11.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Шоу джамперов</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Джамперы - именно так называют акробатов на одноимённых пружинных ходулях! Они подпрыгивают до небес, выписывая в воздухе невероятные трюки! Эти длинноногие ребята в немыслимых костюмах станут эффектным сопровождением карнавальной колонны или изюминкой рекламной акции, Удивите гостей вашего мероприятия.</p>
                  </div>
                </div>
                <div id="tab25">
                  <div class="img-holder">
                    <img src="images/img13.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Шоу - дрессированные кошки</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Вам и Вашим детям предлагаем замечательный цирковой номер "ШОУ - дрессированные кошки".</p>
                  </div>
                </div>
                <div id="tab26">
                  <div class="img-holder">
                    <img src="images/img11.jpg" alt="image description" class="img-responsive">
                  </div>
                  <div class="txt-holder">
                    <h3 class="heading text-uppercase">Трансформеры</h3>
                    <ul class="list-unstyled txt-list">
                      <li><span class="icofont icofont-record"></span> <a href="home.html#">Martin Baron</a></li>
                      <li><span class="icofont icofont-location-pin"></span> <a href="home.html#">Hall #3</a></li>
                    </ul>
                    <p>Шоу трансформеров- насточщие железные гиганты придут, чтобы сразиться с детьми в танцевальном Батле . Покажут, что они могут и возможно многому научаться у детей!</p>
                  </div>
                </div>
              </div>
              <!-- tab content of the page end -->
            </div>
          </div>
          <!-- tab content of the page end -->
        </div>
        <!-- schedule holder of the page end -->
      </div>
    </div>
  </section>
  <!-- schedule sec of the page end -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <!-- gallery holder of the page -->
        <div class="gallery-holder js-masonry">
          <div class="holder">
            <!-- grid item of the page -->
            <div class="grid-item item1 overlay">
              <img src="images/img12.jpg" alt="image description" class="img-responsive">
              <a href="images/img12.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
            </div>
            <!-- grid item of the page end -->
            <!-- grid item of the page -->
            <div class="grid-item item1 overlay">
              <img src="images/img13.jpg" alt="image description" class="img-responsive">
              <a href="images/img13.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
            </div>
            <!-- grid item of the page end -->
            <!-- grid item of the page -->
            <div class="grid-item item2 overlay">
              <img src="images/img14.jpg" alt="image description" class="img-responsive">
              <a href="images/img14.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
            </div>
            <!-- grid item of the page end -->
            <!-- grid item of the page -->
            <div class="grid-item item3 overlay">
              <img src="images/img15.jpg" alt="image description" class="img-responsive">
              <a href="images/img15.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
            </div>
            <!-- grid item of the page end -->
            <!-- grid item of the page -->
            <div class="grid-item item4 overlay">
              <img src="images/img16.jpg" alt="image description" class="img-responsive">
              <a href="images/img16.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
            </div>
            <!-- grid item of the page end -->
            <!-- grid item of the page -->
            <div class="grid-item item5 overlay">
              <img src="images/img17.jpg" alt="image description" class="img-responsive">
              <a href="images/img17.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
            </div>
            <!-- grid item of the page end -->
          </div>
        </div>
        <!-- gallery holder of the page end -->
      </div>
    </div>
  </div>
</div>
<!-- price sec of the page -->
<section class="price-sec container" data-scroll-index="4">
  <div class="row">
    <header class="col-xs-12 header text-center">
      <span class="title">билеты доступны сейчас</span>
      <h3 class="heading2 text-uppercase">КУПИТЬ БИЛЕТ</h3>
    </header>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-3">
      <!-- price holder of the page -->
      <ul class="list-unstyled price-holder md-round">
        <li class="price-heading">
          <span class="price md-round">$10</span>
          <span class="heading text-uppercase text-center">for 1 person</span>
        </li>
        <li class="text-center">Comfortable Seat</li>
        <li class="text-center">1 Day Lunch Box</li>
        <li class="text-center">All Day Entry</li>
        <li class="text-center">Free Brochure</li>
        <li class="text-center"><a href="home.html#" class="btn-primary text-uppercase md-round"><i class="icofont icofont-chair md-round text-center"></i> Buy Now</a></li>
      </ul>
      <!-- price holder of the page end -->
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <!-- price holder of the page -->
      <ul class="list-unstyled price-holder md-round">
        <li class="price-heading">
          <span class="price md-round">$16</span>
          <span class="heading text-uppercase text-center">for 2 person</span>
        </li>
        <li class="text-center">Comfortable Seat</li>
        <li class="text-center">1 Day Lunch Box</li>
        <li class="text-center">All Day Entry</li>
        <li class="text-center">Free Brochure</li>
        <li class="text-center"><a href="home.html#" class="btn-primary text-uppercase md-round"><i class="icofont icofont-chair md-round text-center"></i> Buy Now</a></li>
      </ul>
      <!-- price holder of the page end -->
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <!-- price holder of the page -->
      <ul class="list-unstyled price-holder md-round">
        <li class="price-heading">
          <span class="price md-round">$24</span>
          <span class="heading text-uppercase text-center">for 1 person</span>
        </li>
        <li class="text-center">Comfortable Seat</li>
        <li class="text-center">3 Day Lunch Box</li>
        <li class="text-center">All Day Entry</li>
        <li class="text-center">Free Brochure</li>
        <li class="text-center"><a href="home.html#" class="btn-primary text-uppercase md-round"><i class="icofont icofont-chair md-round text-center"></i> Buy Now</a></li>
      </ul>
      <!-- price holder of the page end -->
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <!-- price holder of the page -->
      <ul class="list-unstyled price-holder md-round">
        <li class="price-heading">
          <span class="price md-round">$36</span>
          <span class="heading text-uppercase text-center">for 6 person</span>
        </li>
        <li class="text-center">Comfortable Seat</li>
        <li class="text-center">1 Day Lunch Box</li>
        <li class="text-center">All Day Entry</li>
        <li class="text-center">Free Brochure</li>
        <li class="text-center"><a href="home.html#" class="btn-primary text-uppercase md-round"><i class="icofont icofont-chair md-round text-center"></i> Buy Now</a></li>
      </ul>
      <!-- price holder of the page end -->
    </div>
  </div>
</section>
<!-- price sec of the page end -->
<!-- register sec of the page -->
<section class="register-sec bg-full overlay" style="background-image: url(images/img18.jpg);" data-scroll-index="5">
  <div class="container">
    <div class="row">
      <header class="col-xs-12 header">
        <span class="title">закажите себе место</span>
        <h3 class="heading2 text-uppercase">Зарегистрируйте свое место</h3>
      </header>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <!-- register form of the page -->
        <form action="home.html#" class="register-form">
          <fieldset>
            <div class="col md-round">
              <label for="name"><i class="icofont icofont-ui-user"></i></label>
              <input type="text" id="name" class="form-control text-uppercase" placeholder="Ваше имя">
            </div>
            <div class="col md-round">
              <label for="email"><i class="icofont icofont-email"></i></label>
              <input type="email" id="email" class="form-control text-uppercase" placeholder=" Электронной почты">
            </div>
            <div class="col md-round">
              <label for="num"><i class="icofont icofont-listine-dots"></i></label>
              <input type="text" id="num" class="form-control text-uppercase" placeholder="количество мест">
            </div>
            <div class="col md-round">
              <label for="seat"><i class="icofont icofont-plane-ticket"></i></label>
              <select id="seat" class="text-uppercase">
                <option value="0">Оформление</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <button class="btn-primary md-round text-uppercase" type="submit"><i class="icofont icofont-chair md-round text-center"></i> Подтвердите место</button>
          </fieldset>
        </form>
        <!-- register form of the page end -->
      </div>
    </div>
  </div>
</section>

@endsection