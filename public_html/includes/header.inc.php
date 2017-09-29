<?php
/*  Set the theme here, not per page
  Options are:  "redblackgold"  UMD Colors
          "neon"      Neon Colors */

?>

<!DOCTYPE html>
<html class="no-js">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">

  <head>

<meta property="og:image" content="http://img.terpthon.org/header_imgs/rebrand_logo_small.jpg"/>
<meta property="og:description" content="Terp Thon is a student-run organization at the University of Maryland that raises funds and awareness For The Kids at Children’s National Health System, our local Children’s Miracle Network Hospital. As leaders of the Miracle Network Dance Marathon movement, we unite our campus and local community to inspire hope and healing in the children and their families at Children’s National." />
<!--<meta property="og:url" content="http://www.terpthon.org"/ >-->
<meta property="og:title" content="Terp Thon"/ >
<meta property="og:type" content="website"/>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Terp Thon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main2.css">
    <!--<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,700,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>-->
<!--
    <script type="text/javascript" src="/js/vendor/jquery-1.10.1.min.js" ></script>
-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
    <link rel="stylesheet"href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/pepper-grinder/jquery-ui.css"/>

    <!--Load Bootstrap css-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!--load font awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <?php
    if(isset($PAGE_SETTINGS["css"])) {
      foreach($PAGE_SETTINGS["css"] as $css)
        echo '<link rel="stylesheet" type="text/css" href="'.$css.'" />'."\n";
    }
    ?>
    <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>

<style>

.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
  line-height: 40px
}
.nav>li>a {
  padding: 20px 7px;
}
/*
.navbar-brand {
  line-height: 20px
}
.navbar-nav li a {
 line-height: 50px;
 font-family: 'GothamRounded-Bold'

}
.nav-link {
font-weight:bold;
font-size: 17px;
}
.navbar-default {
  background-color: #a7a9ac;
  border-color: #ed1d24;
}
.navbar-default .navbar-brand {
  color: #060606;
}
.navbar-default .navbar-brand:hover, .navbar-default .navbar-brand:focus {
  color: #ffffff;
}
.navbar-default .navbar-text {
  color: #060606;
}
.navbar-default .navbar-nav > li > a {
  color: #060606;
  padding: 5px;
  font-size: 15px;
}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
  color: #ffffff;
}
.navbar-default .navbar-nav > li > .dropdown-menu {
  background-color: #a7a9ac;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
  color: #060606;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #ffffff;
  background-color: #ed1d24;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > .divider {
  background-color: #a7a9ac;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
  color: #ffffff;
  background-color: #ed1d24;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
  color: #ffffff;
  background-color: #ed1d24;
}
.navbar-default .navbar-toggle {
  border-color: #ed1d24;
}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
  background-color: #ed1d24;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #060606;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #060606;
}
.navbar-default .navbar-link {
  color: #060606;
}
.navbar-default .navbar-link:hover {
  color: #ffffff;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #060606;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffffff;
    background-color: #ed1d24;
  }*/
}

