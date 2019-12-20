<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="google" content="notranslate" />
  <meta http-equiv="Content-Language" content="en_US" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>DMG-01</title>
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
  <body class="app_emulator">

    <canvas id="origin" width="160" height="144">No Canvas Support</canvas>

    <script src="/c/sys42.js?v=1433594052"></script>

    <script src="play.js"></script>
    <script src="js/other/base64.js"></script>
    <script src="js/other/json2.js"></script>
    <script src="js/other/swfobject.js"></script>
    <script src="js/other/resampler.js"></script>
    <script src="js/other/XAudioServer.js"></script>
    <script src="js/other/resize.js"></script>
    <script src="js/GameBoyCore.js"></script>
    <script src="js/GameBoyIO.js"></script>

    <script>
    window.onresize = function() {
      //initNewCanvas();
      initNewCanvasSize();
    };
    </script>
  </body>
</html>
