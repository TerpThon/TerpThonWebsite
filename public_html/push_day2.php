<?php
$PAGE_SETTINGS["active"] = 'faculty';
include "includes/mysql.inc.php";
include "includes/header.inc.php";
?>

<style>

.btn-red a:link, a:visited{
  color:white;
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
  text-shadow: 2px 2px gray;
  text-align: center;
  font-family: GothamRounded-Book;
  border-radius: 15px;
  background-color:#FFD113;
  margin: 20px 0px;
  border: red 2px;
  height: 150px;
}
.inc-icon {
  height:125px;
  
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}
.carousel-caption2 {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #000;
  text-align: center;
}

.leader-table {
  border: 1px;
  outline-style: double;
  outline-color: gray;
  min-height: 300px;
  /*width:33%;
  margin: 2px;*/
}
.leader{
  font-family: GothamRounded-Book;
  font-size: 18px;
  text-align: center
}
.title{
  background-color: white;
  border-radius:15px;
  box-shadow: 5px 5px #ED1D24;
  width: 400px;
  margin-right: auto;
  margin-left: auto;
  margin-top: 33px;
  /*color:#FFD113;*/
  color:#ED1D24;
  
}
.caption{
  font-family:GothamRounded-Book; 
  font-size:32px;
  left:10%;
  right:10%;
}

.cloud{
  max-height: 130px;
  margin: 5px;
  padding-right:15px;
}
.cloudr{
  max-height: 120px;
  float:right;
  margin: 5px;
  padding-left: 15px
}
</style>



<div class="content" style="margin-top:50px">
<div class="row" style="margin-bottom:30px">
  <div class="col-sm-12" style="text-align:center">
    <img src="//img.terpthon.org/events/Day_of_Miracles.png" class="img-responsive center-block" style="max-height:1000px" ><br><br>
    <span style="font-family:GothamRounded-Book; color:#FFD113;font-size:4.2vw">12pm November 17th to 12pm November 18th, 2016</span>
  </div>
</div>
<div class="row">
  <div class="col-sm-12" style="text-align:center">
    <span style="font-family:GothamRounded-Book; font-size:28px; color:black; ">Join Terp Thon in raising $100,000 in 24 hours For The Kids and families of the 100,000 Children's National Health System patients who have been treated since Terp Thon's inception in 2010!</span><br> <br>
<div>
<div class="col-sm-12" style="text-align:center">
    <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1581" target="blank" class="btn btn-lg btn-red" style="margin-bottom:20px; margin-top:10px; color:white" role="button">Donate Here</a>
   <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1581" target="blank" class="btn btn-lg btn-red" style="margin-bottom:20px; margin-top:10px; color:white" role="button">Register Here</a>
<a href="http://terpthon.org/Miracle_Madness_schedule.php" target="blank" class="btn btn-lg btn-red" style="margin-bottom:20px; margin-top:10px; color:white" role="button">Schedule of Events</a>
  </div> 
<div class="col-sm-12" style="text-align:center">
<span style="font-family:GothamRounded-Book; font-size:28px; color:black; ">Donate via Venmo:  @TerpThon and write "donation for [name of participant]" as message</span><div>
</div>
<br><br>
<div class="row dividers" id="don">
  <div class="title" style="width:700px">
    Where Can The $ Go?
  </div>
</div>
<div class="row">
   <div class="col-sm-12" style="text-align:center">
       <span style="font-family:GothamRounded-Book; font-size:20px; color:black; ">Donations collected throughout Day of Miracles will go towards numerous departments and services throughout the hospital. Examples of equipment and family services that Children's National is able to provide thanks to your donations are located below.</span><br><br> 
<img src="//img.terpthon.org/misc/100k.jpg" class="img-responsive center-block" style="max-height:300px" ><br><br>
  </div>
</div>

<div class="row dividers" id="one">
  <div class="title" style="width:700px">
    #OneOfMany
  </div>
</div>
<div class="row">
   <div class="col-xs-4">
<img src="//img.terpthon.org/misc/Tara1.png" class="img-responsive center-block" style="max-height:300px" >
   </div>
   <div class="col-xs-4">
    <h5> In February 2013, Tara was diagnosed with grade 2 astrocytoma, a rare form of brain cancer. Doctors found three tumors in her brain that were inoperable, so she began 70 weeks of chemotherapy. In January 2015, more tumors were discovered, but the risk of the operation outweighed the potential benefits. This summer, Tara tested positive for a mutation that could turn her grade 2 tumors into grade 3 tumors. After hearing the news, Tara and her parents made the brave decision to surgically remove the tumor from her frontal lobe. </h5><br>
<h5>We are so happy to announce that Tara has made an incredible recovery in the weeks following her procedure! Now, Tara is back to doing the things she loves like pitching for her softball team and training her dog, Caroline!</h5>
   </div>
   <div class="col-xs-4">
<img src="//img.terpthon.org/misc/Tara2.png" class="img-responsive center-block" style="max-height:300px" >
   </div>
</div>
<div class="row">
<img src="//img.terpthon.org/misc/strong2.jpg" class="img-responsive center-block" style="max-height:200px" >
</div>
<div class="row">
   <div class="col-xs-4">
