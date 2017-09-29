<?php
include('includes/header.inc.php');
//$PAGE_SETTINGS["js"] = array( "https://www.google.com/jsapi", "/js/colorwars_chart.js");
$PAGE_SETTINGS["js"] = array( "/js/jquery.animateNumber.min.js");
?> 

  

<style>

.content a:visited, footer a:link {
  color:white;
}
.content a:link, footer a:link {
    color: white; 
}

  .yellow {
  color: #FFD113
  }
 .red{
  color: #ED1D24
  }
  div.main-image-container{
    background-image: url("//img.terpthon.org/header_imgs/homepage_header.jpg");
    background-repeat: no-repeat;
  }

  img.main-image{
    visibility: hidden;
    width: 100%;
  }

  #info-container{
    top: 0px;
    font-size:200px;
  }
  #info-container > h2 {
    display: inline-block;
  }
  #num-participants{
    //width: 100px;
  }
  #sum-donations{
    width: 85px;
  }
  .info-text, .info-number {
    display: inline-block;
  }



</style>
    
<script>
jQuery('document').ready(function(){
  jQuery.get( "requests/database_update_2017_recruitDOM.php", function( data ) {
    console.log(data);
    var d = jQuery.parseJSON(data);

    var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
    
      $('#num-participants').animateNumber(
      {
        number: d[d.length-1].numparticipants - 1471,
        numberStep: comma_separator_number_step
      },
      4000
    );
$('#num-teams').animateNumber(
      {
        number: d[2].numteams,
        numberStep: comma_separator_number_step
      },
      4000
    );
$('#sum-donations').animateNumber(
      {
        number: d[2].sumdonations,
        numberStep: comma_separator_number_step
      },
      4000
    );
  });
});
</script>


<!--<div class="jumbotron wide main-image-container">
  <div id="info-container" class="transbox_three_line_header_home">
    <h2>On March 5th, </h2>
    <h2 id="num-participants" class="info-number" ></h2>
    <!--<h2>dancers have raised </h2>
    <h2>$</h2><h2 id="sum-donations" class="info-number"></h2>-->
    <!--<h2>dancers will stand for 12 hours</h2>
    <h2>and make countless miracles</h2>
    <h2>For The Kids!</h2>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donordrive.event&eventID=2125" class="yellow" style="text-shadow: 3px 3px black"><u><h2>Join the Movement<h2></u></a>
  </div>

</div>-->



  
<div class="container">
<div class="content">
 <div class="row"><br>
