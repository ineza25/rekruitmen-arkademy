<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="image">
</div>
<div id="header">

<ul>

 <li><a href="nav.html">Home</a></li>
 <li><a href="nav.html">News</a></li>
 <li><a href="nav.html">Contact</a></li>
 <li><a href="nav.html">About</a></li>
</ul>
</div>

<div id="nav">
<ul>
 <li><a href ="nav.html">Menu 1</a></li>
 <li><a href ="nav.html">Menu 2</a></li>
 <li><a href ="nav.html">Menu 3</a></li>
 <li><a href ="nav.html">Menu 4</a></li>
</ul>
</div>

<div id="section">
<!-- <h1>LONDON</h1>
<p>
london is the capital city of england. it is the most populous city in the united kingdom,with a metropolitan are of over 13 million in habitants.
</p>
<p>
standing on the river thames, london has been a major settlement for two millennia,its history going back to its founding by the romans, who named it londinium.
</p> -->
<table border="0" class="table" align="center" cellspacing="0">
	<thead>
	<tr>
		<td>Person ID</td>
		<td>Name</td>
		<td>Person hobbies</td>
	</tr>
	</thead>

<?php
	
	include 'koneksi.php';
	$sql = mysql_query('SELECT categories.id AS person_id, categories.name, GROUP_CONCAT(hobbies.name) AS person_hobbies
				FROM categories, hobbies
				WHERE categories.id=hobbies.person_id
				GROUP BY person_id, name');
	while( $row =  mysql_fetch_array($sql)){
	?>
	<tbody>
	<tr>
		<td><font size ="3"><?php echo $row['person_id'];?></td>
		<td><font size ="3"><?php echo $row['name'];?></td>
		<td><font size ="3"><?php echo $row['person_hobbies'];?></td>
	</tr>
	</tbody>
	<?php
}
?>
	
</table>	
</div>
<div id="footer">
<marquee >@Ineza Damayanti</marquee>
</div>
</body>
</html>