<img src="//img.terpthon.org/misc/Payton1.PNG" class="img-responsive center-block" style="max-height:300px" >
   </div>
   <div class="col-xs-4">
      <h5>When Payton was a sophomore in high school, she fell very ill and was rushed to her local Children’s Miracle Network Hospital. Payton was fitted with a feeding tube that prevented her from eating food for an entire year. Doctors diagnosed her with gastroparesis, a paralyzed stomach. Payton underwent surgery to place a pacemaker generator on her stomach to deliver electrical impulses, and will require a new pacemaker every year. </h5><br>
<h5>Says Payton, “I learned what it means to be a sick kid and spent the majority of my teenage years in and out of the hospital. I’ve seen firsthand the amazing impact that Terp Thon funds have on children. It is because of hospitals like Children’s National that I am able to go to college and participate in Terp Thon.”
</h5>
   </div>
   <div class="col-xs-4">
<img src="//img.terpthon.org/misc/Payton2.JPG" class="img-responsive center-block" style="max-height:300px" >
   </div>
</div>


<script>
jQuery('document').ready(function(){
  jQuery('a.item').css({"max-height": "455px","overflow":"hidden"}).find('img').css('width', '100%');
});
</script>

<div class="row dividers" id="sched">
  <div class="title" style="width:700px">
    Fundraising Tips
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
       <!-- <li data-target="#slider" data-slide-to="4"></li>-->
      </ol>

    <div class="carousel-inner">
        <a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1160" class="item active">
          <img src="//img.terpthon.org/misc/stamp.jpeg" alt="Stamp">
          <div class="carousel-caption caption">
            Stop by the Terp Thon Hub to register, drop off donations, check our progress, and pick up a can to go canning on campus.
          </div>
        </a>

        <a href="http://terpthon.org/miraclekids.php" class="item">
          <img src="//img.terpthon.org/misc/mks.jpg">
          <div class="carousel-caption caption">
           Share Miracle Kid stories or personal stories about your experience with Terp Thon on social media!
         </div>
       </a>

        <a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1160" class="item">
          <img src="//img.terpthon.org/misc/snacks2.jpg">
          <div class="carousel-caption2 caption">
        Deliver snacks or meals to your friends while they study for exams FTK!
          </div>
        </a>

        <a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1160"class="item">
          <img src="//img.terpthon.org/misc/pie_face.jpg" alt="Crowd Surf at Terp Thon">
          <div class="carousel-caption caption">
            Do an embarrassing dare, like getting pied in the face with whipped cream, for a donation!
          </div>
        </a>

        <!--<a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1160"class="item">
          <img src="//img.terpthon.org/misc/childrensnational.jpg" alt="Crowd Surf at Terp Thon">
          <div class="carousel-caption caption">
            Look out for our Cause Connection Committee handing out flyers to learn more about the kids treated at Children's National.
          </div>
        </a>-->

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
  <div class="row">
      <div class="col-sm-12" style="font-family:GothamRounded-Book; font-size:26px; text-align:center; margin-bottom:10px">There are some amazing incentives available for participants on Day of Miracles!</div>
    <div class="col-xs-6">
     <h3> Early Bird Special</h3><br>
      <h4>The first 15 dancers to get 3 donations (from unique donors) will win a $10 gift card of their choosing from various restaurants along Route 1 as well as other vendors!</h4>
    </div>
    <div class="col-xs-6">
     <h3> Miracle Kid Winter Wonderland</h3><br>
      <h4>If you raise $500 on Day of Miracles, you will be invited to an exclusive Miracle Kid Winter Wonderland party on December 4. There will be games, music, food, and most importantly Miracle Kids! This is a very unique opportunity to meet and hang out with Terp Thon’s Miracle Families!</h4>
    </div>
  </div>  
</div> 
<!--
<div class="row dividers" id="inc">
  <div class="title">
    Leaderboards
  </div>
