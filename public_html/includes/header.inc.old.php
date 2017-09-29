<?php
/*	Set the theme here, not per page
	Options are:	"redblackgold" 	UMD Colors
					"neon"			Neon Colors	*/
?>

<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Terp Thon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

<?php
if(isset($PAGE_SETTINGS["css"])) {
	foreach($PAGE_SETTINGS["css"] as $css)
		echo '<link rel="stylesheet" type="text/css" href="'.$css.'" />'."\n";
}
?>

    <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body>
    <div class="container">
      <a href="/"><img id="logo" src="//img.terpthon.org/header_imgs/terpthon.png" class="img-responsive"></img></a>
      <ul class="navcontainer">
        <li id="nav_about">
          <a href="/whatis.php">About</a>
          <ul>
            <li><a href="/whatis.php">What is Terp Thon?</a></li>
            <li><a href="/thecause.php">The Cause</a></li>
            <li><a href="/exec_history.php">Executive Board</a></li>
          </ul>
        </li>
        <li id="nav_miraclekids"><a href="/miraclekids.php">Miracle Kids</a></li>
        <li id="nav_students">
          <a href="/students.php">Students</a>
    			<ul>
    			   <li><a href="/students.php">About</a></li>
				   <li><a href="/agathos.php">Agathos Members</a></li>
				   <li><a href="/canning.php">Canning</a></li>
    			   <li><a href="/register.php">Register</a></li>
    			   <li><a href="/donor_stewardship.php">Fundraising Levels</a></li>
    			   <li><a href="/fundraising_tips.php">Fundraising Tips</a></li>
    			   <li><a href="/fundraising_letter_generator.php">Letter Generator</a></li>
				   <li><a href="/miracle_maker.php">Miracle Maker</a></li>
    			</ul>
		    </li>
        <li id="nav_alumni"><a href="/alumni.php">Alumni</a></li>
        <li id="nav_faculty"><a href="/faculty.php">Faculty</a></li>		
        <li id="nav_sponsors">
          <a href="/sponsors.php">Sponsors</a>
    			<ul>
    			   <li><a href="/sponsors.php">Our Sponsors</a></li>
    			   <li><a href="/sponsors_info.php">Sponsorship Information</a></li>
    			   <li><a href="/sponsors_levels.php">Sponsorship Levels</a></li>
    			</ul>
		    </li>
        <li id="nav_media"><a href="/media.php">Media</a></li>
        <li id="nav_faq"><a href="/faq.php">FAQ</a></li>
        <li id="nav_contact"><a href="/contact.php">Contact</a></li>
        <li id="nav_donatenow"><a href="/donatenow.php">Donate Now</a></li>
      </ul>
    </div>

    <div class="container">
