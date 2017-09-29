<?php
	
	include 'includes/mysql.inc.php';

	$participant_ID = intval($_GET["participant_id"]);
	$this_team_name = "";
	
	$event = array();
	$participant = array();
	$donations = array();
	$participants = array();
	$teams = array();
	$teammates = array();
	$colorwars_teams = array();
	
	
	
	/* Get all donations for current Dancer */
	$donations_stmt = $dbh->prepare("SELECT	donorfirstname, donorlastname, 
											donationamount, donationdateentered 
									FROM 	TTAPP_Donations_2014
									WHERE 	participantid=$participant_ID");
	
	$donations_stmt->execute();	
	while($curr_donation = $donations_stmt->fetch(PDO::FETCH_ASSOC))
	{
		$donations[] = $curr_donation;
	}
	
	/* Get all data for current dancer */
	$participant_stmt = $dbh->prepare("SELECT	TTAPP_Participants_2014.participantfirstname,
												TTAPP_Participants_2014.participantlastname, TTAPP_Participants_2014.participantfundraisinggoal,
												TTAPP_Participants_2014.participantsumdonations, 
												TTAPP_Teams_2014.teamname,
												TTAPP_Teams_2014.teamsumdonations,
												TTAPP_Teams_2014.teamfundraisinggoal
										FROM 	TTAPP_Participants_2014
										INNER JOIN 	TTAPP_Teams_2014
											ON TTAPP_Participants_2014.teamname=TTAPP_Teams_2014.teamname
										WHERE 	TTAPP_Participants_2014.recordid=$participant_ID");
	$participant_stmt->execute();
	if ($curr_this_participant = $participant_stmt->fetch(PDO::FETCH_ASSOC))
	{
		$participant = $curr_this_participant;
		$this_team_name = strval($participant['teamname']);
	}
	
	/* Get all dancers */
	$participants_stmt = $dbh->prepare("SELECT	*
										FROM 	TTAPP_Participants_2014");
	$participants_stmt->execute();
	while ($curr_participant = $participants_stmt->fetch(PDO::FETCH_ASSOC))
	{
		$participants[] = $curr_participant;
	}
	
	/* Get all teammates of current dancer */
	$teammates_stmt = $dbh->prepare("SELECT	*
										FROM 	TTAPP_Participants_2014
										WHERE	STRCMP(teamname,'$this_team_name')=0");
	$teammates_stmt->execute();	
	while ($curr_teammate = $teammates_stmt->fetch(PDO::FETCH_ASSOC))
	{
		$teammates[] = $curr_teammate;
	}
	
	
	/* Get all Teams */
	$teams_stmt = $dbh->prepare("SELECT	*
										FROM 	TTAPP_Teams_2014");
	$teams_stmt->execute();
	while ($curr_team = $teams_stmt->fetch(PDO::FETCH_ASSOC))
	{
		$curr_team['teamaverage'] = strval(($curr_team['teamsumdonations'])/(floatval($curr_team['teamnumparticipants'])));
		$teams[] = $curr_team;
	}
	
	
	/* Get event data */
	$event_stmt = $dbh->prepare("SELECT	*
										FROM 	TTAPP_Event_2014
										WHERE	Name='Terp Thon 2014'");										
	$event_stmt->execute();
	if ($curr_event = $event_stmt->fetch(PDO::FETCH_ASSOC))
	{
		$event = $curr_event;
	}
	
	$colorwars_stmt = $dbh->prepare("SELECT * 
											FROM	colorwars_2014_totals");
	$colorwars_stmt->execute();
	while ($curr_color = $colorwars_stmt->fetch(PDO::FETCH_ASSOC))
	{
		$colorwars_teams[] = $curr_color;
	}
	
	$data = array();
	$data[] = $event;		//The first array element for data is the event data
	$data[] = $participant;   //The second array element of data is an associative array of participant data
	$data[] = $donations;
	$data[] = $teammates;
	$data[] = $participants;
	$data[] = $teams;
	$data[] = $colorwars_teams;
	
	echo json_encode($data);
	
?>