</div>
<div class="row" style="margin-left:auto; margin-right:auto" >
  <div class="col-sm-3 leader-table">
    <h3 class="subtc">Individuals</h3>
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
      echo "<div class=\"leader\">".$p["first"]." ".$p["last"].": <span style=\"color:#ED1D24\">$".$p["total"]."</span></div>";
    }
    ?>
  </div>
  <div class="col-sm-3 leader-table">
    <h3 class="subtc">Greek Chapters</h3>
    <?php
    $table_name = "push_day_greeks_2016";
    function getGreeks($handler, $name){
      $stmt = $handler->prepare("SELECT * FROM ".$name);

      $stmt->execute();

      $results = array();

      while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
          $results[] = $result;
      }

      //return json_encode($results);
      return $results;
    }

    function compareGreekTotals($a, $b){
        if ($a["total"] == $b["total"]) {
            return 0;
        }
        return ($a["total"] > $b["total"]) ? -1 : 1;
    }


    $participants = getGreeks($dbh, $table_name);
    //print_r($participants);
    $orderedParticipants = array();
    foreach ($participants as $index => $row) {
      $pid = $row["teamid"];
      if(isset($orderedParticipants[$pid])){
        $orderedParticipants[$pid]["total"] += $row["donationamount"];
      } else {
        $orderedParticipants[$pid] = array();
        $orderedParticipants[$pid]["total"] = $row["donationamount"];
        $orderedParticipants[$pid]["name"] = $row["teamname"];
        $orderedParticipants[$pid]["last"] = $row["participantlastname"];
      }
    }
    usort($orderedParticipants, "compareGreekTotals");
    for($i = 0; $i < count($orderedParticipants); $i++){
      $p = $orderedParticipants[$i];
      if($i > 5){
        break;
      }
      echo "<div class=\"leader\">".$p["name"]." : <span style=\"color:#ED1D24\">$".$p["total"]."</span></div>";
    }
    ?>
  </div>
  <div class="col-sm-3 leader-table">
    <h3 class="subtc">Student Organizations</h3>
    <?php
    $table_name = "push_day_orgs_2016";
    function getOrgs($handler, $name){
      $stmt = $handler->prepare("SELECT * FROM ".$name);

      $stmt->execute();

      $results = array();

      while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
          $results[] = $result;
      }

      //return json_encode($results);
      return $results;
    }

    function compareOrgTotals($a, $b){
        if ($a["total"] == $b["total"]) {
            return 0;
        }
        return ($a["total"] > $b["total"]) ? -1 : 1;
    }


    $participants = getOrgs($dbh, $table_name);
    //print_r($participants);
    $orderedParticipants = array();
    foreach ($participants as $index => $row) {
      $pid = $row["teamid"];
      if(isset($orderedParticipants[$pid])){
        $orderedParticipants[$pid]["total"] += $row["donationamount"];
      } else {
        $orderedParticipants[$pid] = array();
        $orderedParticipants[$pid]["total"] = $row["donationamount"];
        $orderedParticipants[$pid]["name"] = $row["teamname"];
      }
    }
    usort($orderedParticipants, "compareOrgTotals");
    for($i = 0; $i < count($orderedParticipants); $i++){
      $p = $orderedParticipants[$i];
      if($i > 5){
        break;
      }
      echo "<div class=\"leader\">".$p["name"]." : <span style=\"color:#ED1D24\">$".$p["total"]."</span></div>";
    }
    ?>
  </div>
  <div class="col-sm-3 leader-table">
    <h3 class="subtc">Residence Halls</h3>
    <?php
    $table_name = "push_day_rha_2016";
    function getRHA($handler, $name){
      $stmt = $handler->prepare("SELECT * FROM ".$name);

      $stmt->execute();

      $results = array();

      while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
          $results[] = $result;
      }

      //return json_encode($results);
      return $results;
    }

    function compareRHATotals($a, $b){
        if ($a["total"] == $b["total"]) {
            return 0;
        }
        return ($a["total"] > $b["total"]) ? -1 : 1;
    }


    $participants = getRHA($dbh, $table_name);
    //print_r($participants);
    $orderedParticipants = array();
    foreach ($participants as $index => $row) {
      $pid = $row["teamid"];
      if(isset($orderedParticipants[$pid])){
        $orderedParticipants[$pid]["total"] += $row["donationamount"];
      } else {
        $orderedParticipants[$pid] = array();
        $orderedParticipants[$pid]["total"] = $row["donationamount"];
        $orderedParticipants[$pid]["name"] = $row["teamname"];
      }
    }
    usort($orderedParticipants, "compareRHATotals");
    for($i = 0; $i < count($orderedParticipants); $i++){
      $p = $orderedParticipants[$i];
      if($i > 5){
        break;
      }
      echo "<div class=\"leader\">".$p["name"]." : <span style=\"color:#ED1D24\">$".$p["total"]."</span></div>";
    }
    ?>
  </div>

</div>-->


<div class="row dividers"id="leader">
  <div class="title" style="width:700px">
    Facebook Updates
  </div>
</div>

<div class="row">
   <div class="col-sm-12" style="text-align:center"><br>
        <span style="font-family:GothamRounded-Book; font-size:20px; color:black; ">Check out our new official Terp Thon Dancer Facebook group so that you can stay up to date on the latest fundraising updates and get some great tips by clicking <a href="https://www.facebook.com/groups/151503535321058/?fref=ts"class="item">here</a>!</span><br>
   </div>
</div>




<div class="row dividers"  id="sm">
  <div class="title" style="width:700px">
    Twitter Updates
  </div>
</div>

<div class="row">

  <div class="col-sm-12">
    <!--<h2>Twitter</h2>-->
    <a class="twitter-timeline" href="https://twitter.com/search?q=Terp%20Thon" data-widget-id="686378148150308864">Tweets about Terp Thon</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>  </div> 
  <!--<div class="col-sm-6">
    <h2>Instagram</h2>
    <!-- SnapWidget -->
  <script src="http://snapwidget.com/js/snapwidget.js"></script>
  <iframe src="http://snapwidget.com/in/?h=dGVycHRob258aW58MTI1fDN8NXx8bm98NXxub25lfG9uU3RhcnR8eWVzfHllcw==&ve=100116" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>  </div>  
</div>



</div>
<?php
include("includes/footer.inc.php");
?>