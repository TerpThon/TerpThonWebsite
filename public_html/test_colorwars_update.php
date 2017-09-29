<?php
include('includes/header.inc.php');
$PAGE_SETTINGS["js"] = array( "https://www.google.com/jsapi", "/js/colorwars_chart.js");
?>      

      <div id="slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#slider" data-slide-to="0" class="active"></li>
          <li data-target="#slider" data-slide-to="1"></li>
          <li data-target="#slider" data-slide-to="2"></li>
          <li data-target="#slider" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <a href="donatenow.php" class="item active">
            <img src="//img.terpthon.org/sliders/2013reveal.jpg" alt="2013 Reveal">
            <div class="carousel-caption">
              <h2>Donate</h2>
              <p>Click here to donate now. Remember, it's all For The Kids!</p>
            </div>
          </a>
          <a href="register.php" class="item">
            <img src="//img.terpthon.org/sliders/ftkpowerhour.jpg" alt="2013 Reveal">
            <div class="carousel-caption">
              <h2>Sign Up</h2>
              <p>Click here to sign up as a dancer and start fundraising today!</p>
            </div>
          </a>
          <a href="whatis.php" class="item">
            <img src="//img.terpthon.org/sliders/morale.jpg" alt="2013 Reveal">
            <div class="carousel-caption">
              <h2>What is Terp Thon?</h2>
              <p>Click here to learn more about our mission.</p>
            </div>
          </a>
          <a href="donor_stewardship.php"class="item">
            <img src="//img.terpthon.org/sliders/balloonpowerhour.jpg" alt="2013 Reveal">
            <div class="carousel-caption">
              <h2>Top Fundraisers</h2>
              <p>Click here to check out the top fundraisers so far this year.</p>
            </div>
          </a>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#slider" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#slider" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
      
    </div>


    <div class="container">
      <div class="content">
        <div class="row">
		  <div class="col-md-4">
			<h2>Register NOW for Terp Thon 2014!</h2>
			<h3>March 8th, 2014 - Ritchie Coliseum</h3>
			<a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.event&eventID=1563" class="btn btn-red btn-lg"><span class="white-link">Sign Up</span></a>
		  </div>
          <div class="col-md-8">
            <h1>Welcome to Terp Thon!</h1>
            <h2>Benefiting Children's National Health System in Washington D.C.</h2>
			
			<p>Terp Thon is a student organization that works year-round to raise money and awareness for Children’s National Health System in Washington, D.C while instilling the importance of service and philanthropic work among the University community. Terp Thon’s year-round efforts culminate in a 12-hour Dance Marathon that unites student organizations, university departments, small and large businesses, and a culturally diverse student population, all in support of the patients and families at Children’s National. Terp Thon gathers the strongest student and faculty leaders across campus to build students’ affinity to philanthropy and the University through partnerships, passion, team work, and professional development.</p>
			<p>We at Terp Thon hope that you enjoy our website. Please explore - from our Miracle Kids to our Media page, there is plenty to see and do and many chances to get involved, whether as a Dancer, a volunteer, a donor, or a sponsor. As always, do it For The Kids! UGH</p>
          </div>
        </div>
		<div class="row">
			<h2>Color Wars Team Points</h2>
			<div id="chart_div" class="col-md-12" style="height:300px;">
			</div>
		</div>
      </div>

<?php
include('includes/footer.inc.php');
?>  