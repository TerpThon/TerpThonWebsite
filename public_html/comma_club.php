<?php
$PAGE_SETTINGS["active"] = 'students';
include("includes/header.inc.php");

include "includes/mysql.inc.php";
setlocale(LC_MONETARY, 'en_US');


//CONSTANTS - CHANGE THESE IF NECESSARY. REFER TO DOCUMENTATION
$table_name = 'TTAPP_Participants_2014';
$first_name_attribute = 'participantfirstname';
$last_name_attribute = 'participantlastname';
$donation_amount_attribute = 'participantsumdonations';

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

$comma = array();
$champions = array();
$fivehundred = array();
$miraclemaker = array();

foreach($donations as $arr) {
	
	$t = floatval($arr[$donation_amount_attribute]);
	
	if ($t >= $comma_amount) {
		$comma[] = $arr;
	} /*else if ($t >= $champions_amount) {
		$champions[] = $arr;
	} else if ($t >= $five_hundred_amount) {
		$fivehundred[] = $arr;
	} else if ($t >= $miracle_maker_amount) {
		$miraclemaker[] = $arr;
	}*/
	
}
?>


<div class="content">

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

<br />

	<div class="row">
		<img src="//img.terpthon.org/stewardship_banners/club_comma.jpg" class="img-responsive"/><br />

<p>The students who are members of the Comma Club have gone above and beyond with their fundraising efforts to personally raise more than one thousand dollars For The Kids at Children's  National. In appreciation of their hard work and dedication to Terp Thon all members of the Comma Club will be permanently recognized on our website.</p>
<br />
<div class="col-sm-12" style="text-align: center;"><h2>2013 - 2014</h2></div>
		<div id="comma_left" class="col-sm-6">
		<?php
			for ($i = 0; $i < (int)(count($comma)/2); $i++) {
				$temp = $comma[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>
			<br />
		</div> 
	
		<div id="comma_right" class="col-sm-6">
		<?php
			for ($i = (int)(count($comma)/2); $i < count($comma); $i++) {
				$temp = $comma[$i];
				if($temp[$first_name_attribute] == "James" && $temp[$last_name_attribute]== "Collins"){
				$temp[$first_name_attribute] = "Tyler";
				$temp[$last_name_attribute] = "Lundfelt";
				}
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div>
	</div>
</div>
<?php
include("includes/footer.inc.php");
?>