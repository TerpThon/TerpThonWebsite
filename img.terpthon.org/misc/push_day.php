<?php
$PAGE_SETTINGS["active"] = 'faculty';
include "includes/mysql.inc.php";
?>
  <head>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main1.css">
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

    <script src="/js/vendor/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>

    <?php
      if(isset($PAGE_SETTINGS["js"])) {
        foreach($PAGE_SETTINGS["js"] as $js)
          echo '<script type="text/javascript" src="'.$js.'"></script>'."\n";
      }
      if(isset($PAGE_SETTINGS["active"])) {
        echo '<script type="text/javascript">setupNav("#nav_'.$PAGE_SETTINGS["active"].'");</script>';
      } else {
        echo '<script type="text/javascript">setupNav();</script>';
      }
    ?>

  </head>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="//img.terpthon.org/header_imgs/transparent_rebrand_logo.gif" height="50px"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right" style="padding:10px 0px; font-family:GothamRounded-Book; text-size:14px">
        <li><a href="#sched">Campus Events Schedule</a></li> 
        <li><a href="#sm">Social Media Feeds</a></li>       
        <li><a href="#inc">Incentives</a></li>
        <li><a href="#leader">Leaderboard</a></li>
        <li><a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donordrive.event&eventID=2125" style="color:#ED1D24"><b>Donate<b></a></li>                     
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--<div class="jumbotron wide">
    <div class="transbox_one_line_header">
        <h1>Push Day<h1>
    </div>  
</div>-->

<style>

.btn-new{
  color:white;
  background-color: #ED1D24;
}
.tc{
  text-align: center;
  padding-top: 60px;
}
.subtc{
  text-align: center;
}
.dividers{
  font-size:50px;
  text-shadow: 3px 3px gray;
  text-align: center;
  font-family: GothamRounded-Book;
  border-radius: 15px;
  background-color: #FFD113;
  margin: 20px 0px;
  border: red 2px;
  height: 150px;
}
.inc-icon {
  height:100px;
  width: 100px;
}
.leader-table {
  border: 1px;
  outline-style: double;
  outline-color: gray;
  height: 200px;
}
.title{
  background-color: white;
  border-radius:15px;
  box-shadow: 5px 5px #A4A4A4;
  width: 400px;
  margin-right: auto;
  margin-left: auto;
  margin-top: 33px;
  color:#FFD113;
}
.caption{
  text-shadow:3px 3px black; 
  font-family:GothamRounded-Book; 
  font-size:32px;
  width:700px;
  left:10%;
}
</style>



<div class="content" style="margin-top:30px">
<div class="tc">
  <h1>Day of Miracles</h1>
  <p>Day of Miracles is going to be awesome.</p>
  <p><a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donordrive.event&eventID=2125" target="blank" class="btn btn-lg btn-red" style="color:white" role="button">Donate</a></p>
</div> 



<script>
jQuery('document').ready(function(){
  jQuery('a.item').css({"max-height": "455px","overflow":"hidden"}).find('img').css('width', '100%');
});
</script>

<div class="row dividers" style="text-shadow:3px 3px gray"  id="sched">
  <div class="title" style="width:700px">
    Campus Events Schedule
  </div>
</div>

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <div id="slider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
        <li data-target="#slider" data-slide-to="3"></li>
        <li data-target="#slider" data-slide-to="4"></li>
      </ol>

    <div class="carousel-inner">
        <a href="#" class="item active">
          <img src="//img.terpthon.org/misc/mckeldin.jpg" alt="Mckeldin">
          <div class="carousel-caption caption">
            Check out the Terp Thon Table outside McKeldin for hot chocolate and candy grams!
          </div>
        </a>


        <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.event&eventID=2125" class="item">
          <img src="//img.terpthon.org/misc/stamp.jpeg" alt="Stamp">
          <div class="carousel-caption caption">
           Stop by the Terp Thon Hub in the Student Involvement Suite to register or drop off donations.
         </div>
       </a>

        <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.event&eventID=2125" class="item">
          <img src="//img.terpthon.org/sliders/MiracleKids.jpg" alt="SP1">
          <div class="carousel-caption caption">
            Canning on campus is an easy way to fundraise! Join us outside Stamp and the North and South Campus Dining Halls.
          </div>
        </a>

        <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.event&eventID=2125"class="item">
          <img src="//img.terpthon.org/sliders/crowd_surf.jpg" alt="Crowd Surf at Terp Thon">
          <div class="carousel-caption caption">
            Get your "Just Desserts" and pie a friend in the face for a donation at North Campus Diner from 5-7pm!
          </div>
        </a>

        <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.event&eventID=2125"class="item">
          <img src="//img.terpthon.org/misc/childrensnational.jpg" alt="Crowd Surf at Terp Thon">
          <div class="carousel-caption caption">
            Look out for our Cause Connection Committee handing out flyers to learn more about the kids treated at Children's National.
          </div>
        </a>

    </div>
    <a class="left carousel-control" href="#slider" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#slider" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
    </div>
  </div>
