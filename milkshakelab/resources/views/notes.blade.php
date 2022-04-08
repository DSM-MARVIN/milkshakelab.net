@extends('layouts.app')

@section('content')
<nav class="nav">
         <div class="nav-profile">
         <div class="userport-img"></div>
         <div class="userport-name"></div>

         <ul class="navigation">
             <li class="nav-list"><a href="/home"><img src="/img/4815501.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/notes"><img src="/img/3075908.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/posts/1"><img src="/img/2859734.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/chatify"><img src="/img/3930540.png" alt="" width='30px'></a></li>
             <li class="nav-list"><a href="/videos"><img src="/img/1179069.png" alt="" width='30px'></a></li>
        </ul>

         </div>
        </nav>
        <div class="wrapper">

<div class="header">
<div class="con-text-notes">
          <h2>Download easy to understand notes</h2>
          <p>This notes are a quick summary of each math topic, this will help you understand the fundamentals of each math topic. With a couple of examples which will give you the jumpstart you need in to solve problems on certain topics. What is really amazing is it is all for free <q>Just click download and start learning</q> We hope you enjoy.</p>
             <button class="button">Support <i class="fa fa-paper-plane"></i></button>
        </div>
</div>

<div class="cards">

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
      <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span>
      <i class="fa"><img src="/img/3408406.png" alt="" srcset="" width='45px'></i>
      <!-- <a class="login" href="#popup1">Download</a> -->

      
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      <!-- Expander -->
      <!-- <samp> 1 + 2x = 4x <br> 0 = -1 +4x -2x <br> 1 = 2x <br> x = 1/2</samp> -->
      <!-- <a class="button" href="#popup1">Download Notes</a> -->
      <!-- <object data="/pdf/php_tutorial.pdf" type="" width='100%'></object> -->
      <!-- <iframe src="/pdf/php_tutorial.pdf" frameborder="0"></iframe> -->
      <embed src="/pdf/php_tutorial.pdf" type="application/pdf" style="height: -webkit-fill-available; width: -webkit-fill-available">

    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <span><h4 class="header__subtitle"><kbd>number patterns<kbd></h4></span>
      <i class="fa"><img src="/img/stickrs/beach.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span>
    <i class="fa"><img src="/img/stickrs/caravan.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>
  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span>
    <i class="fa"><img src="/img/stickrs/cat.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span>
    <i class="fa"><img src="/img/stickrs/bolt.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span>
    <i class="fa"><img src="/img/stickrs/cherries.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span>
    <i class="fa"><img src="/img/stickrs/cookie.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span>
    <i class="fa"><img src="/img/stickrs/pizza.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

  <div class=" card [ is-collapsed ] ">
    <div class="card__inner [ js-expander ]">
    <span><h4 class="header__subtitle"><kbd>exponents and surds<kbd></h4></span>
    <i class="fa"><img src="/img/stickrs/rainbow.png" alt="" srcset="" width='45px'></i>
    </div>
    <div class="card__expander">
      <i class="fa fa-close [ js-collapser ]"></i>
      Expander
    </div>
  </div>

</div>

</div>

        <div id="popup1" class="overlay">
	<div class="popup popup-que">
		<h2>Hello Notes</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			           <!-- <img src="/img/thumbnails/solveX1-thumbnail.png" alt="" srcset="" width="100%"> -->
      <!-- <embed src="/pdf/php_tutorial.pdf" type="application/pdf" style="height: -webkit-fill-available; width: -webkit-fill-available"> -->
      <!-- <iframe src="/pdf/php_tutorial.pdf" frameborder="0"></iframe> -->
      <object data="/pdf/php_tutorial.pdf" type="" width='100%' height="100%"></object>

		</div>
	</div>
</div>

<div class="container">
       <div class="que card">
           <!-- <img src="/img/thumbnails/solveX1-thumbnail.png" alt="" srcset="" width="400px"> -->
           <div class="box">
            <a class="login" href="#popup1">See Question</a>
           </div>
       </div>
@endsection