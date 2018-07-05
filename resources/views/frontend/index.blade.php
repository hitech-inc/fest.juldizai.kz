@extends('frontend.layouts.master')
@section('content')

<section class="banner bg-full overlay" style="background-image: url(images/img01.jpg);" data-scroll-index="0">
  <div class="caption">
    <!-- <div id="defaultCountdown" class="comming-timer"></div> -->
    <h1 class="text-uppercase">Фестиваль «Жұлдызай»</h1>
    <p>Республиканский фестиваль творчества детей с особыми образовательными потребностями и является авторским проектом фонда</p>
<!--     <span class="video-icon text-uppercase text-center">
  <a href="" class="icofont icofont-play-alt-2"></a>
  Смотрите Наши новые видео
</span> -->
  </div>
</section>


<div class="info-holder container">
  <div class="row">

    @foreach($red_blocks as $block)
    <div class="col-xs-12 col-sm-3">
      <div class="col md-round">
        <span class="icofont {{ $block->icon }}"></span>
        <span class="border">/</span>
        <div class="align-right">
          <strong class="text-uppercase">{{ $block->title }}</strong>
          <time datetime="2017-03-02 20:00" class="date">{{ $block->desc }}</time>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<div class="abt-holder" data-scroll-index="1">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
          <div class="css-tabs-wrapper">
            <!-- Первая вкладка -->
            <input type="radio" name="tabs" id="tab-nav-1" checked>
            <label for="tab-nav-1">О фестивале</label>
            <!-- Вторая вкладка -->
            <input type="radio" name="tabs" id="tab-nav-2">
            <label for="tab-nav-2">Организация</label>
            <input type="radio" name="tabs" id="tab-nav-3">
            <label for="tab-nav-3">Результаты</label>
            <!-- Третья вкладка -->

            <div class="tabs">
              <div>
                <ul class="list-unstyled topic-list">
                  @foreach($text_block1 as $block)
                  <li>
                    <span class="icon text-center md-round"><i class="icofont icofont-ui-note"></i></span>
                    <div class="txt-holder">
                      <h2 class="heading text-uppercase">{{ $block->title }}</h2>
                      <p>{!! $block->text !!}</p>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div>
              <ul class="list-unstyled topic-list">
                  @foreach($text_block2 as $block)
                  <li>
                    <span class="icon text-center md-round"><i class="icofont icofont-ui-note"></i></span>
                    <div class="txt-holder">
                      <h2 class="heading text-uppercase">{{ $block->title }}</h2>
                      <p>{!! $block->text !!}</p>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
              <div>
              <ul class="list-unstyled topic-list">
                  @foreach($text_block22 as $block)
                  <li>
                    <span class="icon text-center md-round"><i class="icofont icofont-ui-note"></i></span>
                    <div class="txt-holder">
                      <h2 class="heading text-uppercase">{{ $block->title }}</h2>
                      <p>{!! $block->text !!}</p>
                    </div>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="img-holder">
          <img src="/images/_MG_5881.jpg" alt="image description" class="img-responsive">
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
        <span class="title">Партнером фестиваля  является продюсерский центр   
</span>
        <h3 class="heading2 text-uppercase">«Zhan Alemi Group» </h3>
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
                  <img src="images/man1.jpeg" alt="image description" class="img-responsive"></a>
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase">Жан Муканов</h4>
<!--                   <span class="skill">UX Designer</span>
<strong class="topic">Topic:  Design for Human</strong> -->
                </div>
              </div>
              <!-- speaker col of the page end -->
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <img src="images/man2.jpeg" alt="image description" class="img-responsive">
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase">Айдар Тұрғанбек</h4>
                </div>
              </div>
              <!-- speaker col of the page end -->
            </div>
            <div class="col">
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <img src="images/man3.jpeg" alt="image description" class="img-responsive">
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase">Ләйлә Сұлтанқызы</h4>
                </div>
              </div>
              <!-- speaker col of the page end -->
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <img src="images/man4.jpeg" alt="image description" class="img-responsive">
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase">Ернар Айдар</h4>
                </div>
              </div>
              <!-- speaker col of the page end -->
            </div>
            <div class="col">
              <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <img src="images/man5.jpeg" alt="image description" class="img-responsive">
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase">Гүлнұр Оразымбетова</h4>

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
                  <img src="images/man6.jpeg" alt="image description" class="img-responsive">
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase">Тамара Асар</h4>
                </div>
              </div>
                <!-- speaker col of the page end -->
                <!-- speaker col of the page -->
              <div class="speaker-col md-round">
                <div class="img-holder round">
                  <img src="images/man7.jpeg" alt="image description" class="img-responsive">
                </div>
                <div class="txt-holder">
                  <h4 class="text-uppercase">Қуандық Рахым</h4>
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

  <div class="cta-sec bg-full overlay" style="background-image: url(images/_MG_6030.jpeg);">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-5">
          <span class="title">{{ $text_block3->title }}</span>
          <p>{{ $text_block3->text }}</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-4 col-lg-5" style="float: right;">
          <div class="video-holder text-center text-uppercase">
            <a  class="video showVideo"><i class="icofont icofont-ui-play"></i>  Смотрите видео о нас</a>
            <div class="arrow-img" style="background-image: url(images/arrow.png);"></div>
          </div>
        </div>