</style>

  <body>
    <nav class="navbar-nav navbar-default navbar-fixed-top">
      <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="http://terpthon.org/"><img src="//img.terpthon.org/header_imgs/transparent_rebrand_logo.gif" height="60px"></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <!--<div class="navbar-header">
          <a href="/index.php" class="pull-left"><img src="//img.terpthon.org/header_imgs/transparent_rebrand_logo.gif" height="90px" style="padding:10px"></a>
        </div>-->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav" style="padding:20px 0px 10px; font-family:GothamRounded-Book; text-size:16px;">
            <li class="dropdown"><a style=""class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">ABOUT</a>
              <ul role="menu" class="dropdown-menu">
                <li><a href="/whatis.php" class="nav-link">What is Terp Thon?</a></li>
                <li><a href="/thecause.php" class="nav-link">The Cause</a></li>


                <li><a href="/miraclekids.php" class="nav-link">Miracle Kids</a></li>
                <li><a href="/faq.php" class="nav-link">FAQ</a></li>
                <li><a href="/contact.php" class="nav-link">Contact</a></li>
              </ul>
            </li>
            <li class="dropdown"><a style="" class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">HISTORY</a>
              <ul class="dropdown-menu">
                   <li><a href="/exec_history.php" class="nav-link">Executive Board History</a></li>
                  <li><a href="/comma_club_history.php" class="nav-link">Comma Club History</a></li>
                  <li><a href="/agathos.php" class="nav-link">Agathos Members</a></li>
              </ul>
            </li>
            <li class="dropdown"><a style="" class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">GET INVOLVED</a>
              <ul class="dropdown-menu">
                <li><a href="/get_involved_dancers.php" class="nav-link">Dancers</a></li>
                <li><a href="/student_orgs.php" class="nav-link">Student Organizations</a></li>
                <li><a href="/greeks.php" class="nav-link">Greeks</a></li>
                <li><a href="/mini_marathons.php" class="nav-link">Mini Marathons</a></li>
                <li><a href="/alumni.php" class="nav-link">Alumni</a></li>
                <li><a href="/faculty.php" class="nav-link">Faculty</a></li>
              </ul>
            </li>
            <li class="dropdown"><a style="" class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">EVENTS</a>
              <ul class="dropdown-menu">
               <li><a href="/upcoming_events.php" class="nav-link">Upcoming Events</a></li>
                <li><a href="/terp_thon_DM.php" class="nav-link">Terp Thon</a></li>
                <!--<li><a href="/colorwars.php" class="nav-link">Color Wars</a></li>-->
                <li><a href="/life_in_color.php" class="nav-link">Life in Color 5K</a></li>
                <!--<li><a href="/Miracle_Madness.php" class="nav-link">Miracle Madness</a></li>
                <li><a href="/push_day2.php" class="nav-link">Day of Miracles</a></li>
                <li><a href="/push_day3.php" class="nav-link">Sign Up To Save Lives</a></li>-->
                <!--<li><a href="/calendar.php" class="nav-link">Calendar</a></li>-->
              </ul>
            </li>
            <li class="dropdown"><a style="" class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">FUNDRAISING</a>
              <ul class="dropdown-menu">
                <li><a href="/fundraising_tips.php" class="nav-link">Fundraising Resources</a></li>
                <li><a href="/where_money.php" class="nav-link">How Donations Help</a></li>
               <!-- <li><a href="/miracle_donors.php" class="nav-link">Miracle Donors</a></li>-->
                <li><a href="/all_levels.php" class="nav-link">Dancer Fundraising Levels</a></li>
                <li><a href="/donor_levels.php" class="nav-link">Donor Levels</a></li>
              </ul>
            </li>
            <li class="dropdown"><a style="" class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">PARTNERS</span></a>
              <ul class="dropdown-menu">
                <li><a href="/sponsors.php" class="nav-link">Sponsors</a></li>
                <li><a href="/university_supporters.php" class="nav-link">University Supporters</a></li>
              </ul>
            </li>
            <li><a style="color:#FFD113" class="nav-link" target="_blank" href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1581"><b>DONATE</b></span></a>
            </li>
            <li><a style="color:#FFD113" class="nav-link" target="_blank" href="http://ter.ps/ttshop"><b>STORE</b></span></a>
            </li>
           <!-- <li><a style="color:#FFD113" class="nav-link" target="_blank" href="https://events.dancemarathon.com/event/terpthon/"><b>REGISTER</b></span></a>
            </li>-->
          </ul>
          <div class="navbar-text navbar-right social" style="padding-top:10px">
            <ul>
              <li><a href="https://www.facebook.com/FTKTerpThon"><i class="fa fa-lg fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/Terp_Thon"><i class="fa fa-lg fa-twitter"></i></a></li>
              <li><a href="http://instagram.com/terp_thon"><i class="fa fa-lg fa-instagram"></i></a></li>
              <li><a href="http://www.youtube.com/user/terpthonUMD"><i class="fa fa-lg fa-youtube"></i></a></li>
              <li><a href="http://terpthon.tumblr.com/"><i class="fa fa-lg fa-tumblr"></i></a></li>
              <li><a href="https://www.linkedin.com/company/10051107?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A1-1-1%2CtarId%3A1436753424027%2Ctas%3Aterp%20thon%20"><i class="fa fa-lg fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>


      </div>
    </div>
    </nav>
  </body>
<div style="padding-bottom:70px"></div>
