<?php
$PAGE_SETTINGS["active"] = 'donatenow';
include("includes/header.inc.php");
?>


<div class="content">
<h1>Donate Now!</h1>
<h3>General Donation</h3>
<p>If you would like to give a general donation to Terp Thon, click the following link: 
<a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.event&eventID=1952">General Donation.</a></p>

<h3>Donation to a Specific Dancer</h3>
<p>If you would like to donate on behalf of a specific participant, enter their name in the search box below:</p>

<!--http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.search&filter=participant&eventID=1952&searchTerm=Maryam-->

<form role="form" id="participantTeamSearch" name="participantTeamSearch" action="http://www.helpmakemiracles.org/index.cfm?" method="POST">
	<input type="hidden" id="fuseaction" name="fuseaction" value="donorDrive.search" />
		
	<input type="hidden" name="participant&eventID" value="1952">
	
	<label for="participantName">
	Name of Dancer:</label>
		<input type="text" id="participantName" name="participantName" size="25" maxlength="50">
	<button type="submit" title="Search" class="btn btn-red"><span>Search</span></button>
</form>


</div>

<?php
include("includes/footer.inc.php");
?>