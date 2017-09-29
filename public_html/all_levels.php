<?php
$PAGE_SETTINGS["active"] = 'students';
include("includes/header.inc.php");

//include("../../public_html/TTAPP/database_update_dancers_2016.php");



include "includes/mysql.inc.php";
setlocale(LC_MONETARY, 'en_US');
$included_files = get_included_files();

//CONSTANTS - CHANGE THESE IF NECESSARY. REFER TO DOCUMENTATION
$table_name = 'TT_Dancer_Fundraising_Levels_2016';
$first_name_attribute = 'participantfirstname';
$last_name_attribute = 'participantlastname';
$donation_amount_attribute = 'participantsumdonations';

$mega_amount = 2400;
$comma_amount = 1000;
$champions_amount = 750;
$five_hundred_amount = 500;
$miracle_maker_amount = 240;
//END OF CONSTANTS, UPDATE CONSTANT ON LINE 31

$donations_stmt = $dbh->prepare("SELECT	". $first_name_attribute .", ". $last_name_attribute .", 
											". $donation_amount_attribute ."  
									FROM 	". $table_name ." 
									WHERE	". $donation_amount_attribute ." >= 240.00");
$donations_stmt->execute();

$donations = array();

function cmp($a, $b)
{
	$toReturn = TRUE;
	
	//CONSTANT
	$d = 'participantsumdonations';
	//END
	
if ( $a[$d] >= $b[$d] ) {
		$toReturn = FALSE;
	}
	
	return $toReturn;
}

while($curr_donation = $donations_stmt->fetch(PDO::FETCH_ASSOC))
{
		$donations[] = $curr_donation;
} 

usort($donations, "cmp");

$mega = array();
$comma = array();
$champions = array();
$fivehundred = array();
$miraclemaker = array();

foreach($donations as $arr) {
	
	$t = floatval($arr[$donation_amount_attribute]);
	
	if ($t >= $mega_amount) {
		$mega[] = $arr;
	} else if ($t >= $comma_amount) {
		$comma[] = $arr;
	} else if ($t >= $champions_amount) {
		$champions[] = $arr;
	} else if ($t >= $five_hundred_amount) {
		$fivehundred[] = $arr;
	} else if ($t >= $miracle_maker_amount) {
		$miraclemaker[] = $arr;
	}
	
}
?>

<div class="jumbotron wide">
    <div class="transbox_two_line_header">
        <h1>Dancer Fundraising Levels</h1>
    </div>  
</div>


<style>
div.col-sm-4 {
	float: left;
	text-align: center;
}
div.col-sm-6 {
	float: left;
	text-align: center;
}
div.row {
	margin-bottom: 36px;
}
</style>
<div class="content">
        <div class="col-xs-3">
            <div class="sub-nav">
                <ul>
                    <li class="active"><a data-toggle="tab" href="#overview">Level Overview</a></li>
                    <li ><a data-toggle="tab" href="#120">Dancer Minimum</a></li>
                    <li><a data-toggle="tab" href="#250">Miracle Maker</a></li>
                    <li><a data-toggle="tab" href="#500">500 Club</a></li>
                    <li><a data-toggle="tab" href="#750">Champion's Club</a></li>
                    <li><a data-toggle="tab" href="#1000">Comma Club</a></li>
                    <li><a data-toggle="tab" href="#1300">Heroes of the Heart</a></li>
                    <li><a data-toggle="tab" href="#1746">Nurse's Circle</a></li>
                    <li><a data-toggle="tab" href="#2500">Mega Miracle Maker</a></li>
                </ul>
            </div>
        </div>

        <div class="col-xs-8 col-xs-push-1" style="left: auto">
            <div class="tab-content">
                <div id="overview" class="tab-pane fade in active" style="padding-top: 20px; padding-bottom: 20px"
                    <br><img src="//img.terpthon.org/misc/infoweb.png" class="img-responsive" height="500" width="700">

                </div>
                <div id="120" class="tab-pane fade in">
                    <h2> Dancer Minimum - $120</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="//img.terpthon.org/miraclekids/fundraising_levels/Tara.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <p class = "home">A minimum of $120.00 will grant you a formal invitation to our Dance Marathon on March 4th. This invitation includes an event t-shirt, lunch and dinner at the event. While there, we will dance and stand on our feet for 12 hours as we celebrate our fundraising efforts with our Miracle Kids, their families, and thousands of UMD students. These 12 hours represent a nurse’s shift at Children’s National Health System, and help us show our support for everything the hospital does For The Kids.
                            </p>
                        </div>
                    </div>

                </div>
                <div id="250" class="tab-pane fade in">
                    <h2> Miracle Maker - $250</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="//img.terpthon.org/miraclekids/fundraising_levels/Samerya.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <p class = "home">A minimum of $250.00 will grant you special recognition at our Dance Marathon and incentives for the previous level. On average, at least 250 out of 313 hospital beds are filled at Children’s National every day. Your fundraising efforts will ensure that kids are given the treatment they need to return home from the hospital.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="500" class="tab-pane fade in">
                    <h2> 500 Club - $500</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="//img.terpthon.org/miraclekids/fundraising_levels/Brooke_Caitlin.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <p class = "home">A minimum of $500.00 will grant you dessert at our Dance Marathon and incentives for the previous levels. Our Miracle Kid Brooke was diagnosed with Acute Myeloid Leukemia at the age of two. Fortunately, her sister Caitlin was a perfect match for a bone marrow transplant. During Brooke’s treatment in the hospital, she and her sister were separated from one another for 51 days. Thanks to fundraisers like you, they were able to be reunited and are happy and healthy today.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="750" class="tab-pane fade in">
                    <h2> Champion's Club - $750</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="//img.terpthon.org/miraclekids/fundraising_levels/Chase.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <p class = "home">A minimum of $750.00 will grant you breakfast at our Dance Marathon with Chase, our Miracle Kid and the current 2016 Children’s Miracle Network D.C. champion. You will also receive incentives for the previous levels. At the age of three, Chase had an accident that damaged his epiglottis and esophagus, requiring him to have a tracheotomy. Today, Chase sees beyond the limitations of his trach tube and loves to play sports and is fluent in French. Thanks to your championship-worthy fundraising, Chase is healthier and stronger than before. 

                            </p>
                        </div>
                    </div>
                </div>
                <div id="1000" class="tab-pane fade in">
                    <h2> Comma Club - $1,000</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="//img.terpthon.org/miraclekids/fundraising_levels/Olivia.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <p class = "home">A minimum of $1,000.00 will grant you a Comma Club t-shirt, special recognition at our Dance Marathon, and incentives for the previous levels. At the age of two, our Miracle Kid Olivia received a heart transplant and has since undergone over 1,000 procedures at the hospital. Each procedure is represented by a bead on a string called “Beads of Courage.” Your fundraising will help kids like Olivia stay courageous and strong throughout their recovery.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="1300" class="tab-pane fade in">
                    <h2> Heroes of the Heart - $1,300</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="//img.terpthon.org/miraclekids/fundraising_levels/Sammy.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <p class = "home">A minimum of $1,300.00 will grant you an invitation to special recognition at our Dance Marathon and incentives for the previous levels. This number signifies the 13 beds in the Cardiac Intensive Care Unit (CICU) at the hospital. Soon after birth, our Miracle Kid Sammy was diagnosed with tetralogy of fallot and a large ventricular septal defect in his heart. Sammy was treated at the CICU, where he had open heart surgery that repaired both of his conditions. Sammy was even nicknamed the "Rockstar" of the CICU while he was there. Thank you for being a hero to kids like Sammy, and for putting your heart into fundraising For The Kids!
                            </p>
                        </div>
                    </div>
                </div>
                <div id="1746" class="tab-pane fade in">
                    <h2> Nurse's Circle - $1,746</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="//img.terpthon.org/miraclekids/fundraising_levels/Tess_Alexander.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <p class = "home">A minimum of $1,746.00 will grant you an invitation to a hospital tour, special recognition at our Dance Marathon, an invitation to an exclusive catered event, and incentives for the previous levels. This past year, 1,746 nurses have helped saved lives at Children’s National. 1,746 nurses who have helped kids like Tess and Alexander, born with cerebral palsy. Today, Tess and Alexander are healthy and happy kids who enjoy activities like playing piano and making YouTube videos. Thanks to you, these children can celebrate the numerous miracles their nurses have helped make.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="2500" class="tab-pane fade in">
                    <h2> Mega Miracle Maker - $2,500</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="//img.terpthon.org/miraclekids/fundraising_levels/Jaiwen.jpg" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            <p class = "home">A minimum of $2,500.00 will grant you an invitation to our exclusive catered event, special recognition at our Dance Marathon, an invitation to our Family Corner at Terp Thon, and incentives for the previous levels. At the age of 11, our Miracle Kid Jaiwen was diagnosed with osteosarcoma after a soccer injury. He has undergone numerous weeks of chemotherapy and  had his left femur amputated and replaced with a titanium prosthesis. Today, Jaiwen serves as the senior class president and is in charge of Walk Away Cancer, a Mini Marathon at Walt Whitman High School that has recently raised over $40,000 for the fight against childhood cancer. Your outstanding fundraising has helped hundreds of cancer patients like Jaiwen. 

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class ="row">
</div>

<?php
include("includes/footer.inc.php");
?>