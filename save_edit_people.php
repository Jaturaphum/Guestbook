<?php
require("connect_db.php");

    $id = $POST["id"];
    $fiastname = $POST["fiastname"];
    $lastname = $POST["lastname"];
    $age = $POST["age"];
    $sex = $POST["sex"];
    $marry_status = $POST["marry_status"];

    echo "fiastname:$fiastname lastname:$lastname age:$age sex:$sex marry_status:$marry_status";
$sql = "UPDATE guests SET ,firstname = $fiastname ,lastname = $lastname ,age = $age , sex = $sex, marry_status = $marry_status";
$conn->query($sql);
    header("location: list_people.php");
?>

