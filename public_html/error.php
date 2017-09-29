<?php
include("includes/header.inc.php");
?>

<div class="content">

<?php

if(isset($_GET["code"])) {
	$code = $_GET["code"];
	$errors = array(
		400 => "Bad Request",
		401 => "Unauthorized",
		403 => "Forbidden",
		404 => "Page Not Found",
		500 => "Internal Server Error"
	);
	$descriptions = array(
		400 => "The request cannot be fulfilled due to bad syntax.",
		401 => "This page requires the user to have valid credentials. Either no credentials were provided, or the ones provided were invalid.",
		403 => "This page is not available for viewing",
		404 => "The requested page/resource cannot be found on this website.",
		500 => "The server has experienced an unexpected error and could not complete your request. Please try again at a later time."
	);
	if(isset($errors[$code]) && isset($descriptions[$code]))
		echo "<h1>$code Error - ${errors[$code]}</h1><p>${descriptions[$code]}</p><p><a href='javascript:javascript:history.go(-1)'>Go Back</a></p>";
	else
		echo "<h1>Error</h1><p>You have experienced an error. Please try going to the <a href='/index.php'>homepage</a> and try again.</p>";
	
} else {
?>

<h1>Error</h1>

<p>You have experienced an error. Please try going to the <a href="/index.php">homepage</a> and try again.</p>

<?php
}
?>

</div>

<?php
include("includes/footer.inc.php");
?>