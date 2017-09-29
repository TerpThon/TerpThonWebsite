<?php
$PAGE_SETTINGS["active"] = 'students';
include("includes/header.inc.php");

//include("../../public_html/TTAPP/database_update_dancers_2016.php");



include "includes/mysql.inc.php";
setlocale(LC_MONETARY, 'en_US');
$included_files = get_included_files();

//CONSTANTS - CHANGE THESE IF NECESSARY. REFER TO DOCUMENTATION
$table_name = 'greek_data_sheet';
$first_name_attribute = 'participantfirstname';
$last_name_attribute = 'participantlastname';
$donation_amount_attribute = 'participantsumdonations';
$team_name = 'teamname';

$mega_amount = 2400;
$comma_amount = 1000;
$champions_amount = 750;
$five_hundred_amount = 500;
$miracle_maker_amount = 240;
$minimum_amount = 120;
//END OF CONSTANTS, UPDATE CONSTANT ON LINE 31

$donations_stmt = $dbh->prepare("SELECT	". $first_name_attribute .", ". $last_name_attribute .", 
											". $donation_amount_attribute ."  
									FROM 	". $table_name ." 
									WHERE	". $team_name ." ='Sigma Kappa (Green)'");

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
$minimum = array();
$undermin = array();

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
	} else if ($t >= $minimum_amount) {
		$minimum[] = $arr;
	} else {
		$undermin[] = $arr;
	}
	
}
?>

<div class="jumbotron wide">
    <div class="transbox_two_line_header">
        <h1>Sigma Kappa<br>Fundraising</h1>
    </div>  
</div>

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

	<div class="row">
		<div style="text-align:center">
			<h1>Mega Miracle Makers - $2400 and above</h1>
			<br />
		</div>
		<div id="mega_left" class="col-sm-6">
		<?php
			for ($i = 0; $i < (int)(count($mega)/2); $i++) {
				$temp = $mega[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>
			<br />
		</div> 
	
		<div id="mega_right" class="col-sm-6">
		<?php
			for ($i = (int)(count($mega)/2); $i < count($mega); $i++) {
				$temp = $mega[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div>
	</div>

	<div class="row">
		<div style="text-align:center">
			<h1 style="text-align:center">Comma Club - $1000 and above</h1>
		</div>
		<br />

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
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div>
	</div>
<br />

	<div class="row">
		<div style="text-align:center">
			<h1>Champions Club - $750 and above</h1>
		</div>
		<br />
		<div id="champions_left" class="col-sm-6">
		<?php
			for ($i = 0; $i < (int)(count($champions)/2); $i++) {
				$temp = $champions[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>
			<br />
		</div> 
	
		<div id="champions_right" class="col-sm-6">
		<?php
			for ($i = (int)(count($champions)/2); $i < count($champions); $i++) {
				$temp = $champions[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div>
	</div>
<br />

	<div class="row">
		<div style="text-align:center">
			<h1 >500 Club - $500 and above</h1>
		</div>
		<div id="five_hundred_left" class="col-sm-6">
		<?php
			for ($i = 0; $i < (int)(count($fivehundred)/2); $i++) {
				$temp = $fivehundred[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>
			<br />
		</div> 
	
		<div id="five_hundred_right" class="col-sm-6">
		<?php
			for ($i = (int)(count($fivehundred)/2); $i < count($fivehundred); $i++) {
				$temp = $fivehundred[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div>
	</div>
<br />

	<div class="row">
		<div style="text-align:center">
			<h1>Miracle Makers - $240 and above</h1>
		</div>
		<div id="miracle_maker_left" class="col-sm-6">
		<?php
			for ($i = 0; $i < (int)(count($miraclemaker)/2); $i++) {
				$temp = $miraclemaker[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>
			<br />
		</div> 
	
		<div id="miracle_maker_right" class="col-sm-6">
		<?php
			for ($i = (int)(count($miraclemaker)/2); $i < count($miraclemaker); $i++) {
				$temp = $miraclemaker[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div>
	</div>

	<div class="row">
		<div style="text-align:center">
			<h1>At Minimum - $120 and above</h1>
		</div>
		<div id="miracle_maker_left" class="col-sm-6">
		<?php
			for ($i = 0; $i < (int)(count($minimum)/2); $i++) {
				$temp = $minimum[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>
			<br />
		</div> 
	
		<div id="miracle_maker_right" class="col-sm-6">
		<?php
			for ($i = (int)(count($minimum)/2); $i < count($minimum); $i++) {
				$temp = $minimum[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div>
	</div>

	<div class="row">
		<div style="text-align:center">
			<h1>Not Yet at Minimum - Less than $120</h1>
		</div>
		<div id="miracle_maker_left" class="col-sm-6">
		<?php
			for ($i = 0; $i < (int)(count($undermin)/2); $i++) {
				$temp = $undermin[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>
			<br />
		</div> 
	
		<div id="miracle_maker_right" class="col-sm-6">
		<?php
			for ($i = (int)(count($undermin)/2); $i < count($undermin); $i++) {
				$temp = $undermin[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- %.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div>
	</div>
</div>
<?php
include("includes/footer.inc.php");
?>