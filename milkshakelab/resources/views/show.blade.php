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
 

        <div class="card-que">
            <!-- <p class="number"></p> -->
                <div class="circle1-que"></div>
                <div class="circle2-que"></div>
                <div class="circle3-que"></div>
  <div class="products">
    <div class="product active" product-id="1" product-color="#D18B49">
      <!-- <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Stag.svg"/></div> -->
      <h1 class="title">The Magnificent Stag</h1>
      <p class="description">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
    <div class="product" product-id="2" product-color="#542F13">
      <!-- <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Bear.svg"/></div> -->
      <h1 class="title">The Courageous Bear</h1>
      <p class="description">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
    <div class="product" product-id="3" product-color="#A5AAAE">
      <!-- <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Mouse.svg"/></div> -->
      <h1 class="title">The Sneaky Mouse</h1>
      <p class="description">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
    <div class="product" product-id="4" product-color="#ED8D1F">
      <!-- <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Fox.svg"/></div> -->
      <h1 class="title">The Cunning Fox</h1>
      <p class="description">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
    <div class="product" product-id="5" product-color="#C4C8CB">
      <!-- <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/Rabbit.svg"/></div> -->
      <h1 class="title">The Jumpy Rabbit</h1>
      <p class="description">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    </div>
  </div>
  <div class="footer"><a class="btn" id="prev" href="#" ripple="" ripple-color="#666666">Prev</a><a class="btn" id="next" href="#" ripple="" ripple-color="#666666">Next</a></div>
</div>



        <!-- <div id="popup1" class="overlay">
	<div class="popup popup-que">
		<h2>Hello</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			           <img src="/img/thumbnails/solveX1-thumbnail.png" alt="" srcset="" width="100%">
		</div>
	</div>
</div> -->

<div class="container">
       <div class="que card">
           <!-- <img src="/img/thumbnails/solveX1-thumbnail.png" alt="" srcset="" width="400px"> -->
           <!-- <div class="box">
            <a class="login" href="#popup1">See Question</a>
           </div> -->
       </div>

        <div class="conment">
            @comments(['model' => $post])
        </div>
    </div>

<!-- 2. AddChat widget -->
<div id="addchat_app" 
    data-baseurl="{{url('') }}"
    data-csrfname="{{'X-CSRF-Token' }}"
    data-csrftoken="{{csrf_token() }}"
></div>
@endsection