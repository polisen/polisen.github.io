<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="google" content="notranslate" />
  <meta http-equiv="Content-Language" content="en_US" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Defrag</title>
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
<body class="skin_base noscroll">
<style type="text/css" media="screen">
  html {
    overflow: hidden;
  }
  body {
    margin: 0px;
    padding: 0px;
    position: absolute;
    display: block;
    /*background-color: #c0c0c0;
    background-image: none;
    color: #000;*/
    top: 1px;
    left: 1px;
    overflow: hidden;
  }
  div#stuff {
    padding-left: 20px;
  }
  div#boutons {
    position: absolute;
    left: 530px;
    top: 433px;
  }
</style>
  <!-- Lets make a simple snake game -->
  <canvas id="canvas" width="640" height="400"></canvas>

  <div id="stuff">
    <p id="infos">Welcome to Defrag !</p>
    <canvas id="canvasBar" style="width:490px;height:20px;background-color:#333;"></canvas>
    <p id="pourcentage">Click 'Start' & use 'Arrows' to mess with the amount of fragmentation in your file system.</p>

    <div id="boutons">
      <button type="button" id="start">
        Start
      </button>
      <button type="button" id="pause">
        Pause
      </button>
    </div>

  </div>

  <script src="/c/sys42.js?v=1433594052"></script>

  <script src="/c/libs/jquery.min.js" type="text/javascript"></script>
  <script>

	  /*
	    DEFRAG - a jquery snake, by @jankenpopp
	    © 2014 WTFPL – Do What the Fuck You Want to Public License.
	  */

    var imageSnake = new Image();
    imageSnake.src = 'snake.gif';
    var imageEmpty = new Image();
    imageEmpty.src = 'empty.gif';
    var imageFull = new Image();
    imageFull.src = 'full.gif';

    $(document).ready(function() {

      var playPause = 0;
      var nokiaTune = new Howl({
        //urls: ['/c/sounds/Groovy_Blue_Nokia_3310_Ringtone_28.mp3'],
        urls: ['3310.ogg'],
        loop: true,
        volume: 0.3
      });

      $('#start, #pause').click(function() {
        if (this.id == 'start') {
          playPause = 1;
          $("p#infos").text("Defragmenting file system...");
          nokiaTune.play();
        }
        else if (this.id == 'pause') {
          playPause = 0;
          $("p#infos").text("Defragmention paused... click 'Start' to continue the process.");
          nokiaTune.pause();
        }
      });

      //Canvas stuff
      var canvas = $("#canvas")[0];
      var ctx = canvas.getContext("2d");
      var w = $("#canvas").width();
      var h = $("#canvas").height();

      var canvasBar = $("#canvasBar")[0];
      var ctxB = canvasBar.getContext("2d");
      var wB = $("#canvasBar").width();
      var hB = $("#canvasBar").height();

      //Lets save the cell width in a variable for easy control
      var cw = 8;
      var ch = 10;
      var d;
      var food;
      var score;

      var pourcent = 0;
      var lastSteps = [];
      for (var i = 40 - 1; i >= 0; i--) {
        lastSteps[i] = [];
      };

      //Lets create the snake now
      var snake_array; //an array of cells to make up the snake

      function init() {

        for (var x = 80 - 1; x >= 0; x--) {
          for (var y = 40 - 1; y >= 0; y--) {
            lastSteps[y][x] = 1;
            ctx.drawImage(imageFull, x * cw, y * ch);
          };
        };
        lastSteps[0][0] = 0;
        pourcent = 1;
        canvasBar.width = canvasBar.width;

        d = "right"; //default direction
        create_snake();
        create_food(); //Now we can see the food particle
        //finally lets display the score
        score = 0;

        //Lets move the snake now using a timer which will trigger the paint function
        //every 60ms
        if (typeof game_loop != "undefined") clearInterval(game_loop);
        game_loop = setInterval(paint, 60);
      }
      init();

      function create_snake() {
        var length = 5; //Length of the snake
        snake_array = []; //Empty array to start with
        for (var i = length - 1; i >= 0; i--) {
          //This will create a horizontal snake starting from the top left
          snake_array.push({
            x: i,
            y: 0
          });
        }
      }

      //Lets create the food now
      function create_food() {
        food = {
          x: Math.round(Math.random() * (w - cw) / cw),
          y: Math.round(Math.random() * (h - ch) / ch),
        };
        //This will create a cell with x/y between 0-44
        //Because there are 45(450/10) positions accross the rows and columns
      }

      //Lets paint the snake now
      function paint() {

        if (playPause == 1) {

          if (pourcent == 3200) {

            parent.$alert({
              msg: "Congratulations ! <br>Your score is " + score + ".<br><br>Password is FUTUR1993",
              title: 'King of the day',
              img: 'c/sys/ico/trophy.gif'

            });

            playPause = 0;
          };

          //To avoid the snake trail we need to paint the BG on every frame
          //Lets paint the canvas now

          for (var x = 80 - 1; x >= 0; x--) {
            for (var y = 40 - 1; y >= 0; y--) {

              if (lastSteps[y][x] == 0) {
                ctx.drawImage(imageEmpty, x * cw, y * ch);
              }
              else {
                ctx.drawImage(imageFull, x * cw, y * ch);
              }

            };
          };

          //The movement code for the snake to come here.
          //The logic is simple
          //Pop out the tail cell and place it infront of the head cell
          var nx = snake_array[0].x;
          var ny = snake_array[0].y;
          //These were the position of the head cell.
          //We will increment it to get the new head position
          //Lets add proper direction based movement now
          if (d == "right") nx++;
          else if (d == "left") nx--;
          else if (d == "up") ny--;
          else if (d == "down") ny++;

          //Lets add the game over clauses now
          //This will restart the game if the snake hits the wall
          //Lets add the code for body collision
          //Now if the head of the snake bumps into its body, the game will restart

          if (nx == -1 || nx == w / cw || ny == -1 || ny == h / ch || check_collision(nx, ny, snake_array)) {
            //restart game
            //parent._data._apps.glitch.exec();
            //parent.$exe('glitch');
            //console.log(parent._data._apps);

            /*setTimeout(function() {
			  			//parent._93.cmd.glitch.stop();
			  			parent.$exe.stop('glitch');
						},800);*/

            init();

            //Lets organize the code a bit now.
            return;
          }


          //Lets write the code to make the snake eat the food
          //The logic is simple
          //If the new head position matches with that of the food,
          //Create a new head instead of moving the tail
          if (nx == food.x && ny == food.y) {
            var tail = {
              x: nx,
              y: ny
            };
            score++;
            //Create new food
            create_food();
          }
          else {
            var tail = snake_array.pop(); //pops out the last cell
            tail.x = nx;
            tail.y = ny;
          }
          //The snake can now eat the food.

          snake_array.unshift(tail); //puts back the tail as the first cell

          for (var i = 0; i < snake_array.length; i++) {
            var c = snake_array[i];
            //Lets paint 10px wide cells
            paint_cell(c.x, c.y);
          }

          //Lets paint the food
          paint_cell(food.x, food.y);
          //Lets paint the score
          //var score_text = "Score: " + score;
          //ctx.fillText(score_text, 5, h-5);

        };

      }

      //Lets first create a generic function to paint cells
      function paint_cell(x, y) {

        ctx.drawImage(imageSnake, x * cw, y * ch);

        if (lastSteps[y][x] == 1) {

          pourcent++;
          lastSteps[y][x] = 0;

          var value = Math.round((pourcent / 3200) * 100);
          $("p#pourcentage").text("" + value + "%");

          ctxB.fillStyle = "#00ffff";
          ctxB.fillRect(0, 0, pourcent / 3200 * 300, 150);

        };

      }

      function check_collision(x, y, array) {
        //This function will check if the provided x/y coordinates exist
        //in an array of cells or not
        for (var i = 0; i < array.length; i++) {
          if (array[i].x == x && array[i].y == y)
            return true;
        }
        return false;
      }

      //Lets add the keyboard controls now
      $(document).keydown(function(e) {
        var key = e.which;
        //We will add another clause to prevent reverse gear
        if (key == "37" && d != "right") d = "left";
        else if (key == "38" && d != "down") d = "up";
        else if (key == "39" && d != "left") d = "right";
        else if (key == "40" && d != "up") d = "down";
        //The snake is now keyboard controllable
      })

    })
  </script>


</body>

</html>
