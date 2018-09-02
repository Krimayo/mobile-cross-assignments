<?php
	include "connect.php";

	$sql = "SELECT idHistory,idAkun,entered FROM token";

	$result = $conn->query($sql);

	foreach($result as $row){
		echo "<data>";
		echo "<idProblem>".$row['idProblem']."</idProblem>";
		echo "<idAkun>".$row['idAkun']."</idAkun>";
		echo "<entered>".$row['entered']."</entered>";
		echo "</data>";
	}
?>