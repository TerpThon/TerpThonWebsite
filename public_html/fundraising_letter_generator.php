<?php
$PAGE_SETTINGS["active"] = 'students';
$PAGE_SETTINGS["js"] = array("/js/fundraising_letter_generator.js");
include("includes/header.inc.php");
?>

<div class="content">

<h1>Students</h1>

<h2>Make a Fundraising Email</h2>

<form action="/fundraising_letter_generator.php" method="POST">
<label for="dancer_name">Your Name: </label><input id="dancer_name" name="dancer_name" type="text" /><br />
<label for="fundraising_goal">Fundraising Goal: </label><input id="fundraising_goal" name="fundraising_goal" type="text" /><br />
<input id="generate_button" type="button" value="Generate" class="btn btn-red"/>
</form>

<div id="letter_error_div"></div>
<div id="letter_div"></div>

</div>

<?php
include("includes/footer.inc.php");
?>