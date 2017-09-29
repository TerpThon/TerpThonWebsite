<?php
$PAGE_SETTINGS["active"] = 'faculty';
?>
<head>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/main1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>
  <link rel="stylesheet"href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/pepper-grinder/jquery-ui.css"/>
  <!--Load Bootstrap css-->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <!--load font awesome-->
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <?php
  if(isset($PAGE_SETTINGS["css"])) {
    foreach($PAGE_SETTINGS["css"] as $css)
      echo '<link rel="stylesheet" type="text/css" href="'.$css.'" />'."\n";
  }
  ?>
  <script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

  <script src="/js/vendor/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>

  <?php
    if(isset($PAGE_SETTINGS["js"])) {
      foreach($PAGE_SETTINGS["js"] as $js)
        echo '<script type="text/javascript" src="'.$js.'"></script>'."\n";
    }
    if(isset($PAGE_SETTINGS["active"])) {
      echo '<script type="text/javascript">setupNav("#nav_'.$PAGE_SETTINGS["active"].'");</script>';
    } else {
      echo '<script type="text/javascript">setupNav();</script>';
    }
  ?>

</head>


<img class="img-responsive center-block" style="max-height:200px; margin-bottom:25px" src="//img.terpthon.org/header_imgs/transparent_rebrand_logo.gif">

<h1 style="text-align:center">Residence Hall Teams</h1>
<div class="row" style="font-size:30px">
  <ul style="list-style-type: none; text-align:center">
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26804"><li>BCC Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.teamParticipants&teamID=26805"><li>Centreville Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26806"><li>Commons Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26807"><li>Courtyards Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26808"><li>Cumberland Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26810"><li>Denton Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26838"><li>Easton Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26839"><li>Elkton Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26840"><li>Ellicott Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26841"><li>Hagerstown Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26842"><li>LaPlata Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26843"><li>Leonardtown Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26844"><li>North Hill Area Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26845"><li>Oakland Residents</li></a>
    <a href="http://www.helpmakemiracles.org/index.cfm?fuseaction=donorDrive.team&teamID=26846"><li>South Hill Area Residents</li></a>
  </ul>
</div>
<?php
include("includes/footer.inc.php");
?>