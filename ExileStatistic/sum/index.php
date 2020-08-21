<?php
include('../config/details.php');
include('main.php');
$sum = new sum();
?>
<html>
<head>
<link rel="shortcut icon" href="https://acryl-gaming.de/exilestats/icon.png">
  <title>Acryl-Gaming.de Exile MOD Server Stats</title>
<link href="../css/table.css" media="all" rel="stylesheet" type="text/css">
<link href="../css/index.css" media="all" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="tablesorter.min.js"></script>
	<script>
	$(document).ready(function() { 
        $("#stats").tablesorter(); 
    }); 
    </script>
</head>
<body>

<?php
$sum->sentence();
$sum->player_avg();
$sum->new_players();
$sum->new_ter();
$sum->sur();
?>
</body>
<div style="color:#aa0000" id="footer">
<input type="button" value="Back" onclick="history.back(-1)" />
<span>Acryl-Gaming.de Exile MOD Server Stats 2019</span>
</div>
</html>