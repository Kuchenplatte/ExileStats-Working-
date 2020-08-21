<?php
include('count.php');
?>
<html>
<head>
<link rel="shortcut icon" href="https://acryl-gaming.de/exilestats/icon.png">
<title>Acryl-Gaming.de Exile MOD Server Stats</title>
<link href="style.css" rel="stylesheet"/>
</head>
<div class="container">
  <h1 class="title">Acryl Exile Stats</h1>
  <ul>
    <li class="dropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="dropdown">Server</a>
      <ul class="dropdown-menu">
        <!--<li><a href="main/index.php">Ránking</a></li>-->
		<li><a href="sum/index.php">General</a></li>	
		<!-- DEATHS AND DEATHLOG NEEDS A CUSTOM MODIFICATION OVER EXILE FILES NOT SHARED FOR NOW</a></li>-->
		<!--<li><a href="deathLog/index.php">Log de Muertes</a></li>
		<li><a href="deaths/index.php">Estadísticas de Muertes</a></li>-->
		<li><a href="territories/index.php">Territories</a></li>
      </ul>
    </li>
	<li class="dropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="dropdown">Ranking</a>
      <ul class="dropdown-menu">
        <li><a href="main/index.php">Respect</a></li>
		<li><a href="ladderKills/index.php">Kills</a></li>
		<!--<li><a href="ladderRatio/index.php">Ratio de muertes</a></li>-->
        <!--<li><a href="ladderMoney/index.php">Dinero</a></li>-->	
      </ul>
    </li>
    <li class="dropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="dropdown">Search Players</a>
      <ul class="dropdown-menu">
	  	<li><a href="nameall/index.php">Work in Progress..</a></li>
		<li><a href="uidall/index.php">Work in Progress..</a></li>
      </ul>
    </li>
	<li class="dropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="dropdown">Diagrams</a>
      <ul class="dropdown-menu">
	  	<li><a href="pie8/index.php">Acryl Exile Vehicles</a></li>
		<li><a href="pie7/index.php">Acryl Exile Weapon</a></li>
		<li><a href="pie9/index.php">Acryl Exile Handgun</a></li>			
	  	<li><a href="pie6/index.php">Acryl Exile Uniforms</a></li>	
	    <li><a href="pie10/index.php">Acryl Exile Vests</a></li>
		<li><a href="pie5/index.php">Acryl Exile Backpacks</a></li>	  			
      </ul>
    </li>
<!--   <li class="dropdown">
      <input type="checkbox" />
      <a href="#" data-toggle="dropdown">Admin</a>
      <ul class="dropdown-menu">
        <li><a href="alogin/index.php">Login coming soon</a></li>
      </ul>
    </li>
  </ul>
 --> 
</div>
<!-- <img src="css/coft.png" alt="Smiley face" height="30" width="90"> WHO NEEDS THIS SHIT?! -->
</html>