
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Terp Thon</title>
	<meta name="description" content="">
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<link rel="shortcut icon" href="../favicon.ico" />
	<!--<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/main.css">-->
	<script type="text/javascript" src="../js/vendor/jquery-1.10.1.min.js" ></script>
	<script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<style>
	body{
		overflow: hidden;
		font-family: arial;
	}
	div.color-div {
		height:100px;
		width:100%;
		text-align:center;
		color:white;
		font-size:20px;
		cursor:pointer;
	}
	div#inputContainer{
		height: 600px;
		color:	black;
		text-align: center;
	}
	div#colorContainer{
		height: 600px;
	}
	div#backButton, div#updateButton {
		margin-top: 10px;
		width:45%; 
		background-color:black; 
		color:white; 
		cursor:pointer;
		border-radius: 3px;
		display: inline-block;
		height:3.2em;
	}
	span.inner-button{
		padding-top:4%;
		display: inline-block;
		font-size: 26px;
	}
	div#innerInputContainer {
		padding-top: 15%;
	}
	div.color-text{
		padding-top:40px;
	}
	input#pointsInput{
		margin: 5px;
		width: 79%;
		height: 2em;
		text-align: center;
		font-size: 30px;
	}
	</style>
</head>
<body style="margin:0;">  
	<div class="container">
		<div class="content">
			<div class="row" id="colorContainer">
			</div>
			<div class="row" id="inputContainer" style="display:none;">
				<div id="innerInputContainer">
					<input id="pointsInput" type="number" name="points" value="10">
					<br>
					<div id="updateButton">
						<span class="inner-button">Update<span>
					</div>
					<div id="backButton">
						<span class="inner-button">Back</span>
					</div
				</div>
			</div>
		</div>
		<script type="text/javascript">
		var colors = ["Pink", "Green", "Blue", "Yellow", "Purple", "Orange"];
		var background = ["#ff33a1", "Lime", "#00FFFF", "Yellow", "#cc00ff", "#FD5F00"]

		var goBack = function(){
			jQuery("#inputContainer").hide();
			jQuery("#colorContainer").show();
		};
		var showInputDiv = function(color){
			jQuery("#inputContainer").css({
				"background-color":color
			});
			jQuery("#pointsInput").focus();
			jQuery("#inputContainer").scrollTop();
			jQuery("#updateButton").unbind("click").click(function(){
				var val = jQuery("#pointsInput").val();
				if(val == "" || Number(val)!=val || val%1 != 0){
					alert("Please enter an integer value");
					return;
				}
				$.ajax({
					url: "add_points.php", 
					dataType: "json",
					type: 'POST', 
					data: {team: color, points: val}, 
					success: function(json){ 
						console.log("success");
					},
					error: function(json){ 
						alert("Last update failed to connect to database. Go yell at James.");
					}
				});
				goBack();
			});				
		};
		jQuery(document).ready(function(){
			for(var i = 0; i < colors.length; i++){
				var color = colors[i];
				var b = background[i];
				var $newDiv = jQuery(document.createElement('div')).data("color",b);
				var $newColorText = jQuery(document.createElement('div')).addClass('color-text').text(color);
				$newDiv.css({
					"background-color": b
				})
				.addClass("color-div")
				.click(function(e){
					jQuery("#colorContainer").hide();
					jQuery("#inputContainer").show();
					showInputDiv(jQuery(this).data("color"));
				});
				$newDiv.append($newColorText);
				jQuery("#colorContainer").append($newDiv);
			}
			jQuery("#backButton").click(function(e){
				goBack();
			});
		});
		</script>
	</div>
</body>
</html>