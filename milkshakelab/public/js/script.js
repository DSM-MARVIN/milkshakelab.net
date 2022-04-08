
const section = document.querySelector("section"),
    mainVideo = document.querySelector(".main-video video"),
     videos = document.querySelectorAll(".videos"),
     close = document.querySelector(".close-vid");

     for (var i = 0; i < videos.length; i++) {
       videos[i].addEventListener("click", (e)=>{
         const target = e.target;
         section.classList.add("active");
         target.classList.add("active");
         let src = document.querySelector(".videos.active video").src;
         mainVideo.src = src;

         close.addEventListener("click", ()=>{
           section.classList.remove("active");
           target.classList.remove("active");
           mainVideo.src = "";
         });
       });
     };
  


//question card starts here
$(document).ready(function() {
  var getProductHeight = $('.product.active').height();

  $('.products').css({
    height: getProductHeight
  });

  function calcProductHeight() {
    getProductHeight = $('.product.active').height();

    $('.products').css({
      height: getProductHeight
    });
  }

  function animateContentColor() {
    var getProductColor = $('.product.active').attr('product-color');

    // $('body').css({
    //   background: getProductColor
    // });

    $('.title').css({
      color: getProductColor
    });

    $('.btn').css({
      color: getProductColor
    });
  }

  var productItem = $('.product'),
    productCurrentItem = productItem.filter('.active');

  $('#next').on('click', function(e) {
    e.preventDefault();

    var nextItem = productCurrentItem.next();

    productCurrentItem.removeClass('active');

    if (nextItem.length) {

      productCurrentItem = nextItem.addClass('active');
    } else {
      productCurrentItem = productItem.first().addClass('active');
    }

    calcProductHeight();
    animateContentColor();
  });

  $('#prev').on('click', function(e) {
    e.preventDefault();

    var prevItem = productCurrentItem.prev();

    productCurrentItem.removeClass('active');

    if (prevItem.length) {
      productCurrentItem = prevItem.addClass('active');
    } else {
      productCurrentItem = productItem.last().addClass('active');
    }

    calcProductHeight();
    animateContentColor();
  });

  // Ripple
  $('[ripple]').on('click', function(e) {
    var rippleDiv = $('<div class="ripple" />'),
      rippleSize = 60,
      rippleOffset = $(this).offset(),
      rippleY = e.pageY - rippleOffset.top,
      rippleX = e.pageX - rippleOffset.left,
      ripple = $('.ripple');

    rippleDiv.css({
      top: rippleY - (rippleSize / 2),
      left: rippleX - (rippleSize / 2),
      background: $(this).attr("ripple-color")
    }).appendTo($(this));

    window.setTimeout(function() {
      rippleDiv.remove();
    }, 1900);
  });
});

//question card ends here




var $cell = $('.card');
//open and close card when clicked on card
$cell.find('.js-expander').click(function() {

  var $thisCell = $(this).closest('.card');

  if ($thisCell.hasClass('is-collapsed')) {
    $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed').addClass('is-inactive');
    $thisCell.removeClass('is-collapsed').addClass('is-expanded');
    
    if ($cell.not($thisCell).hasClass('is-inactive')) {
      //do nothing
    } else {
      $cell.not($thisCell).addClass('is-inactive');
    }

  } else {
    $thisCell.removeClass('is-expanded').addClass('is-collapsed');
    $cell.not($thisCell).removeClass('is-inactive');
  }
});

//close card when click on cross
$cell.find('.js-collapser').click(function() {

  var $thisCell = $(this).closest('.card');

  $thisCell.removeClass('is-expanded').addClass('is-collapsed');
  $cell.not($thisCell).removeClass('is-inactive');

});


var i = 0;
// var A = 0;
		var tag = document.getElementById("text");
		var html = document.getElementById("text").innerHTML;
		var attr = tag.setAttribute("data", html);
		var txt = tag.getAttribute("data");
		var speed = 170;

		function typeWriter() {
		  if (i <= txt.length) {
		    document.getElementById("text").innerHTML = txt.slice(0 , i + 1);
		    i++;
		    setTimeout(typeWriter, speed);
		  }
		    //console.log(document.getElementById("text").innerHTML);
		}

typeWriter();

    