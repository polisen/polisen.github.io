<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="google" content="notranslate" />
  <meta http-equiv="Content-Language" content="en_US" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Speech Synthesis</title>
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

<body class="skin_base">

  <style>
  #msg {
    font-size: 0.9em;
    line-height: 1.4em;
  }
  #msg.not-supported strong {
    color: #CC0000;
  }
  textarea, select {
    width: 96%;
  }
  input[type="range"] {
    width: 96%;
  }
  label {
    display: inline-block;
    float: left;
    width: 150px;
  }
  .option {
    margin: 1em 0;
  }

  button {
    display: inline-block;
    width: 96%;
    text-align: center;
  }
  </style>

  <div id="page-wrapper">

  <p id="msg"></p>

  <input type="text" name="speech-msg" id="speech-msg" x-webkit-speech>

	<div class="option">
		<label for="voice">Voice</label>
		<select name="voice" id="voice"></select>
	</div>
	<div class="option">
		<label for="volume">Volume</label>
		<input type="range" min="0" max="1" step="0.1" name="volume" id="volume" value="1">
	</div>
	<div class="option">
		<label for="rate">Rate</label>
		<input type="range" min="0.1" max="10" step="0.1" name="rate" id="rate" value="1">
	</div>
	<div class="option">
		<label for="pitch">Pitch</label>
		<input type="range" min="0" max="2" step="0.1" name="pitch" id="pitch" value="1">
	</div>

	<button id="speak">Speak</button>

</div>

  <script src="js/index.js"></script>

</body>
</html>
