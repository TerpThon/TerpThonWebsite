<?php
$PAGE_SETTINGS["active"] = 'students';
include("includes/header.inc.php");

include "includes/mysql.inc.php";

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
	} else if ($t >= $champions_amount) {
		$champions[] = $arr;
	} else if ($t >= $five_hundred_amount) {
		$fivehundred[] = $arr;
	} else if ($t >= $miracle_maker_amount) {
		$miraclemaker[] = $arr;
	}
	
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

<h1>Donor Fundraising Levels</h1>
<p>Terp Thon's donor stewardship program aims to recognize individual dancers who have gone above and beyond their fundraising minimum. Each level of fundraising represents a specific milestone and upon reaching that level the individual will be notified accordingly. As dancers increase their fundraising totals For The Kids they will receive special incentives which are listed at each level below.</p>
<br />

	<div class="row">
		<img src="//img.terpthon.org/stewardship_banners/club_comma.jpg" class="img-responsive"/><br />
		<ul>
			<li>Members of The Comma Club have raised <b style="color:#8DC73F">$1,000</b>.</li>
			<li>Comma Club members recieve special recognition during Dance Marathon, 
					as well as permanent recognition on TerpThon.org.</li>
		</ul>
		<div id="comma_left" class="col-sm-6">
		<?php
			for ($i = 0; $i < count($comma)/2; $i++) {
				$temp = $comma[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- $%.2n',$temp[$donation_amount_attribute]);
			}
		?>
			<br />
		</div> 
	
		<div id="comma_right" class="col-sm-6">
		<?php
			for ($i = (count($comma)/2)+1; $i < count($comma); $i++) {
				$temp = $comma[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- $%.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div>
	</div>

	<div class="row">
		<img src="//img.terpthon.org/stewardship_banners/club_champions.jpg" class="img-responsive"/>
		<br />
		<ul>
			<li>Members of The Champions Club have raised <b style="color:#F7941D">$750</b>.</li>
			<li>Champions Club members are provided <i>premium</i> dinner at Dance Marathon.</li>
		</ul> 
		
		<div id="champions_left" class="col-sm-6">
		<?php
			for ($i = 0; $i < count($champions)/2; $i++) {
				$temp = $champions[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- $%.2n',$temp[$donation_amount_attribute]);
			}
		?>
		</div> 

		<div id="champions_right" class="col-sm-6">
		<?php
			for ($i = (count($champions)/2)+1; $i < count($champions); $i++) {
				$temp = $champions[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- $%.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div> 
	</div>

	<div class="row">
		<img src="//img.terpthon.org/stewardship_banners/club_500.jpg" class="img-responsive"/><br />
		<ul>
			<li>Members of The 500 Club have raised <b style="color:#01AEF0">$500</b>, and are provided dessert at Dance Marathon.</li>
		</ul>
		
		<div id="500_left" class="col-sm-6">
		<?php
			for ($i = 0; $i < count($fivehundred)/2; $i++) {
				$temp = $fivehundred[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- $%.2n',$temp[$donation_amount_attribute]);
			}
		?>
		</div> 

		<div id="500_right" class="col-sm-6">
		<?php
			for ($i = (count($fivehundred)/2)+1; $i < count($fivehundred); $i++) {
				$temp = $fivehundred[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- $%.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div>
	</div>


	<div class="row">	
		<img src="//img.terpthon.org/stewardship_banners/club_miracle_maker.jpg" class="img-responsive"/><br /> 
		<ul>
			<li>Miracle Makers have raised <b style="color:#FEF200">$240</b>.</li>
		</ul> 
		
		<div id="miracle_left" class="col-sm-4">
		<?php
			for ($i = 0; $i < count($miraclemaker)/3; $i++) {
				$temp = $miraclemaker[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- $%.2n',$temp[$donation_amount_attribute]);
			}
		?>
		</div> 
		
		<div id="miracle_center" class="col-sm-4">
			<?php
			for ($i = count($miraclemaker)/3+1; $i < (count($miraclemaker)/3)*2; $i++) {
				$temp = $miraclemaker[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- $%.2n',$temp[$donation_amount_attribute]);
			}
		?>			
			<br />
		</div> 

		<div id="miracle_right" class="col-sm-4">
				<?php
			for ($i = (count($miraclemaker)/3)*2+1; $i < count($miraclemaker); $i++) {
				$temp = $miraclemaker[$i];
				echo '<br /> ' . $temp[$first_name_attribute] . ' ' .  $temp[$last_name_attribute] . ' ' . money_format( '- $%.2n',$temp[$donation_amount_attribute]);
			}
		?>	
		</div> 
	</div>

</div>

	
<?php
include("includes/footer.inc.php");
?>