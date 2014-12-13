<body>
<?
	require ("inc/connect.php");
	$query = "SELECT Id, Title FROM `pages`";
	$sql = mysql_query($query) or die(mysql_error());
	while($row=mysql_fetch_array($sql)){
		echo'<a href = "index.php?id='.$row['Id'].'">'.$row['Title'].'</a> ';
	}
	mysql_close();
	if (isset($_GET['id'])){
		$id=mysql_escape_string(htmlspecialchars($_GET['id']));
		require ("inc/connect.php");
		$query = "SELECT Text FROM `pages` WHERE Id='$id'";
		$sql = mysql_query($query) or die(mysql_error());
		$row=mysql_fetch_array($sql);
		echo'<p>'.$row['Text'].'</p>';
		mysql_close();
	}
?>
</body>