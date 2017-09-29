
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
    background-image: url(//img.terpthon.org/header_imgs/FTK-Week-Background.png);
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

.top {
  text-transform: uppercase;
  font-size: 20px;
  text-align: center;
}

.large {
  font-size: 50px;
  color: #ED1D24;
  text-align: center;
}

.large1 { 
  font-size: 50px;
  color: #FFD113;
  text-align: center;
}

.red {
   color: #ED1D24;
}

.yellow {
  color: #FFD113;  
}



.center {
  margin:auto;
  max-width: 100%;
}

.row-padding {
  padding-bottom:50px;
}

h1 {
    text-transform: uppercase;
}

h4 {
  font-size: 22px;
}

  </style>

  <div class="content">
    <img class="img-responsive center-block" src="//img.terpthon.org/header_imgs/ftk-week-logo-white.png" style="max-width:510px; padding:10px">
    <div class="row center" style="padding-left:25px">
      <div class="col-sm-3 center-block">
        <h1 class="large">WHO</h1>
        <div class="top">Terp Thon invites all University of Maryland students, faculty, and their supporters to help us celebrate FTK Week.</div>
      </div>
      <div class="col-sm-3 center-block">
        <h1 class="large1">WHAT</h1>
        <div class="top">FTK Week is a week full of fun events dedicated to  raising awareness, funds, and support For The Kids at Children's National Health System. </div>
      </div>
      <div class="col-sm-3 center-block">
        <h1 class="large">HOW</h1>
        <div class="top">Check out the daily event details below to see the many ways you can celebrate with us.</div>
      </div>
      <div class="col-sm-3 center-block">
        <h1 class="large1">WHY</h1>
        <div class="top">As always, <br>
          <a href="//terpthon.org/miraclekids.php" style="font-size:25px"><u>FOR THE KIDS!</u></a></div>
      </div>               
    </div>

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
      <div class="row" id="sun">
        <div class="clip-text clip-text_one">SUNDAY</div>
        <div class="row-padding">   
          <h1 class="yellow">Dodge for a Cause</h1>
          <h4>Reckord Armory: Check-In Starts at 7:30pm </h4>
          <h4><a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.event&eventID=2218">Sign up</a> for our dodgeball tournament for prizes, food, and some friendly competition!</h4>
          <h4> The $12 registration fee will be credited to your Terp Thon 2016 fundraising efforts.</h4>
          <h4> Registration closes Saturday, Nov. 14th at 5pm</h4>
        </div>
      </div>

      <div class="row" id="mon" >
        <div class="clip-text clip-text_one">MONDAY</div>
        <div class="row-padding">        
          <h1 class="red">Honor our Miracle Kids</h1>
          <h4>Check out McKeldin Mall for Miracle balloons introducing our Cause and our Miracle Kids!</h4>
          <h4>Stop by the Health Center for more information about our Kids.</h4>

          <h1 class="yellow">$100 Fundraising Challenge</h1>
          <h4> Terp Thon dares you to make $100 worth of miracles For The Kids in 24 hours!</h4>        
          <h4>Send emails to past donors, family, friends, and classmates to help spread the word about why you dance FTK.</h4>
          <h4>Need more fundraising tips? Click <a href="http://terpthon.org/fundraising_tips.php">here!</a>
          <h4>Will you accept the challenge?</h4>

          <h1 class="red">Coldstone Fundraising Night benefiting Terp Thon</h1>
          <h4>Coldstone Creamery: 5 to 7pm</h4>        
          <h4>Enjoy some ice cream and help our Miracle Kids!</h4>

          <h1 class="yellow">Come get your Terp Thon Gear</h1>
          <h4> Outside Stamp Student Union: 11am to 3pm</h4>        
          <h4> We'll be selling Terp Thon merchandise, including our new PR shirts!</h4>
        </div>
      </div>   

      <div class="row" id="tues">
        <div class="clip-text clip-text_one img-responsive">TUESDAY</div>
          <div class="row-padding">
            <h1 class="red">Pie in the Face FTK</h1>
            <h4>Fraternity Row Fields: 3 to 5pm</h4>        
            <h4>Come pie your favorite Greek president, UMD athlete, or Terp Thon Exec Chair in the face!</h4>
            <h4>Donate $2 to pie with whipped cream and $7 to pie with mayonnaise.</h4>
            <h4>Want to get pied FTK? Email <a href="mailto:events@terpthon.org">events@terpthon.org</a>
          </div>
      </div>

      <div class="row" id="wed"><div class="clip-text clip-text_one">WEDNESDAY</div>
        <div class="row-padding">
            <h1 class="yellow">"No Dream Too Big, No Dreamer Too Small" Dream Tree</h1>
            <h4>Do you have a dream?</h4>
             <h4>Stop by our dream tree on Hornbake Plaza to add your dreams to the tree and help make the dreams of our Miracle Kids come true!</h4>

            <h1 class="red">Insomnia Cookies Fundraising Night benefiting Terp Thon</h1>
            <h4>Insomnia Cookies: 11am to 3am</h4>        
            <h4>What could be better than cookies and supporting Terp Thon?!</h4>

            <h1 class="yellow">Come get your Terp Thon Gear!</h1>
            <h4> Outside Stamp Student Union: 11am to 3pm</h4>        
            <h4> We'll be selling Terp Thon merchandise, including our new PR shirts!</h4>
        </div>
      </div>

      <div class="row" id="thurs"><div class="clip-text clip-text_one">THURSDAY</div>
          <div class="row-padding">
            <h1 class="red">Thank You Thursday</h1>
            <h4>Outside Stamp Student Union</h4>
            <h4>Come see us to pick up a thank you card to personalize and send to your donors!</h4>
        </div>
      </div>

      <div class="row" id="fri"><div class="clip-text clip-text_one">FRIDAY</div>
        <div class="row-padding">
          <h1 class="yellow"> Stay Tuned for an Exciting Surprise!</h1>
        </div>
      </div>

      <div class="row" id="sat"><div class="clip-text clip-text_one">SATURDAY</div>
        <div class="row-padding">
          <h1 class="red">Canning at UMD's Football Game vs. Indiana</h1>
          <h4>Canning is a fun and easy way to boost your fundraising. Sign up <a href="http://goo.gl/forms/103OmLy7wl ">here</a> to join us Saturday before the game!</h4>
        </div>
      </div>

    </div>

  </div>  
