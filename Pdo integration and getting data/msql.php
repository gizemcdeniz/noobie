<?php  

$dsn = "mysql:host=localhost;dbname=userphp";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);
$sonuc = $pdo->query("select * from user")->FetchAll(PDO::FETCH_ASSOC);

echo "<table>";

foreach ($sonuc as $key => $value) {
	foreach ($value as $username => $x) {
		echo "<tr><td>".$username."</td><td>".$x."</td></tr>";
	}

}
echo "</table>";
// echo json_encode($sonuc);

?>



