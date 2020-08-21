<?php
include('../config/details.php');
include('main.php');
$core = new Core();
?>
<html>
<head>
<link rel="shortcut icon" href="http://icons.iconarchive.com/icons/iconsmind/outline/128/Alien-2-icon.png">
  <title>Acryl-Gaming.de Exile MOD Server Stats</title>
	<link href="../css/index.css" rel="stylesheet"/>
    <link href="../css/table.css" media="all" rel="stylesheet" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="../tablesorter.min.js"></script>
	<script>
	$(document).ready(function() { 
        $("#stats").tablesorter(); 
    }); 
    </script>
</head>
<body>
<?php
$core->player_stats();
?>
</body>
<div id="footer">
<input type="button" value="Back" onclick="history.back(-1)" />
<span>Acryl-Gaming.de Exile MOD Server Stats 2019 </span>
</div>
</html>