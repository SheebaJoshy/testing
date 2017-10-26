<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	
	<?php
	$serverName = "repotest.database.windows.net";
	$connectionOptions = array(
    "Database" => "UserNameDB",
    "Uid" => "sjoshy",
    "PWD" => "#Kottayam96"
	);
//Establishes the connection
	$conn = sqlsrv_connect($serverName, $connectionOptions);
	
	mysql_query("create table UserNameDB (fname text(20), lname text(20), email text(20), uname text(20))");
	
	&fname = $_GET["fnm"];
	&lname = $_GET["lnm"];
	&email = $_GET["email"];
	&uname = $_GET["uname"];
	
	mysql_query("insert into UserNameDB values('&fnaame', '&lname','&email', '&uname')" );
		
	?>
</body>
</html>