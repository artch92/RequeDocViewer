<?php

		$mysqli = new MySQLi("localhost:3306", "root","root123", "db_login");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
?>