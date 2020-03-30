<table border=1>

<?php 

$tarih =date("d-m-Y");

    echo $tarih;


if ($_POST) {

    $name = $_POST['nameAndSurname'];
    echo "<tr><td><b>Name and Surname:</b>"."<td>$name</td>";

    $phone = $_POST["phone"];
    echo "<tr><td><b>Phone Number:</b>"."<td>$phone</td>";

    $gender = $_POST['cinsiyet'];
    echo "<tr><td><b>Gender</b>:"."<td>$gender</td>";

    $fruit = $_POST['fruit'];
    echo "<tr><td><b>Fruit</b>:"."<td>$fruit</td>";

    $comment = $_POST['comment'];
    echo "<tr><td><b>Comment:</b>"."<td>$comment</td>";

    $drink = $_POST['drink'];

    foreach ($drink as $key => $value) {
        echo "<tr><td><b>Drinks</b>: "."<td>$value</td>";

    }
}

?>

</table>
