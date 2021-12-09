<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Galgje</title>
</head>
<body>

<div class="container">
<h1 class="text-center"> Hangman - AOT editie</h1>
<div class="float-center"> Foute letter: <span id='mistakes'>0</span> of <span id='maxWrong'></span></div>
<div class="text-center">
  <img id='hangmanPic' src="./images/galgje.png" alt="">
  <p> Gok een character van Attack on Titan-</p>
  <p id="wordSpotlight"> De woord is hier</p>
  <div id="toetsenboord"></div>
    <button class="btn btn-info" onClick="reset()">Opnieuw spelen</button>
    </div>
   </div>

<script src='./js/galgje.js'></script>
    
</body>
</html>