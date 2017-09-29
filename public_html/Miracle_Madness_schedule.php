<?php
$PAGE_SETTINGS["active"] = 'faculty';
include("includes/header.inc.php");
?>
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
            color: #000;
            background-color: #fff;
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
                                                                                                                          background-image: u
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
   
.text {
    color:black;   
}	
                                                                                                                                                                                                                                                                                                                                                      .row-padding {
                                                                                                                                                                                                                                                                                                                                                      padding-bottom:50px;
                                                                                                                                                                                                                                                                                                                                                      }
                                                                                                                                                          
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                      </style>


<div class="jumbotron wide">
    <div class="transbox_one_line_header">
        <h1>Miracle Madness Schedule</h1>
    </div>  
</div>

                                                                                                                                                                                                                                   
                                                                                                                                                                                                                                                                                                                                                      <img class="img-responsive center-block" src="//img.terpthon.org/events/MMABIGGER.png" style="height:200px;padding:10px">
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
		<li class="yellow"><a href="#mon"><h2 class="text">MONDAY</h2></a></li>
		<li class="red"><a href="#tues"><h2 class="text">TUESDAY</h2></a></li>        
		<li class="yellow"><a href="#wed"><h2 class="text">WEDNESDAY</h2></a></li>
		<li class="red"><a href="#thurs"><h2 class="text">THURSDAY</h2></a></li>
		<li class="yellow"><a href="#fri"><h2 class="text">FRIDAY</h2></a></li>                        
	</ul>
</div>																																																																																						  
                                                                                                                                                                                                                                                                                                                                                      </div><!-- /.container-fluid -->
                                                                                                                                                                                                                                                                                                                                                      </nav>
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       <div class="wrapper">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="row" id="mon" >
                                                                                                                                                                                                                                                                                                                                                      <div class="clip-text clip-text_one">MONDAY</div>
                                                                                                                                                                                                                                                                                                                                                      <div class="row-padding">        
<h1 class="red">Hornbake Takeover</h1>
                                                                                                                                                                                                                                                                                                                                                      <h4> Hornbake Plaza: 11am to 3pm</h4>        
                                                                                                                                                                                                                                                                                                                                                      <h4>Check out our giant takeover of Hornbake Plaza! </h4>
<h4>Come by to find out more about our Cause and how you can get involved <br>with the Bigger, Bolder movement sweeping the campus to help our Stronger Miracle Kids!  </h4>
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                  <h1 class="yellow">Fall in Love With FTK</h1>
                                                                                                                                                                                                                                                                                                                                                      <h4>Hornbake Plaza: 2pm to 4pm </h4>

<h4> Stop by to buy some incredible baked goods For The Kids! </h4> 

<h4> Get rid of some of your exam stress by smashing some pumpkins or a pie in the face! </h4>                                                                                                                                                                                                                                                                                                                                                   
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div>
                                                                                                                                                                                                                                                                                                                                                      </div>   
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                      <div class="row" id="tues">
                                                                                                                                                                                                                                                                                                                                                      <div class="clip-text clip-text_one img-responsive">TUESDAY</div>
                                                                                                                                                                                                                                                                                                                                                      <div class="row-padding">
                                                                                                                                                                                                                                                                                                                                                      <h1 class="red">Scavenger Hunt</h1>
                                                                                                                                                                                                                                                                                                                                                      <h4>UMD Campus: 11am to 3pm</h4>        
                                                                                                                                                                                                                                                                                                                                                      <h4>Check out Terp Thon's social media throughout the day to find clues about our Miracle Kids!</h4>
                                                                                                                                                                                                                                                                                                                                                      <h4>Be some of the first people to solve the clues and arrive at the correct location to get prizes! </h4>
 
<h1 class="yellow">Tabling and Registration Hub</h1>
                                                                                                                                                                                                                                                                                                                                                      <h4>Stamp and SORC: 11am to 3pm</h4>        
                                                                                                                                                                                                                                                                                                                                                      <h4>Come learn more about Terp Thon, our Cause, and our Miracle Kids!</h4>
                                                                                                                                                                                                                                                                                                                                                      <h4>Take time to register either as an individual or as part of a team with some friends! </h4>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         </div>
                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                      <div class="row" id="wed"><div class="clip-text clip-text_one">WEDNESDAY</div>
                                                                                                                                                                                                                                                                                                                                                      <div class="row-padding">
                                                                                                                                                                                                                                                                                                                                                      <h1 class="red">Bloodmobile</h1>
                                                                                                                                                                                                                                                                                                                                                      <h4>Cole Field House: 11am to 3pm</h4>
                                                                                                                                                                                                                                                                                                                                                      <h4>Join us to donate blood to benefit Children's National, our local Children's Miracle Network Hospital in DC. </h4>

<h4> While you are waiting, sign up for Terp Thon, learn about our Miracle Kids, and find out some of our best fundraising tips! </h4> 
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                      <h1 class="yellow">Stamp Tabling</h1>
                                                                                                                                                                                                                                                                                                                                                      <h4>Stamp: 11am to 3pm</h4>        
                                                                                                                                                                                                                                                                                                                                                      <h4>Stop on by to see information about our Miracle Kids and get pumped for Day of Miracles in just 24 hours on Thursday!</h4>
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                      <h1 class="red">Dancer Meeting</h1>
                                                                                                                                                                                                                                                                                                                                                      <h4> JMZ 0220: 7pm</h4>        
                                                                                                                                                                                                                                                                                                                                                      <h4> Increase your involvement while checking out our best fundraising tips so you can help us raise $100,000 in just 24 hours!</h4>
                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                      <div class="row" id="thurs"><div class="clip-text clip-text_one">THURSDAY</div>
                                                                                                                                                                                                                                                                                                                                                      <div class="row-padding">
                                                                                                                                                                                                                                                                                                                                                      <h1 class="red">DAY OF MIRACLES</h1>

<h4> Help Terp Thon raise $100,000 in 24 hours For The Kids! #OneDay100K </h4>
<h4> Day of Miracles starts at 12pm Thursday and ends 12pm Friday!</h4>
<br>
                                                                                                                                                                                                                                                                                                                                                      <h4>Stamp and McKeldin: 12pm to 4pm</h4>
                                                                                                                                                                                                                                                                                                                                                      <h4>Check out our tabling at either Stamp or McKeldin to donate to our canning efforts, <br>grab a flyer of information, and find out how to increase your fundraising efforts.</h4>
<br>
<h4>Xfinity: 5pm to 7pm</h4>

<h4> Come out and support Terp Thon's canning for donations before the basketball game <br>around Xfinity and outside the diners. </h4>                                                                                                                                                                                                                                                                                                                   </div>
                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                      <div class="row" id="fri"><div class="clip-text clip-text_one">FRIDAY</div>
                                                                                                                                                                                                                                                                                                                                                      <div class="row-padding">
                                                                                                                                                                                                                                                                                                                                                      <h1 class="red"> Thank You Friday</h1>

<h4> Take time to thank all of your amazing donors for supporting  you and your efforts for Day of Miracles! </h4>
                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                      
                                                                                                                                                                                                                                                                                                                                                      </div>
<?php
include("includes/footer.inc.php");
?>