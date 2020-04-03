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
 $query = $pdo->prepare("SELECT password FROM user WHERE username=?");
    $query->execute([$_POST['username']]);
    if($query->fetchColumn() === $_POST['password']) 
    {
      if ( $query->rowCount() ){
        foreach( $query as $row ){
          print $row['username']."<br />";
          print $row['password']."<br />";
          print $row['phone']."<br />";
        }
      }
    }

?>