<!--         <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
  <a href="" class="btn-primary md-round text-uppercase"><i class="icofont icofont-chair md-round text-center"></i> Book a Seat</a>
</div> -->
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
        <div class="schedule-holder bg-full overlay md-round" style="background-image: url(images/_MG_5627.jpg);">
          <!-- schedule tab of the page -->
          <ul class="list-unstyled schedule-tab">
            <li>
              <a href="#tab3" class="md-round">
                <span class="day text-uppercase">6 апреля</span>
                <time datetime="2017-02-03 20:00" class="time text-uppercase">9:20 am - 6:30 pm</time>
              </a>
            </li>
            <li>
              <a href="#tab4" class="md-round">
                <span class="day text-uppercase">16 апреля</span>
                <time datetime="2017-02-03 20:00" class="time text-uppercase">9:20 am - 6:30 pm</time>
              </a>
            </li>
            <li>
              <a href="#tab5" class="md-round active">
                <span class="day text-uppercase">24 апреля</span>
                <time datetime="2017-02-03 20:00" class="time text-uppercase">9:20 am - 6:30 pm</time>
              </a>
            </li>
            <li>
              <a href="#tab6" class="md-round">
                <span class="day text-uppercase">1 июня</span>
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
                <li><a href="#tab7" class="active">9:20 am - 11:00 am</a></li>
                <li><a href="#tab8">11:20 am - 1:00 pm</a></li>
                <li><a href="#tab9">3:00 pm - 4:20 pm</a></li>
                <li><a href="#tab10">5:00 pm - 6:30 pm</a></li>
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
                      
                      <li><span class="icofont icofont-location-pin"></span> <a href="">Алматы #3</a></li>
                    </ul>
                    <p>Высочайшее мастерство танцоров балета «Сейшн» было отмечено также на престижных международных конкурсах: «Гордость Балтики» (Гран-при), «Минута славы» на Первом (полуфинал). Национальный танец «Кустар» в постановке этого коллектива внесён в перечень шедевров мирового искусства ЮНЕСКО.</p>
                  </div>
                </div>
                      <div id="tab8">
                        <div class="img-holder">
                          <img src="images/img11-3.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">XI Республиканский фестиваль «BI Жұлдызай 2016»</h3>
                          <ul class="list-unstyled txt-list">
                            <li><span class="icofont icofont-record"></span> <a href="">TOLEU</a></li>
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>XI Республиканский фестиваль детского творчества для детей с ограниченными возможностями «BI Жұлдызай 2016» Пресс-релиз по старту фестиваля doc 05 Апреля…</p>
                        </div>
                      </div>
                      <div id="tab9">
                        <div class="img-holder">
                          <img src="images/img11-4.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">XI Республиканский фестиваль детского творчества для детей с ограниченными возможностями «BI Жұлдызай 2016»</h3>
                          <ul class="list-unstyled txt-list">
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>05 Апреля одновременно в двух городах Казахстана стартовал первый отборочный тур, первые города участники: Усть-Каменогорск и Талдыкорган. Члены жюри, вылетевшие…</p>
                        </div>
                      </div>
                      <div id="tab10">
                        <div class="img-holder">
                          <img src="images/img11-5.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Фотоотчет BI Zhuldyzai</h3>
                          <ul class="list-unstyled txt-list">
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>В этом году исполняется одинадцать лет Республиканскому фестивалю «Жұлдызай», который проводится с целью выявления талантов и поддержки детей с ограниченными…</p>
                        </div>
                      </div>

              </div>
              <!-- tab content of the page end -->
            </div>
