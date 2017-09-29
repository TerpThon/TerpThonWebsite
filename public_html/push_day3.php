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
  background-color:#ED1D24;
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
  box-shadow: 5px 5px #FFD113;
  width: 400px;
  margin-right: auto;
  margin-left: auto;
  margin-top: 33px;
  /*color:#FFD113;*/
  color:#000000;
  
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
<script type="text/javascript" src="js/jquery.animateNumber.min.js"></script>
<div class="content">
<div class="row">
 <div class="row">
<img src="//img.terpthon.org/header_imgs/SUTSL.png" class="img-responsive center-block" style="max-height:225px" >
</div>
 <div class="col-sm-12" style="text-align:center">
   <span style="font-family:GothamRounded-Book; color:#000000;font-size:100px;text-align:center"><div id="info-container"><p  class="info-number" style="margin-bottom:0px">828</p></div><p style="font-size:45px">Dancers Registered Feb. 9, 2017<br></p></span>
</div>
 <div class="col-sm-12" style="text-align:center">
<!--<span style="font-family:GothamRounded-Book; color:#FFD113;font-size:45px">February 9th, 2017</span>-->
  </div>
</div>
<div class="row">
  <div class="col-sm-12" style="text-align:center">
    <br><br><span style="font-family:GothamRounded-Book; font-size:28px; color:black; ">Join Terp Thon in recruiting <b class="red">#500Dancers1Day</b>  to help us reach our goal of raising <i class="yellow">$1 MILLION For The Kids</i> and families at <b class="red">Children's National Health System</b>!</span><br><br>
<div>
<div class="col-sm-12" style="text-align:center">
       <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1581" target="blank" class="btn btn-lg btn-red" style="margin-bottom:20px; margin-top:10px; color:white" role="button">Register Here</a>
  </div> 
<div class="col-sm-12" style="text-align:center">
<span style="font-family:GothamRounded-Book; font-size:28px; color:black;">You can register as an individual or as part of a team with a club, residence hall, greek organization, or group of friends! If you have already registered as an individual and would like to join or make a team, fill out this <a href="https://goo.gl/forms/IeSkvzVO5sBeSjMj1">form</a>.</span><div>
</div>
<br><br>
<div class="row dividers" id="don">
  <div class="title" style="width:800px">
    How to Register & Next Steps
  </div>
</div>
<div class="row">
   <div class="col-sm-12" style="text-align:center">
       <span style="font-family:GothamRounded-Book; font-size:20px; color:black; ">Join the movement and be a part of the largest party on campus on March 4th!<br><br>
        <p align="left">1. <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1581">Register</a> for Terp Thon as an individual or as part of a team</p>
        <p align="left">2. Recruit your friends and create a Dancer Team--if you would like to switch teams or join a team after already registering, fill out this <a href="https://goo.gl/forms/IeSkvzVO5sBeSjMj1">form</a></p>
        <p align="left">&emsp; &emsp;Present at your student organization or chapter meeting</p>
        <p align="left">&emsp; &emsp;Share why you dance and why your friends should too on social media</p>
        <p align="left">&emsp; &emsp;Create your own incentives to encourage people you know to register</p>
        <p align="left">3. Use our <a href="http://terpthon.org/fundraising_tips.php">fundraising tips</a> to hit your dancer minimum of $120</p>
        <p align="left">4. Come to <a href="http://terpthon.org/terp_thon_DM.php">Terp Thon</a> on March 4th at noon in the Armory!</p>

</span><br><br> 
  </div>
</div>

<div class="row dividers" id="don">
  <div class="title" style="width:800px">
    Schedule of Events
  </div>
</div>
<div class="row">
   <div class="col-sm-12" style="text-align:center">
       
<div class="row-padding">        
<h1 class="red">Stamp Tabling</h1>
 <span style="font-family:GothamRounded-Book; font-size:20px; color:black; ">Stamp Student Union: 10am to 4pm<br>       
Come by to find out more about our Cause and how you can get involved <br>with the Bigger, Bolder movement sweeping the campus to help our Stronger Miracle Kids! 
</span><br><br></div>

<div class="row-padding">        
<h1 class="yellow">SORC Terp Thon Hub</h1>
 <span style="font-family:GothamRounded-Book; font-size:20px; color:black; ">Student Organization Resource Center: 10am to 4pm<br>       
Stop on by for registration, fundraising brainstorming, and all things Terp Thon! There will be <br>snacks and tons of Terp Thon people available to answer any questions you might have!
</span><br><br></div>

<!--<div class="row-padding">        
<h1 class="yellow">McKeldin Flyering</h1>
 <span style="font-family:GothamRounded-Book; font-size:20px; color:black; ">McKeldin Library: 11am to 3pm<br>       
Come by to find out more about our Cause and how you can get involved <br>with the Bigger, Bolder movement sweeping the campus to help our Stronger Miracle Kids! 
</span><br><br></div>

