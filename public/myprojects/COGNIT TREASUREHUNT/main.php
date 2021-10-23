<?php
session_start();
if($_SESSION["username"]==null)
{
     header('Location: /treasurehunt/index.html');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sherlock</title>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	  	  <link rel="stylesheet" type="text/css" href="./css/bg.css">
  	<script type="text/javascript" src="./js/script.js"></script>


	<link rel="stylesheet" type="text/css" href="./css/material.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="./js/material.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">

	body{
		height: 100vh;
		width: 100vw;
		overflow: hidden;
		background: no-repeat;
	
	}


	body {
		    background: linear-gradient(45deg, #FC6447, #FA4150,#F5035D);
	}
	.card {
				
		display: block;
		margin: auto;
		margin-top: 5vh;
		width: 50vw;
		z-index: 1000;
  
		

	}


	.mdl-card__title{
		height: 40vh;
		background-image: url('./clues/1.jpg');
		background-size: 100% 100%;
		padding-bottom: 0px;
		border: 5px solid white;
	}

	.mdl-card__title-text{

		    height: 30px;
    width: 100px;
    background-color: white;
    margin-left: auto;
    margin-right: auto;
	}

	.level-text {
		margin:auto;
	}

	.mdl-card__supporting-text {
		margin:auto;
    height: 15vh;
		text-align: justify;
		font-size: 1em;
	}

	.mdl-textfield {
		margin-left: 3vw;
	}

	.options {
		float: right;
		margin-bottom: 2vh;
	}

	.mdl-menu__container{
		margin-bottom: 40px;
	}

	.mdl-button{
		color: white;
	}

@media only screen and (max-width: 768px) {
    .card {
        width: 100%;
    }

     .mdl-card__title {
            width: 60vh;
    margin: auto;
   
    }
}

@media only screen and (min-width: 1000px) {
      .mdl-card__title {
            width: 60vh;
    margin: auto;
    }
}


@media only screen and (min-width: 1368px){

  .card {
        
    display: block;
    margin: auto;
    margin-top: 10vh;
    width: 45vw;
    z-index: 1000;
    

  }
}



	</style>
</head>
<body>
<body>

<ul id="scene">
  <li class="layer" id="specks" data-depth="0.1"></li>
  <li class="layer" id="layer-1" data-depth="0.15">
    <div class="img" id="img-1"></div>
  </li>
  <li class="layer" id="layer-2" data-depth="0.25">
    <div class="img" id="img-2"></div>
  </li>
  <li class="layer" id="layer-3" data-depth="0.45">
    <div class="img" id="img-3"></div>
  </li>
</ul>

<div  class="card mdl-card mdl-shadow--16dp">
  <div class="mdl-card__title" id="image">
    <h2 class="mdl-card__title-text"><p class="level-text">Level <span id="levelno">1</span></p></h2>
  </div>
  <div id="question" class="mdl-card__supporting-text">
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
  </div>
  <div class="mdl-card__actions mdl-card--border">


  <center>
   <form action="#">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" id="answer" type="text" id="sample3" required>
    <label class="mdl-textfield__label" for="sample3">Answer...</label>
  </div>
  <button onClick="check()"  style="background-color:#fc5b4a"class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
  <i class="material-icons">send</i>
</button>
</form>

</center>
<br><br>


<img id="game" style="width: 4vh;margin-left:10%;" src="./img/game.svg">
<div class="mdl-tooltip mdl-tooltip--top" for="game">Play</div>
<img id="crown" disabled="true" style="width: 4.5vh;margin-left: 5%;" src="./img/crown.svg">
<div class="mdl-tooltip mdl-tooltip--top" for="crown">Coming Soon</div>


<button id="demo-menu-top-right"
        class="options mdl-button mdl-js-button mdl-button--icon">
  <i class="material-icons" style="color:#fc5b4a">more_vert</i>
</button>

<ul class="mdl-menu mdl-menu--top-right mdl-js-menu mdl-js-ripple-effect"
    data-mdl-for="demo-menu-top-right">
  <li onClick="logout()" class="mdl-menu__item">Logout</li>
  <li id="show" class="mdl-menu__item">Help</li>
</ul>


 
  <dialog class="mdl-dialog">
    <h4 class="mdl-dialog__title">Help</h4>
    <div class="mdl-dialog__content">
      <p>
        Uh... It's really simple, type the answers in the text field and press the button next to it. If you are stuck at level one the answer is cognit.
      </p>
    </div>
    <div class="mdl-dialog__actions">
      <button type="button" class="mdl-button close">Agree</button>
    </div>
  </dialog>
  <script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
  </script>


  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
     
    </button>
  </div>
</div>

</body>
</html>