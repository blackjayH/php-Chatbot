<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    'wldnrwldnr1',
    'mydb'
);

$res = json_decode($_POST['json'], true);
for ($i = 0 ; $i < count($res) ; $i++) {
    $sql = "INSERT INTO shoppinglist VALUES ('".$res[$i]['userid']."','".$res[$i]['item']."','".$res[$i]['enrolldate']."','".$res[$i]['nf']."','".$res[$i]['direction']."','".$res[$i]['tf']."')";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}

mysqli_close($conn);