</div>
<br>

<div class="row dividers" id="inc">
  <div class="title">
    Incentives
  </div>
</div>
<div class="row" >
  <!--<div class="col-sm-12"><h1 class="tc">Incentives</h1></div>-->
  <div class="row">
    <div class="col-sm-3">
      <img src="//img.terpthon.org/homepage-icons/hand.png" class="inc-icon center-block">
      <h4 class="subtc">Cool Incentive</h4>
    </div>
    <div class="col-sm-3">
      <img src="//img.terpthon.org/homepage-icons/people.png" class="inc-icon center-block">
      <h4 class="subtc">Cool Incentive</h4>
    </div>
    <div class="col-sm-3">
      <img src="//img.terpthon.org/homepage-icons/money.png" class="inc-icon center-block">
      <h4 class="subtc">Cool Incentive</h4>
    </div>
    <div class="col-sm-3">
      <img src="//img.terpthon.org/homepage-icons/calendar.jpg" class="inc-icon center-block">
      <h4 class="subtc">Cool Incentive</h4>
    </div>
  </div>  
</div>  

<div class="row dividers"id="leader">
  <div class="title">
    Leaderboards
  </div>
</div>

<div class="row" >
  <div class="col-sm-4 leader-table">
    <h4 class="subtc">Individuals</h4>
    <?php
    $table_name = "push_day_2016";
    function getParticipants($handler, $name){
      $stmt = $handler->prepare("SELECT * FROM ".$name);

      $stmt->execute();

      $results = array();

      while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
          $results[] = $result;
      }

      //return json_encode($results);
      return $results;
    }

    function compareParticipantTotals($a, $b){
        if ($a["total"] == $b["total"]) {
            return 0;
        }
        return ($a["total"] > $b["total"]) ? -1 : 1;
    }


    $participants = getParticipants($dbh, $table_name);
    //print_r($participants);
    $orderedParticipants = array();
    foreach ($participants as $index => $row) {
      $pid = $row["participantid"];
      if(isset($orderedParticipants[$pid])){
        $orderedParticipants[$pid]["total"] += $row["donationamount"];
      } else {
        $orderedParticipants[$pid] = array();
        $orderedParticipants[$pid]["total"] = $row["donationamount"];
        $orderedParticipants[$pid]["first"] = $row["participantfirstname"];
        $orderedParticipants[$pid]["last"] = $row["participantlastname"];
      }
    }
    usort($orderedParticipants, "compareParticipantTotals");
    for($i = 0; $i < count($orderedParticipants); $i++){
      $p = $orderedParticipants[$i];
      if($i > 5){
        break;
      }
      echo "<div>".$p["first"]." ".$p["last"].": ".$p["total"]."</div>";
    }
    ?>
  </div>
  <div class="col-sm-4 leader-table">
    <h4 class="subtc">Greek Chapters</h4>
  </div>
  <div class="col-sm-4 leader-table">
    <h4 class="subtc">Student Organizations</h4>
  </div>
</div>


<div class="row dividers"  id="sm">
  <div class="title" style="width:550px">
    Social Media Feeds
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <h2>Twitter</h2>
    <a class="twitter-timeline" href="https://twitter.com/search?q=Terp%20Thon" data-widget-id="686378148150308864">Tweets about Terp Thon</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>  </div> 
  <div class="col-sm-6">
    <h2>Instagram</h2>
    <!-- SnapWidget -->
  <script src="http://snapwidget.com/js/snapwidget.js"></script>
  <iframe src="http://snapwidget.com/in/?h=dGVycHRob258aW58MTI1fDN8NXx8bm98NXxub25lfG9uU3RhcnR8eWVzfHllcw==&ve=100116" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>  </div>  
</div>



</div>
<?php
include("includes/footer.inc.php");
?>