<?php

if (isset($_POST['first']) && isset($_POST['last']) && isset($_POST['email'])) {

	include 'includes/Mandrill/Mandrill.php';
	include 'includes/mysql.inc.php';

	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
/*
	$db_data = array('first' => $first, 'last'=> $last, 'email' => $email);
	$sth = $dbh->prepare("INSERT INTO sign-up-to-save-lives (first, last, email) VALUES(:first, :last, :email)");
	$sth->execute($db_data);

	$template_name = 'sign-up-to-save-lives';
*/
$template_name = 'sign-up-to-save-lives';
	$template_content = array();
	$message = array(
        'to' => array(
            array(
                'email' => $email,
                'name' => $first . " " . $last
            )
    	),
        'merge_vars' => array(
            array(
                'rcpt' => $email,
                'vars' => array(
                    array(
                        'name' => 'firstname',
                        'content' => $first,
                    )
                )
            )
        ),
	);

	try{
		$mandrill = new Mandrill('0yJb03imJLOZL2UHIiVgsw');
		$man_result = $mandrill->messages->sendTemplate($template_name, $template_content, $message);
	} catch(Mandrill_Error $e) {
	    echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
	    throw $e;
	}
}

?>

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>Terp Thon Email Signup</title>
  
  <link rel="stylesheet" href="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.css">
  
  <!-- jQuery and jQuery Mobile -->
  <script src="https://d10ajoocuyu32n.cloudfront.net/jquery-1.9.1.min.js"></script>
  <script src="https://d10ajoocuyu32n.cloudfront.net/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
   
</head>
<body>
<!-- Home -->
<div data-role="page" id="page1">
    <div data-theme="a" data-role="header" style="text-align: center;">
        <img src="//img.terpthon.org/header_imgs/transparent_rebrand_logo.gif" width="300px" style="padding-top: 5px;">
    </div>
    <?php 
    	if (isset($man_result)) {
            if ($man_result[0]['status'] == 'rejected' || $man_result[0]['status'] == 'invalid') {
                echo '<h2 style="margin: 15px 0 10px 10px;">There was a problem sending the email. Please try again.</h2>';
            } else {
                echo '<h2 style="margin: 15px 0 10px 10px;">Thanks, an email will be sent to you shortly!</h2>';
            }
    	}
    ?>
    <div data-role="content">
        <form action="fastlink_2017.php" method="post">
            <div data-role="fieldcontain">
                <label for="textinput1">
                    First Name
                </label>
                <input name="first" id="textinput1" class="required" type="text">
            </div>
            <div data-role="fieldcontain">
                <label for="textinput2">
                    Last Name
                </label>
                <input name="last" id="textinput2" class="required" type="text">
            </div>
            <div data-role="fieldcontain">
                <label for="textinput3">
                    Email
                </label>
                <input name="email" id="textinput3" class="required" type="email">
            </div>
            <input type="hidden" name="">
            <input type="submit" value="Submit">
        </form>
    </div>
</div>

</body>
</html>