<!--<img src="//img.terpthon.org/header_imgs/rushtoraise5.png" class="img-responsive center-block" style="max-height:500px" >
<br>
<div class="col-sm-12" style="text-align:center;">
        <span style="font-family:GothamRounded-Book; font-size:28px; padding-bottom:20px"><b>Rush To Raise $80K</b> with UMD Greeks!</span><br>
 <a href="https://events.dancemarathon.com/event/terpthon" target="blank" class="btn btn-lg btn-red" style="margin-bottom:20px; margin-top:10px" role="button">Register Here</a>         <a href="https://events.dancemarathon.com/event/terpthon" target="blank" class="btn btn-lg btn-red" style="margin-bottom:20px; margin-top:10px" role="button">Donate Here</a> </div>

    <div class="col-sm-12" style="text-align:center;">
        <span style="font-family:GothamRounded-Book; font-size:28px; padding-bottom:20px">Color Wars has started!</span><br>
  <a href="https://www.facebook.com/groups/151503535321058/" target="blank" class="btn btn-lg btn-red" style="margin-bottom:20px; margin-top:10px" role="button">Join Dancer Facebook Group</a>         <a href="http://ter.ps/color" target="blank" class="btn btn-lg btn-red" style="margin-bottom:20px; margin-top:10px" role="button">Color Wars Schedule</a> </div>-->





  <div class="row" style="padding-bottom: 20px">
    <div class="col-sm-12" style="text-align:center">
    <center><h1><b>Welcome to Terp Thon!</b></h1>
	<center><img src="//img.terpthon.org/header_imgs/2017reveal.jpg" class="img-responsive center-block" style="max-height:500px"><center>
    <h2>Benefiting Children's National Health System in Washington D.C.</h2>
    <p><font size="4">Terp Thon is a student-run organization at the University of Maryland that raises funds and awareness <b>For The Kids</b> at Children’s National Health System, our local Children’s Miracle Network Hospital. As leaders of the Miracle Network Dance Marathon movement, we unite our campus and local community to inspire hope and healing in the children and their families at Children’s National. Terp Thon fosters innovation, determination, and creativity in today’s leaders. We celebrate our year-round efforts with a 12-hour Dance Marathon, bringing joy to the families who are the root of our cause.</font></p></center>
  </div>  
  
   <!--<div class="col-md-6" style="padding-top:20px">
      <p class="home">Terp Thon is a student-run organization at the University of Maryland that raises funds and awareness <b class="yellow">For The Kids</b> at Children’s National Health System, our local Children’s Miracle Network Hospital. As leaders of the <i class="red">Miracle Network Dance Marathon movement</i>, we unite our campus and local community to <b class="yellow">inspire hope and healing</b> in the children and their families at Children’s National. Terp Thon fosters <i class="red">innovation, determination, and creativity</i> in today’s leaders. We celebrate our year-round efforts with a 12-hour Dance Marathon, <b class="yellow">bringing joy to the families who are the root of our cause.</b></p></center>
    </div>
  

  <div class="col-sm-6">
    <div style="width:560px;margin:0 auto"><iframe width="560" height="315" src="https://www.youtube.com/embed/HsenneDaEWw" frameborder="0" allowfullscreen></iframe></div>
  </div>-->
  </div>
  
  <div class="row" style="padding-bottom: 35px">
    <center><h2>What's New With Terp Thon?</h2>
    <div class="col-sm-6 col-md-3" style="padding-top: 20px">
      <div class="image">
        <img src="//img.terpthon.org/homepage-icons/calendar.jpg" alt="Calendar" width="40px" height="40px"> 
      </div>
        <div class="caption">
          <h3>Upcoming Events</h3>
          <p>Join the party to make Miracles! See what latest and greatest events are coming up. From trivia nights to zumba and the Color Run to the Dance Marathon, Terp Thon has events for everyone!</p>
          <center><p><a href="upcoming_events.php" class="btn btn-red" role="button">View Events</a></p></center>
        </div>
      
    </div>

    <div class="col-md-3" style="padding-top: 20px">
      <div class="image">
        <img src="//img.terpthon.org/homepage-icons/people.png" alt="People" width="40px" height="40px">
      </div>
        <div class="caption">
          <h3>Get Involved</h3>
          <p>Interested in becoming a part of the Terp Thon Planning Team? Want to be a dancer this year? Looking to participate in some amazing activities for a great cause? Click below for more ways to be involved!</p>
          <center><p><a href="get_involved_dancers.php" class="btn btn-red" role="button">Learn More</a></p></center>
        </div>
       
    </div>

    <div class="col-md-3" style="padding-top: 20px">
      <div class="image">
        <img src="//img.terpthon.org/homepage-icons/hand.png"  alt="Hand" width="40px" height="40px"> 
      </div>
        <div class="caption">
          <h3>Miracle Kids</h3>
          <p>Get to know Terp Thon's Miracle Kids -- learn about some of the inspiring heroes we fight to help every day! These kids and their families are the center of each and every event and fundraiser we hold.</p>
          <br><center><p><a href="miraclekids.php" class="btn btn-red" role="button">Learn More</a></p></center>
        </div>
      
    </div>

    <div class="col-sm-6 col-md-3" style="padding-top: 20px">
      <div class="image">
        <img src="//img.terpthon.org/homepage-icons/money.png"  alt="Money" width="40px" height="40px">
      </div>
      <div class="caption">
        <h3>Fundraising</h3>
        <p>Want to support a dancer? Sign up for Dance Marathon? Or check your fundraising total? Go to Donor Drive and donate, sign up, or login to your personal account!</p>
        <br><center><p><a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1160" class="btn btn-red" role="button">Enter Donor Drive</a></p></center>
      </div>
    </div>
  </div>
</div>


<?php
include('includes/footer.inc.php');
?>  