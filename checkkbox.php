
<table border=1>

<?php 

echo "<tr><td><b>Name and Surname :</b></td></tr>".$_POST["nameAndSurname"];
echo "<tr><td><br><b>Fruit :</b></td></tr>".$_POST["fruit"];
echo "<tr><td><br><b>Cinsiyet :</b></td></tr>".$_POST["cinsiyet"];
echo "<tr><td><br><b>Comment :</b></td></tr>".$_POST["comment"];

if ($_POST) {

	$drink = $_POST['drink'];

	foreach ($drink as $key => $value) {
		echo $value."<br>";
	}
}
?>

</table>
