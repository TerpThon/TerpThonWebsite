<?php
    $PAGE_SETTINGS["active"] = 'faculty';
    include("includes/header.inc.php");
    $PAGE_SETTINGS["js"] = array( "https://www.google.com/jsapi", "/js/colorwars_chart.js");
    include "includes/mysql.inc.php";
?>

<style>

.pink{
  background-color: #fc2a9a;
  height:100px;
}
.green{
    background-color: #02b25d;
  height:100px;
}
.blue{
  background-color: #0babe6;
  height:100px;
}
.yellow {
    background-color: #fef723;
  height:100px;
}
.purple {
  background-color: #896ab7;
  height:100px;
}
.orange{
  background-color: #f98319;
  height:100px;
}


.p{
  color: #fc2a9a;
}
.g{
 color: #02b25d;
}
.b{
  color: #0babe6;
}
.y{
  color: #fef723;
}
.pu {
  color: #896ab7;
}
.o{
  color: #f98319;
}

.p1{
  background-color: #fc2a9a;
}
.g1{
 background-color: #02b25d;
}
.b1{
  background-color: #0babe6;
}
.y1{
  background-color: #fef723;
}
.pu1{
  background-color: #896ab7;
}
.o1{
  background-color: #f98319;
}

.btn-new{
  color:white;
  background-color: #ED1D24;
}
.head{
  font-size: 75px;
  color:black;
  text-align: center;
  font-family: GothamRounded-Book;
}
.subhead{
  font-size: 50px;
  color:black;
  font-family: GothamRounded-Bold;
  text-align: center;
}

.sh {
  font-size: 30px;
  color:black;
  font-family: GothamRounded;
  text-align: center
}

.sh2 {
  font-size: 30px;
  color:black;
  font-family: GothamRounded-Book;
  text-align: center
}
.description{
  font-size: 24px;
  color:black;
  font-family: GothamRounded-Bold;
  //margin-bottom:30px;
  margin-top: 0px;
  text-align: center;
  max-height: 100px
}
.challenge{
  font-size: 60px;
  color:white;
  text-align: center;
  font-family: GothamRounded-Bold;
  background-color: black;
  letter-spacing: -6px;
}


.social_cw ul li {
    margin: 5px;
    list-style: none outside none;
    display: inline-block;
}

.social_cw i {
    width: 40px;
    height: 40px;
    font-size: 30px;
    border-radius: 50%;
    background-color: black;
    padding-top: 12px;
}

</style>

<div class="row">
  <div class="col-sm-2 pink"> <img class="img-responsive center-block" style="margin-top:5px"src="//img.terpthon.org/header_imgs/flame.png"></div>
  <div class="col-sm-2 yellow"><img class="img-responsive center-block" style="margin-top:5px"src="//img.terpthon.org/header_imgs/flame.png"></div>
  <div class="col-sm-2 green"><img class="img-responsive center-block" style="margin-top:5px"src="//img.terpthon.org/header_imgs/flame.png"></div>
  <div class="col-sm-2 blue"><img class="img-responsive center-block" style="margin-top:5px"src="//img.terpthon.org/header_imgs/flame.png"></div>
  <div class="col-sm-2 orange"><img class="img-responsive center-block" style="margin-top:5px"src="//img.terpthon.org/header_imgs/flame.png"></div>
  <div class="col-sm-2 purple"><img class="img-responsive center-block" style="margin-top:5px" src="//img.terpthon.org/header_imgs/flame.png"></div>
</div>
<div class="row">
  <img src="//img.terpthon.org/header_imgs/BW_copy.gif" class="img-responsive center-block" style="max-height:200px">
</div>
<!-- TODO: NEW -->
<div class="row">
      <div class="subhead">Color Wars Team Points <br>
        <span class="description">Check back every night for points updates!</span>
      </div>
      
      <div id="chart_div" class="col-md-12" style="height:300px; margin-left:auto; margin-right:auto">
      </div>
    </div>



  <div class="row">
    <div class="challenge">
      <span class="p">T</span>
      <span class="y">h</span>
      <span class="g">i</span>
      <span class="b">s </span>
      <span style="color:black">l</span>
      <span class="o"> W</span>
      <span class="pu">e</span>
      <span class="p">e</span>
      <span class="y">k</span>
      <span class="g">'</span>
      <span class="b">s </span>
      <span style="color:black">l</span>
      <span class="o"> C</span>
      <span class="pu">h</span>
      <span class="p">a</span>
      <span class="y">l</span>
      <span class="g">l</span>
      <span class="b">e</span>
      <span class="o">n</span>
      <span class="pu">g</span>
      <span class="p">e</span>
      <span class="y">s</span>
    </div>
