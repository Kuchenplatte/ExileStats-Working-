<?PHP
include "count.php";
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="../../tablesorter.min.js"></script>
<script>
$(document).ready(function() { 
    $("#stats").tablesorter(); 
 }); 
</script>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Acryl-Gaming.de Exile MOD Server Stats
        </title>
		<link href="../css/index.css" media="all" rel="stylesheet" type="text/css">
    </head>
<body>
<h3>
Player Summary
</h3>
<form action="1/index.php" method="post">
<p>Name: <input type="text" name="account_name" /></p>
<p><input type="submit" value="Show Summary"></p>
<input type="button" value="Back" onclick="history.back(-1)" />
</form>
</body>
</html>