<?php
class Core {
	private $sql;
	private $perms;
	public function __construct()
	{
		include('../config/details.php');
		$this->sql = mysqli_connect($host, $user, $pass, $db);
	}
    public function player_stats()
	{
		$select = mysqli_query($this->sql, "SELECT name, deaths, kills, total_connections, datediff(CURDATE(), `first_connect_at`), datediff(CURDATE(), `last_connect_at`), (kills/deaths) as ratio FROM account ORDER BY `kills` DESC LIMIT 100;");
		echo('<table width="700px" id="stats" class="tablesorter" border="0" cellspacing="0" align="center">');
		echo('<thead><tr>');
		echo('	<th>Name</th>');
		echo('	<th>Kills</th>');
		echo('	<th>Deaths</th>');
		echo('	<th>Ratio</th>');
		echo('	<th>Total connections</th>');
		echo('	<th>first connected</th>');
		echo('	<th>last connected</th>');
		echo('</tr></thead><tbody>');
		while($r = mysqli_fetch_array($select, MYSQLI_ASSOC))
		{ 
			echo('<tr class="row">');
			echo('	<td>'.$r['name'].'</td>');
			echo('	<td>'.$r['kills'].'</td>');
			echo('	<td>'.$r['deaths'].'</td>');
			echo('	<td>'.$r['ratio']);
			echo('	<td>'.$r['total_connections'].'</td>');
			echo('	<td>'.$r['datediff(CURDATE(), `first_connect_at`)'].' days ago</td>');
			echo('	<td>'.$r['datediff(CURDATE(), `last_connect_at`)'].' days ago</td>');
			echo('</tr>');
		}
		echo('</tbody></table>');
	}
}