<div id="tab4">
                    <!-- time tab of the page -->
                    <ul class="list-unstyled time-tab text-uppercase">
                      <li><a href="#tab12" class="active">11:20 am - 1:00 pm</a></li>
                      <li><a href="#tab13">3:00 pm - 4:20 pm</a></li>
                      <li><a href="#tab14">перерыв</a></li>
                      <li><a href="#tab15">5:00 pm - 6:30 pm</a></li>
                      <li><a href="#tab16">9:20 am - 11:00 am</a></li>
                    </ul>
                    <!-- time tab of the page end -->
                    <!-- tab content of the page -->
                    <div class="tab-content content2">
                      <div id="tab12">
                        <div class="img-holder">
                          <img src="images/img11-2.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Завершение I-го отборочного тура фестиваля «BI Жұлдызай 2016»</h3>
                          <ul class="list-unstyled txt-list">
                            <li><span class="icofont icofont-record"></span> <a href="">AISULTAN BATYRKHANOV</a></li>
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>В этом году исполняется одиннадцать лет республиканскому фестивалю «Жұлдызай», который проводится с целью выявления талантов и поддержки детей с ограниченными…</p>
                        </div>
                      </div>
                      <div id="tab13">
                        <div class="img-holder">
                          <img src="images/img11-3.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">От особых потребностей к безграничным возможностям.</h3>
                          <ul class="list-unstyled txt-list">
                            <li><span class="icofont icofont-record"></span> <a href="">TOLEU</a></li>
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>В Алматы стартовал отборочный тур XII Республиканского фестиваля детского творчества для детей с особыми потребностями «Жұлдызай-2017». Традиционно фестиваль проводился фондом…</p>
                        </div>
                      </div>
                      <div id="tab14">
                        <div class="img-holder">
                          <img src="images/img11-4.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Мы шагаем по стране!</h3>
                          <ul class="list-unstyled txt-list">
                            <li><span class="icofont icofont-record"></span> <a href="">TOLEU</a></li>
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>Отборочные туры I Республиканской Спартакиады и XII Республиканского фестиваля детского творчества для детей с особыми потребностями «Жұлдызай» в самом разгаре….</p>
                        </div>
                      </div>
                      <div id="tab15">
                        <div class="img-holder">
                          <img src="images/img11-5.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Завершился XII Республиканский фестиваль «Жұлдызай»</h3>
                          <ul class="list-unstyled txt-list">
                            <li><span class="icofont icofont-record"></span> <a href="">TOLEU</a></li>
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>   1 июня в Алматы во Дворце Республики состоялся долгожданный Гала-концерт с участием победителей XII…</p>
                        </div>
                      </div>
                      <div id="tab16">
                        <div class="img-holder">
                          <img src="images/img11-2.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Интерактивный батут</h3>
                          <ul class="list-unstyled txt-list">
                            
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
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
                      <li><a href="#tab17"  class="active">9:20 am - 11:00 am</a></li>
                      <li><a href="#tab19">перерыв</a></li>
                      <li><a href="#tab21">5:00 pm - 6:30 pm</a></li>
                      <li><a href="#tab20">3:00 pm - 4:20 pm</a></li>
                      <li><a href="#tab18">11:20 am - 1:00 pm</a></li>
                    </ul>
                    <!-- time tab of the page end -->
                    <!-- tab content of the page -->
                    <div class="tab-content content2">
                      <div id="tab17">
                        <div class="img-holder">
                          <img src="images/img11-3.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Интерактивный тир</h3>
                          <ul class="list-unstyled txt-list">
                            
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>Стрельба в тире - забава, которой уже много много лет. «Королевство детских праздников» решили рискнуть и усовершенствовать эту игру. Вашему вниманию представляется «интеллектуальный тир»!</p>
                        </div>
                      </div>
                      <div id="tab18">
                        <div class="img-holder">
                          <img src="images/img11-4.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Ультра дискотека</h3>
                          <ul class="list-unstyled txt-list">
                            
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>Ультра дискотека – лучи лазеров , светящиеся рисунки на лицах , браслеты , воздушные шары вот что отлично дополняет детское день рождение. Стробоскопы добавляют яркие впечатления. Флэш моб от ультрафиолетовых человечков удивят детей.</p>
                        </div>
                      </div>
                      <div id="tab19">
                        <div class="img-holder">
                          <img src="images/img11-5.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Шоу куб</h3>
                          <ul class="list-unstyled txt-list">
                            
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>Шоу куб - уникальная и ни на что не похожая программа. Где каждый ребёнок сможет принять участие и попробовать свои силы, а за старания и умения получит приз в денежном эквиваленте.</p>
                        </div>
                      </div>
                      <div id="tab20">
                        <div class="img-holder">
                          <img src="images/img11-2.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Караоке киллер</h3>
                          <ul class="list-unstyled txt-list">
                            
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>Караоке киллер - Это шоу для тех кто не боится петь, кто может перевоплотится в бесстрашного героя и спеть песню с огромным пауком на руке, а может изменить голос оперной певицы?! Самое главное, за смелость и смекалку получат призы! Необычное музыкальное день рождение, сделайте его незабываемым.</p>
                        </div>
                      </div>
                      <div id="tab21">
                        <div class="img-holder">
                          <img src="images/img11-3.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">ШОУ с дрессированными собаками</h3>
                          <ul class="list-unstyled txt-list">
                            
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
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
                      <li><a href="#tab22" class="active">11:20 am - 1:00 pm</a></li>
                      <li><a href="#tab23">9:20 am - 11:00 am</a></li>
                      <li><a href="#tab24">3:00 pm - 4:20 pm</a></li>
                      <li><a href="#tab25">5:00 pm - 6:30 pm</a></li>
                      <li><a href="#tab26">перерыв</a></li>
                    </ul>
                    <!-- time tab of the page end -->
                    <!-- tab content of the page -->
                    <div class="tab-content content2">
                      <div id="tab22">
                        <div class="img-holder">
                          <img src="images/img11-4.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Шоу программы «Окулус»</h3>
                          <ul class="list-unstyled txt-list">
                            
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>Хотите получить еще больше незабываемых впечатлений от Вашего праздника и удивить гостей? Аттракцион «Виртуальной реальности» может это сделать. это суперсовременное развлечение, которое позволит, не выходя c мероприятия побывать в самых разнообразных уголках мира: глубины океана, горы, космос.... А любителям экстрима можно прокатить своего друга, родственника или гостя в красивейшем парке на американских горках!</p>
                        </div>
                      </div>
                      <div id="tab23">
                        <div class="img-holder">
                          <img src="images/img11-5.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Чокнутая лаборатория</h3>
                          <ul class="list-unstyled txt-list">
                            
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>Чокнутая лаборатория – на два часа дети отправляются в свободное плавание интересной науки где смогут не только по химичить, но и попробовать себя в роли химика испытателя. Каждый ребенок примет участие в экспериментах, а в награду за это получит коктейль собственного приготовления.</p>
                        </div>
                      </div>
                      <div id="tab24">
                        <div class="img-holder">
                          <img src="images/img11-2.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Шоу джамперов</h3>
                          <ul class="list-unstyled txt-list">
                            
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>Джамперы - именно так называют акробатов на одноимённых пружинных ходулях! Они подпрыгивают до небес, выписывая в воздухе невероятные трюки! Эти длинноногие ребята в немыслимых костюмах станут эффектным сопровождением карнавальной колонны или изюминкой рекламной акции, Удивите гостей вашего мероприятия.</p>
                        </div>
                      </div>
                      <div id="tab25">
                        <div class="img-holder">
                          <img src="images/img11-3.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Шоу - дрессированные кошки</h3>
                          <ul class="list-unstyled txt-list">
                            
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>Вам и Вашим детям предлагаем замечательный цирковой номер "ШОУ - дрессированные кошки".</p>
                        </div>
                      </div>
                      <div id="tab26">
                        <div class="img-holder">
                          <img src="images/img11-4.jpg" alt="image description" class="img-responsive">
                        </div>
                        <div class="txt-holder">
                          <h3 class="heading text-uppercase">Трансформеры</h3>
                          <ul class="list-unstyled txt-list">
                            
                            <li><span class="icofont icofont-location-pin"></span> <a href="">Концертный зал</a></li>
                          </ul>
                          <p>Шоу трансформеров- насточщие железные гиганты придут, чтобы сразиться с детьми в танцевальном Батле . Покажут, что они могут и возможно многому научаться у детей!</p>
                        </div>
                      </div>
                    </div>
            </div> 
          </div>
          <!-- tab content of the page end -->
        </div>
        <!-- schedule holder of the page end -->
      </div>
    </div>
  </section>
  <!-- schedule sec of the page end -->
  <div class="container" id="galleriente">
    <div class="row">
      <div class="col-xs-12">
        <!-- gallery holder of the page -->
        <div class="gallery-holder js-masonry">
            @foreach($gallery as $item)
              @if($loop->index < 7)
                <div class="grid-item overlay" style="background-image: url('img/uploads/{{ $item->path }}');">
                    <a href="img/uploads/{{ $item->path }}" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
                </div>
              @endif
              @if($loop->index == 7)
                <div class="grid-item overlay" style="background-image: url('img/uploads/{{ $item->path }}');">
                    <a href="img/uploads/{{ $item->path }}" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
                </div>
              @endif
              @if($loop->index  > 7)
                    <a href="img/uploads/{{ $item->path }}" class="icon icofont icofont-plus lightbox" data-fancybox="gallery" style="display: none;"></a> 
              @endif
            @endforeach
        </div>





       <!--    <div class="holder">
         grid item of the page
       
       
               <div class="grid-item item1 overlay">
                 <img src="images/_sMG_5713.jpg" alt="image description" width="292" height="463" class="img-responsive">
                 <a href="images/_sMG_5713.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
               </div>
               grid item of the page end
               grid item of the page
               <div class="grid-item item1 overlay">
                 <img src="images/img13-2.jpg" alt="image description" class="img-responsive">
                 <a href="images/img13-2.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
                 <a href="images/img13-2.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
               </div>
               grid item of the page end
               grid item of the page
               <div class="grid-item item2 overlay">
                 <img src="images/img14-2.jpg" alt="image description" class="img-responsive">
                 <a href="images/img14-2.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
               </div>
               grid item of the page end
               grid item of the page
               <div class="grid-item item3 overlay">
                 <img src="images/img15-2.jpg" alt="image description" class="img-responsive">
                 <a href="images/img15-2.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
               </div>
               grid item of the page end
               grid item of the page
               <div class="grid-item item4 overlay">
                 <img src="images/img16-2.jpg" alt="image description" class="img-responsive">
                 <a href="images/img16-2.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
               </div>
               grid item of the page end
               grid item of the page
               <div class="grid-item item5 overlay">
                 <img src="images/img17-2.jpg" alt="image description" class="img-responsive">
                 <a href="images/img17-2.jpg" class="icon icofont icofont-plus lightbox" data-fancybox="gallery"></a>
               </div>
         grid item of the page end
       </div> -->
        </div>
        <!-- gallery holder of the page end -->
      </div>

      <div class="test">
        <h3>Отзывы о фестивале</h3>
        <div class="test-slider">
          
          <div>
            <img src="images/test2.jpeg" class="testImg">
          </div>
          <div>
            <h4>Областная специальная школа-интернат-комплекса для детей с нарушением слуха г.Уральск</h4>
            <p>В конце мая в г.Астане состоялся ХШ Республиканский конкурс среди детей с особыми образовательными потребностями «ВI Жұлдызай», имеющий давние традиции и особую привлекательность для участников.Конкурс «Жұлдызай» способствует раскрытию творческого потенциала, профессиональному самоопределению детей с особыми образовательными потребностями.Учащиеся областной специальной школы-интернат-комплекса для детей с нарушением слуха и речи с особым вожделением готовились и принимали активное участие в творческом конкурсе, вкладывая все свои силы для достижения успеха.Программа ХШ Республиканского конкурса была очень насыщенной. В нее, кроме основного конкурса, были включены экскурсия по значимым местам столицы, познавательные и развлекательные мероприятия, поход в цирк, выступления аниматоров, вечер знакомства и т.д.  Атмосфера доброжелательности и теплоты царила с первых минут пребывания в Астане. Была организована четкая работа волонтеров, которые обеспечили встречу, размещение и сопровождение делегаций с областей. Все участники конкурса были размещены в комфортабельном отеле «Park inn». Здесь все радовало душу: прекрасные апартаменты, внимание и забота, вкусное и разнообразное питание, полноценный досуг, веселое общение.   Конкурс «Жұлдызай» стал своеобразной площадкой, сплотившей близких по духу и творчески развивающихся детей из разных городов Казахстана. Этот конкурс стал кузницей будущих звезд отечественной эстрады.  Победители и призеры конкурса были награждены различными ценными призами, а также получили почетное право выступления в Гала-концерте. Достойно выступив в конкурсе, учащиеся нашей школы были удостоены права выступления в заключительном Гала-концерте. Ребята получили массу положительных эмоций и желание дальше совершенствовать свои творческие способности, вновь и вновь возвращаться в этот замечательный город.Прекрасно завершился ХШ конкурс, и дети с нетерпением и с большими надеждами ждут следующего конкурса.
            </p>
          </div>
                    <div>
            <img src="images/test1.jpeg" class="testImg">
            
          </div>
          <div>
            <h4> Динара Толеутаевна, мама Майкеновой Толганай</h4>
            <p>Я хочу выразить огромную благодарность организаторам Республиканского фестиваля детского творчества для детей с ограниченными возможностями «Жұлдызай», и лично Директору Корпоративного Фонда «BI- Жұлдызай» Г.Исабаевой, за большой труд в создании такого великолепного проекта. Моя дочь занимается в студии детского творчества «Новая волна» в городе Павлодаре, в коррекционной школе интернате №1 для детей с нарушением слуха и речи, и она неоднократно участвовала в данном Фестивале. Дети всегда с удовольствием приезжают на «Жұлдызай»! Помимо теплой и дружеской атмосферы этого конкурса, дети очень любят организованный для них досуг: с ними играют, проводят мастер-классы по разнообразным видам искусства. Каждый найдет, чем заняться. Весело и с пользой проводят время. А что для мамы главное…чтобы ребенок был счастлив!  Вернусь к Фестивалю. В этом году  наш коллектив жестового пения занял призовое третье место.За дни проведённые в Астане, которые  подарили организаторы Фестиваля, дети успели многое. Организаторы постарались, чтобы дети провели эти дни с пользой! На обзорной экскурсии они познакомились с достопримечательностями нашей столицы, нашли новых друзей, поделились творческими достижениями.Вы настоящие профессионалы своего дела! Моему ребёнку понравилось все!!! Начиная с первого дня (встреча на вокзале, экскурсии, обеды, гостиница). Сам конкурсный день произвел неизгладимое впечатление. Настолько точно было рассчитано время для каждой группы, начиная с трансфера, репетиции, самого выступления и заканчивая обсуждением, дискотекой и награждением! Большое впечатление оставил последний день грандиозный, незабываемый Гала-концерт. 
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="smi">
  <a class="closeVideo">&times;</a>
  <div class="whiteBoard">
    <h3 style="color: #d22020;">СМИ о Фестивале</h3>
    <br>
    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/DiCK_0vu6mk?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
    <h4 style="font-size: 1.5em;">Областные СМИ про отборочные туры</h4>
    <p style="font-size: 1.2em;">Атырауда "Жұлдызай-2018" Республикалық фестивалінің 2-ші іріктеу кезеңі өтті. Мүмкіндігі шектеулі балалардың шығармаршалығын дамытуға бағытталған шараға 170-тен астам үміткер қатысты</p>

        <br><hr style="color: #cacaca;">

    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/ivZ1ryV1QMc?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
    <h4 style="font-size: 1.5em;">Участники гала-концерта  были приглашены на передачу «Таңғы хабар»
</h4>
    <p style="font-size: 1.2em;"> «Жұлдызай» фестивалінің гала концертінде кімдер өнер көрсетеді?
</p>

        <br><hr style="color: #cacaca;">

     <iframe width="100%" height="400px" src="https://www.youtube.com/embed/_1W16lD3FwM?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
    <h4 style="font-size: 1.5em;">Во время прямого эфира, интервью у зрителей
</h4>
    <p style="font-size: 1.2em;">Астанада «Жұлдызай» республикалық фестивалінің гала-концерті өтеді
</p>

        <br><hr style="color: #cacaca;">

    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/L5C_ro7UqBM?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
    <h4 style="font-size: 1.5em;">Интервью организаторов фестиваля
</h4>
    <p style="font-size: 1.2em;">Финальный гала-концерт фестиваля «Жулдызай» проходит в Астане
</p>
 
  </div>
</div>
@endsection