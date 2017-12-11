@extends('layouts.default')

@section('content')

 <div class="container">

      <div class="bg-faded p-4 my-4">
        <!-- Image Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="img/slide-1.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"></h3>
                <p class="text-shadow"></p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/slide-2.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"></h3>
                <p class="text-shadow"></p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="img/slide-3.jpg" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"></h3>
                <p class="text-shadow"></p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Про 
          <strong>Ipega</strong>
        </h2>
        <hr class="divider">
        <img class="img-fluid float-left mr-4 d-none d-lg-block" src="img/intro-pic.jpg" alt="">
        <p>iPega -современные беспроводные геймпады на базе интерфейса Bluetooth 3.0, который позволит вам превратить ваш мобильный гаджет в настоящее игровое устройство. Совместите его Android-смартфоном за счет специального крепления, и вы получите в свое распоряжение полноценную консоль с экраном и удобным управлением. При этом устройства отлично работает с подавляющим большинством мобильных игр, делая их куда более увлекательными для пользователя.</p>
        <p>Удобное управление, аналогичное стандартным консольным геймпадам
        Важным достоинством iPega PG-9037 является тот факт, что он практически полностью повторяет достоинства консольных геймпадов. В частности, он имеет эргономичную форму, за счет чего удачно ложится почти в любые руки. Что же касается управления, то в устройстве предусмотрены полноценные аналоговые стики, шифты, 4 кнопки действия, крестовина и другие элементы.</p>
        <p>Четкая и быстрая связь со смартфоном благодаря интерфейсу Bluetooth 3.0
        iPega PG-9037 работает на базе беспроводной технологии Bluetooth V3.0 + HS, подключаясь к мобильному гаджету не только вплотную, но и на расстоянии 6-8 метров. Устройство подключается по Bluetooth к телефону без драйверов, путём простого сопряжения. Причем сама связь отличается быстрым и четким откликом, так все ваши действия на кнопках будут моментально выполняться в самой игре. Сам же геймпад работает на встроенном аккумуляторе с высокой емкостью, которого с полным зарядом хватает на 20 часов. Процесс зарядки при этом удобно осуществляется через интерфейс MicroUSB. </p>
        <p>Четкая и быстрая связь со смартфоном благодаря интерфейсу Bluetooth 3.0
        iPega PG-9037 работает на базе беспроводной технологии Bluetooth V3.0 + HS, подключаясь к мобильному гаджету не только вплотную, но и на расстоянии 6-8 метров. Устройство подключается по Bluetooth к телефону без драйверов, путём простого сопряжения. Причем сама связь отличается быстрым и четким откликом, так все ваши действия на кнопках будут моментально выполняться в самой игре. Сам же геймпад работает на встроенном аккумуляторе с высокой емкостью, которого с полным зарядом хватает на 20 часов. Процесс зарядки при этом удобно осуществляется через интерфейс MicroUSB.</p>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Beautiful boxes to
          <strong>showcase your content</strong>
        </h2>
        <hr class="divider">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
      </div>

    </div>
@endsection