 <?php
include "../config/details.php";
$hello = new stdClass();
$hello->sql = mysqli_connect($host, $user, $pass, $db); 
// The Chart table contains two fields: weekly_task and percentage
// This example will display a pie chart. If you need other charts such as a Bar chart, you will need to modify the code a little to make it work with bar chart and other charts
$select = mysqli_query($hello->sql, "SELECT `class`,COUNT(*) FROM `vehicle` GROUP BY `class`");

$rows = array();
//flag is not needed
$flag = true;
$table = array();
$table['cols'] = array(

    // Labels for your chart, these represent the column titles
    // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
    array('label' => 'item', 'type' => 'string'),
    array('label' => 'COUNT(*)', 'type' => 'number')

);

$rows = array();
while($r = mysqli_fetch_array($select)) {
    $temp = array();
    // the following line will be used to slice the Pie chart
    $temp[] = array('v' => (string) $r['class']); 

    // Values of each slice
    $temp[] = array('v' => (int) $r['COUNT(*)']); 
    $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);
//echo $jsonTable;
?>

<html>
<link rel="shortcut icon" href="https://acryl-gaming.de/exilestats/icon.png">
  <head>
  	<link href="../css/index.css" rel="stylesheet"/>
    <link href="../css/table.css" media="all" rel="stylesheet" type="text/css">
    <!--Load the Ajax API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(<?=$jsonTable?>);
      var options = {
           title: 'Vehicles on map',
		   		  backgroundColor: '#29384C',
          is3D: 'true',
          width: 1000,
          height: 800
        };
      // Instantiate and draw our chart, passing in some options.
      // Do not forget to check your div ID
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
  </head>

  <body>
    <!--this is the div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
  <input type="button" value="Back" onclick="history.back(-1)" />
</html>