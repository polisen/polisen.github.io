<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="google" content="notranslate" />
  <meta http-equiv="Content-Language" content="en_US" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Fishburne</title>
  <meta name="description" content="hug + hack = infinity">
  <meta name="author" content="jankenpopp, zombectro">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  <link href="/rss" rel="alternate" type="application/rss+xml" title="windows93" />

  <link rel="stylesheet" href="/c/sys42.css?v=1511823985">
  <link rel="stylesheet" href="/c/sys/skins/w93.css?v=1421337565" id="w93_skin">
  <link rel="stylesheet" href="/c/sys/sprites.css?v=1421338149">

  <!--[if lt IE 9]>
    <script src="/d/libs/html5shiv.js"></script>
    <script src="/d/libs/aight.js"></script>
  <![endif]-->

  <!--[if lt IE 8]>
  <script>alert("Old Internet Explorer detected!!!\n\nJust... update your browser, please...\nDo it for you!\nIf you can't, harass the person who can do it for you")</script>
  <![endif]-->
</head>


  <style>

 html, body {
  overflow: hidden;
background-color: #000;
}

div {
position: absolute;
top: 0px;
left: -5px;
}


@font-face {
  font-family: 'fishburne';
  src: local('impactreg'), url('font/fishburne.ttf') format('truetype');
}



#fishburne{
background-image:  url('img/fishburne.png');
background-repeat:  no-repeat;
background-size: contain;
background-position: center center;
}

h1, h2{

color: #fff;
text-shadow: 0px 0px 10px #000;
font-family: 'fishburne';
      -webkit-text-stroke: 1px black;
      text-stroke: 1px black;
      text-shadow:
         -1px -1px 0 #000,
          1px -1px 0 #000,
          -1px 1px 0 #000,
           1px 1px 0 #000;

text-align: center;
}

h1{
 position: absolute;
 margin: auto;
 left: 1%;
 right: 1%;
  top:4%;
font-size: 15vh;

}

h2{
 position: absolute;
 margin: auto;
 left: 1%;
 right: 1%;
  bottom:8%;
font-size: 7vh;

}

  </style>



<body>

	<div class="fullscreen">
	<canvas id="q">Sorry Browser Won't Support</canvas><br><br>
	</div>
<script>



(function() {
    var canvas = document.getElementById('q'),
            context = canvas.getContext('2d');

    // resize the canvas to fill browser window dynamically
    window.addEventListener('resize', resizeCanvas, false);

    function resizeCanvas() {
      width = window.innerWidth;
      height = window.innerHeight;
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
      yPositions = [];
      for (var i = 0, l = 300; i < l; i++) {
          yPositions.push(-Math.round(Math.random() * l))
      }
      /**
      * Your drawings need to be inside this function otherwise they will be reset when
      * you resize the browser window and the canvas goes will be cleared.
      */
      drawStuff();
    }
    resizeCanvas();

    function drawStuff() {
            // do your drawing stuff here
    }
})();


function getRandom(a) {
  return a[Math.floor(Math.random()*a.length)]
}
function chance (p) { return (Math.random() * 100 >= (p || 50)) ? false : true }

var charcod = ['0','1','2','3','4','5','6','7','8','9',
'Ɛ',
'ᔭ',
'Ɫ'
];
var width ;
var height;
/*
$(document).ready(function(){*/

  var s=window.screen;
  width = window.innerWidth;
  height = window.innerHeight;
  var yPositions = [];
  for (var i = 0, l = 300; i < l; i++) {
      yPositions.push(-Math.round(Math.random() * l))
  }
  var ctx=q.getContext('2d');

  var draw = function () {
    ctx.fillStyle='rgba(0,0,0,.06)';
    ctx.shadowColor = 'rgba(0,0,0,1)';
    ctx.fillRect(0,0,width,height);

    ctx.font = '10pt monospace';
    ctx.shadowColor = 'rgba(70,255,0,0.8)';
    ctx.shadowOffsetX = 0;
    ctx.shadowOffsetY = 0;
    ctx.shadowBlur = 15;
    yPositions.map(function(y, index){
      text =  chance(30) ?
              getRandom(charcod) :
              String.fromCharCode(1e2+Math.random()*50 + 12352);
        //console.log(text);
      x = (index * 12)+10;
      ctx.fillStyle='#c3ff00';
      ctx.fillText(text, x, y);
      ctx.fillStyle='rgba(234,255,165,'+Math.random()*0.8+')';
      ctx.fillText(text, x, y);
    	if(y > 100 + Math.random()*1e4) {
    	  yPositions[index]=0;
    	}
    	else {
        yPositions[index] = y + 12;
    	}
    });

  };

  RunMatrix();
  function RunMatrix(){
    if(typeof Game_Interval != "undefined") clearInterval(Game_Interval);
  	Game_Interval = setInterval(draw, 60);
  }
  function StopMatrix() {
  clearInterval(Game_Interval);
  }

/*})*/
</script>



<div id="fishburne" class="fullscreen animated flip"></div>
<h1 id="what" class="animated bounceInRight">WHAT IF I TOLD YOU</h1><h2 id="quote" class="animated bounceInLeft"></h2>



<script>


  function random(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }


  var myQuote = -1;

  var quoteList = [
    "YOU CAN EAT WITHOUT POSTING IT ON INSTAGRAM"
    ,"YOU'VE LOST EVERY GAME OF TETRIS YOU PLAYED"
    ,"YOU DON'T NEED TO TYPE WWW"
    ,"I DON'T HAVE FACEBOOK"
    ,"THE REASON YOU THINK ALL MEMES ARE OVER USED IS BECAUSE YOU SPEND TOO MUCH TIME ON YOUR COMPUTER"
    ,"THAT SOYLENT GREEN IS MADE UP OF PEOPLE"
    ,"MY GLASSES AREN'T HELD UP BY MY EARS"
    ,"I'M NOT MADE WITH FLASH"
    ,"'FISHBURNE' MEANS 'PUT UR BOLLOXXX ON' IN FRENCH"
    ,"I'M BRAIN FUCKED SPINING ALL THE TIME"
    ,"I DON'T GET A SINGLE FUCK OF THE LETTERS BEHIND ME"
    ,"JANKENPOPP'S NEW ALBUM IS IN THE TRASH"
    ,"I DO COLLECT LASERDISCS"
    ,"1000 VIEWS ON YOUTUBE GIVES YOU 1€"
    ,"THE BEATLES AS THEY WERE PRESENTED<BR>TO US NEVER EXISTED"
    ,"CHUCK NORRIS IS A GINGER"
    ,"CATS HAVE THEIR OWN INTERNET<BR>FULL OF PICTURES OF US"
    ,"DACING BABY IS MY REAL FATHER"
    ,"'SWAG' MEANS 'SECRETLY WE ARE GAYZ'"
    ,"NOBODY USE QRCODES"
    ,"I TAKE MY SELFIES WITH AN INVISIBLE CAMERA"
    ,"TIGER WOOD IS GAY"
    ,"WINNERS DON'T USE DRUGS"
    ,"WINDOWS 93 IS A COMMERCIAL FOR A MOVIE THAT DOESN'T EXIST"
  ]





  function whatIf(){

    myOldQuote = myQuote;

    while (myQuote == myOldQuote){
      myQuote = random(quoteList);
    }

    document.getElementById('quote').innerHTML = myQuote;

  };

  whatIf();

  //document.body.onclick = whatIf;
  document.body.onclick = function(){window.location.reload()};

</script>



</body></html>
