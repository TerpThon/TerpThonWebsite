
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Terp Thon</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="dev.terpthon.org/public_html/css/main1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
	<link rel="stylesheet"href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/pepper-grinder/jquery-ui.css"/>
	<?php
	if(isset($PAGE_SETTINGS["css"])) {
		foreach($PAGE_SETTINGS["css"] as $css)
			echo '<link rel="stylesheet" type="text/css" href="'.$css.'" />'."\n";
	}
	?>
	<script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<style>
/* 
  Based from this article from Divya Manian - 
  http://nimbupani.com/using-background-clip-for-text-with-css-fallback.html
  */
  @import url(http://fonts.googleapis.com/css?family=Oswald:400,700);

  * {
  	margin: 0;
  	padding: 0;
  }

  *,
  :before,
  :after {
  	-webkit-box-sizing: border-box;
  	-moz-box-sizing: border-box;
  	box-sizing: border-box;
  }

  html,
  body {
  	min-height: 100%;
  }

  body {
  	font-family: 'Oswald', sans-serif;
  	color: #fff;
  	background-color: #000;
  }

  .wrapper {
  	text-align: center;
  }

  .title {
  	font-size: 2em;
  	position: relative;
  	margin: 0 auto 1em;
  	padding: 1em 1em .25em 1em;
  	text-align: center;
  	text-transform: uppercase;
  }
  .title:after {
  	position: absolute;
  	top: 100%;
  	left: 50%;
  	width: 240px;
  	height: 4px;
  	margin-left: -120px;
  	content: '';
  	background-color: #fff;
  }

  /* Clip text element */
  .clip-text {
  	font-size: 6em;
  	font-weight: bold;
  	line-height: 1;
  	position: relative;
  	display: inline-block;
  	margin: .25em;
  	padding: .5em .75em;
  	text-align: center;
  	/* Color fallback */
  	color: #fff;
  	-webkit-background-clip: text;

  	-webkit-text-fill-color: transparent;
  }

  .clip-text:before,
  .clip-text:after {
  	position: absolute;
  	content: '';
  }

  /* Background */
  .clip-text:before {
  	z-index: -2;
  	top: 0;
  	right: 0;
  	bottom: 0;
  	left: 0;
  	background-image: inherit;
  }

  /* Text Background (black zone) */
  .clip-text:after {
  	position: absolute;
  	z-index: -1;
  	top: .125em;
  	right: .125em;
  	bottom: .125em;
  	left: .125em;
  	background-color: #000;
  }

  /* Change the background position to display letter when the black zone isn't here */
  .clip-text--no-textzone:before {
  	background-position: -.25em 0;
  }

  .clip-text--no-textzone:after {
  	content: none;
  }

  /* Use Background-size cover for photo background and no-repeat background */
  .clip-text--cover,
  .clip-text--cover:before {
  	background-repeat: no-repeat;
  	-webkit-background-size: cover;
  	background-size: cover;
  }

  /* Background image from http://thepatternlibrary.com/ and http://lorempixel.com */
  .clip-text_one {
  	background-image: url(http://i.imgur.com/pJewmf8.jpg);
  }

  .clip-text_two {
  	background-image: url(http://i.imgur.com/KCa8KHY.png);
  }

  .clip-text_tree {
  	background-image: url(http://i.imgur.com/IuijDCu.png);
  }

  .clip-text_four {
  	background-image: url(http://i.imgur.com/tkKlzYz.jpg);
  }

  .clip-text_five {
  	background-image: url(http://i.imgur.com/4NiBrXs.gif);
  }

  .clip-text_six {
  	background-image: url(http://i.imgur.com/d2awmPs.jpg);
  }

  .clip-text_seven {
  	background-image: url(http://i.imgur.com/OzExPUf.png);
  }

  .clip-text_eight {
  	background-image: url(http://i.imgur.com/BFlh0FX.jpg);
  }

  .clip-text_nine {
  	background-image: url(http://i.imgur.com/2Nrxex6.jpg);
  }

  .clip-text_ten {
  	background-image: url(http://i.imgur.com/hCrSRTN.png);
  }

  .clip-text_eleven {
  	background-image: url(http://lorempixel.com/480/200/fashion/10/cc);
  	background-size: cover;
  }

  .clip-text_twelve {
  	background-image: url(http://lorempixel.com/480/200/people/7/cc);
  }

  .clip-text_thirteen {
  	background-image: url(http://lorempixel.com/480/200/food/5/cc);
  }

  .clip-text_fourteen {
  	background-image: url(http://lorempixel.com/480/200/city/9/cc);
  }

  .clip-text_fifteen {
  	background-image: url(http://i.imgur.com/kqvmLut.jpg);
  }

  .navbar .navbar-nav {
  display: inline-block;
  float: none;
  vertical-align: top;
}

.navbar .navbar-collapse {
  text-align: center;
}

  </style>

  <div class="content">
  	<div class="title"> <h1>FTK Week</h1></div>
  	<nav class="navbar navbar-default">
  	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#sun"><h2>SUNDAY</h2></a></li>      	
        <li><a href="#mon"><h2>MONDAY</h2></a></li>
        <li><a href="#tues"><h2>TUESDAY</h2></a></li>        
        <li><a href="#wed"><h2>WEDNESDAY</h2></a></li>
        <li><a href="#thurs"><h2>THURSDAY</h2></a></li>
        <li><a href="#fri"><h2>FRIDAY</h2></a></li>   
        <li><a href="#sat"><h2>SATURDAY</h2></a></li>                     
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


  	<div class="wrapper">
  		<div class="row">
  			<div class="clip-text clip-text_one" id="sun">SUNDAY</div>
  			<h3>YAY We're having a dodgeball tournament!</h3>
  		</div>
  		<div class="row" id="mon"><div class="clip-text clip-text_one">MONDAY</div></div>  		
  		<div class="row" id="tues"><div class="clip-text clip-text_one">TUESDAY</div></div>
  		<div class="row" id="wed"><div class="clip-text clip-text_one">WEDNESDAY</div></div>
  		<div class="row" id="thurs"><div class="clip-text clip-text_one">THURSDAY</div></div>
  		<div class="row" id="fri"><div class="clip-text clip-text_one">FRIDAY</div></div>
  		<div class="row" id="sat"><div class="clip-text clip-text_one">SATURDAY</div></div>
  	</div>

  </div>	