</div>
<br>
    <div class="row">
    <div class="subhead">
      <div class ="p">Monday</div>
    </div>
    <div class="description">
      <div class="col-sm-12">
        <span class="sh">A special version of Miracle Kid Monday! <br>Find out which team Miracle Kids are partnered with your color team!</span>
      </div>
    </div>
    </div>

    <div class="row">
    <div class="subhead">
      <div class ="y">Tuesday</div>
    </div>
    <div class="description">
      <div class="col-sm-12">
        <span class="sh">Stay tuned for a special announcement featuring President Loh!</span>
      </div>
    </div>
    </div>

    <div class="row">
    <div class="subhead">
      <div class ="o">Wednesday</div>
    </div>
    <div class="description">
      <div class="col-sm-12">
        <span class="sh">Penny Wars! Stop by McKeldin Library or Stamp to participate in Penny Wars and win points for your color team!</span>
      </div>
    </div>
    </div>

    <div class="row">
    <div class="subhead">
      <div class ="b">Thursday</div>
    </div>
    <div class="description">
      <div class="col-sm-12">
        <span class="sh">Power Hour! Learn about our Rave hour and how the party <br>never stops at Terp Thon!</span>
      </div>
    </div>
    </div><br>

    <div class="row">
    <div class="subhead">
      <div class ="g">Friday</div>
    </div>
    <div class="description">
      <div class="col-sm-12">
        <span class="sh">Are you pumped for Terp Thon!! Get ready for the best day of the year!<br> Find your best colored accessories and get ready to party with a purpose!<br> Make sure to check your email for all the final details for tommorrow. </span><br><br>
      </div>
    </div>
    </div>
<br>
    <div class="row">
    <div class="subhead">
      <div class ="pu">Everyday Challenges</div>
    </div>
    <div class="description">
      <div class="col-sm-6">
        <span class="sh"><b>Challenge 1:</b> Earn 1 point for every dollar raised! Once you reach $500, the points you earn doubles!</span>
      </div>
      <div class="col-sm-6">
<span class="sh"><b>Challenge 2:</b> Earn 1 point per hashtag (#TTBlue2017, #TTGreen2017, #TTPink2017, #TTYellow2017, #TTOrange2017, #TTPurple2017)</span>
      </div>
    </div>
    </div>

  <br>

<!--  <hr> TODO: TEST - OLD
    <div class="row">
      <div class="subhead">Color Wars Team Points <br>
        <span class="description">Check back daily at 8pm for points updates!</span>
      </div>
      
      <div id="chart_div" class="col-md-12" style="height:300px; margin-left:auto; margin-right:auto">
      </div>
    </div><hr> -->

  
<hr>
  <div class="container">  
    <div style="width:500px; margin-left:auto; margin-right:auto">
      <a class="twitter-timeline" href="https://twitter.com/search?q=Terp%20OR%20Thon%20%40Terp_Thon%20OR%20%40TT_O_Orange" data-widget-id="694927107781033984">Tweets about Terp OR Thon @Terp_Thon OR @TT_O_Orange</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
  </div>

<div class="row">
  <div class="col-sm-2 pink"> <img class="img-responsive center-block" style="margin-top:5px"src="//img.terpthon.org/header_imgs/flame.png"></div>
  <div class="col-sm-2 yellow"><img class="img-responsive center-block" style="margin-top:5px"src="//img.terpthon.org/header_imgs/flame.png"></div>
  <div class="col-sm-2 green"><img class="img-responsive center-block" style="margin-top:5px"src="//img.terpthon.org/header_imgs/flame.png"></div>
  <div class="col-sm-2 blue"><img class="img-responsive center-block" style="margin-top:5px"src="//img.terpthon.org/header_imgs/flame.png"></div>
  <div class="col-sm-2 orange"><img class="img-responsive center-block" style="margin-top:5px"src="//img.terpthon.org/header_imgs/flame.png"></div>
  <div class="col-sm-2 purple"><img class="img-responsive center-block" style="margin-top:5px"src="//img.terpthon.org/header_imgs/flame.png"></div>
</div>



</div>
<?php
include("includes/footer.inc.php");
?></span>