<div class="row-padding">        
<h1 class="red">Morale Flyering</h1>
 <span style="font-family:GothamRounded-Book; font-size:20px; color:black; ">12pm to 1pm and 2pm to 3pm<br>       
Come by to find out more about our Cause and how you can get involved <br>with the Bigger, Bolder movement sweeping the campus to help our Stronger Miracle Kids! 
</span><br><br></div>-->

  </div>
</div>
<!--
<div class="row dividers" id="don">
  <div class="title" style="width:800px">
    Recruitment Leaderboards
  </div>
</div>
<div class="row">
   <div class="col-sm-12" style="text-align:center">
       <span style="font-family:GothamRounded-Book; font-size:20px; color:black; "></span><br><br> 
  </div>
</div>
-->
<div class="row dividers" id="one">
  <div class="title" style="width:700px">
    Student Story
  </div>
</div>
<div class = "row">
    <div class="col-xs-6">
          <h4> <br>“I am a junior volleyball player at the University of Maryland, and I became involved with Dance Marathon in high school when my school hosted a mini-marathon. I dance for my two childhood friends who battled brain cancer at Children’s National, and so no child has to lose their best friend. Philanthropy is a passion for me, and I’m excited to share Terp Thon with my fellow student-athletes. The idea of a party with a purpose really stuck with me. I wanted to show my friends that charity could be fun beyond belief. So, in November I organized a Penny Wars fundraiser in study hall that raised $1,332.82 For The Kids. I wanted to get my fellow student-athletes involved with Terp Thon because I wanted my closest friends on campus to see where I got my joy and empowerment from. I also wanted them to feel what I felt when I was inspired by Terp Thon’s Miracle Kids, Amanda and Jessica, my freshman year. It keeps me working hard and most importantly keeps me grateful until the next year's dance.” - Hailey Murray, Terp Thon Ambassador</h4>
     </div>
     <div class = "col-xs-6">
            <img src="//img.terpthon.org/misc/recDOMstud.jpg" class="img-responsive center-block" style="max-height:400px" >
     </div>
</div>
<div class="row">
<img src="//img.terpthon.org/misc/strong2.jpg" class="img-responsive center-block" style="max-height:200px" >
</div>

<!--<div class="row dividers" id="don">
  <div class="title" style="width:800px">
    How to Recruit
  </div>
</div>
<div class="row">
   <div class="col-sm-12" style="text-align:center">
       <span style="font-family:GothamRounded-Book; font-size:20px; color:black; "></span><br><br> 
  </div>
</div>-->

<div class="row dividers" id="inc">
  <div class="title">
    Incentives
  </div>
</div>
<div class="row" >
  <div class="row">
      <div class="col-sm-12" style="font-family:GothamRounded-Book; font-size:26px; text-align:center; margin-bottom:10px">There are some amazing incentives available for our new dancers!</div>
    <div class="col-xs-6">
     <h3> Early Bird Special</h3><br>
      <h4>The first 25 dancers to register will receive a vintage Terp Thon t-shirt starting from 9AM!</h4>
    </div>
    <div class="col-xs-6">
     <h3> Tag! You're It.</h3><br>
      <h4>Be on the lookout for our "Tag! You're it." graphic! After you register, make sure to post the graphic along with the caption "Tag! You're it. I just registered for Terp Thon 2017! Help Terp Thon register 500 dancers in one day by signing up at ter.ps/TerpThon17, then pass it on!". You can even tag your friends to challenge them to register!</h4>
    </div>
   <!-- <div class="row">
        <div class="col-xs-6">
     <h3> Miracle Kid Meetup Raffle</h3><br>
      <h4>Any dancer registered between 3PM-4PM will be entered for a chance to win an exclusive one our pass to join our Miracle Family room at Terp Thon!</h4>
    </div>
    <div class="col-xs-6">
     <h3> Tag! You're It.</h3><br>
      <h4>Be on the lookout for our "Tag! You're it." graphic! After you register, make sure to post the graphic along with the caption "Tag! You're it. I just registered for Terp Thon 2017! Help Terp Thon register X dancers in one day by signing up at ter.ps/TerpThon17, then pass it on!". You can even tag your friends to challenge them to register!</h4>
    </div>
    </div>-->
  </div>  
</div> 

<div class="row dividers"id="leader">
  <div class="title" style="width:700px">
    Facebook Updates
  </div>
</div>

<div class="row">
   <div class="col-sm-12" style="text-align:center"><br>
        <span style="font-family:GothamRounded-Book; font-size:20px; color:black; ">Check out our official Terp Thon Dancer Facebook group so that you can stay up to date on the latest recruitment updates and get some great tips by clicking <a href="https://www.facebook.com/groups/151503535321058/?fref=ts"class="item">here</a>!</span><br>
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
</div>
<?php
include("includes/footer.inc.php");
?>
