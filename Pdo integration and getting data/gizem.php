<html>
<body>

<form action="gizem.php" method="post">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>

</body>
</html>

<?php

include ("mysql.php");

$query = $conn->query("SELECT * FROM user WHERE username = $_POST['username'] AND password = $_POST['password']", PDO::FETCH_ASSOC);
 if ( $query->rowCount() ){
  foreach( $query as $row ){
  print $row['username']."<br />";
  print $row['password']."<br />";
  print $row['phone']."<br />";
 }
}

?>
