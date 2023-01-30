<?php
  require("connect_db.php");

  $id=$_GET["id"];
  $sql = "SELECT * FROM survey WHERE id=$id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fatch_assoc();
?>

<form action="save_edit_peopple.php" method="post">
  Fist Name: <input type="text" name="fistname" value="<?php print($row["fistname"]);?>"<br>
  last Name: <input type="text" name="lastname" value="<?php print($row["lastname"]);?>"<br>

  Sex;<select name="sex">
    <option value="male" <?php if($row["sex"] == "male")?>>male</option>
    <option value="famale" <?php if($row["sex"] == "famale")?>>famale</option>
    
    Marry Status:<select name="marry_status">
            <option value="S" <?php if($row["marry_status"]=="single") print("selected");?>>single</option>
            <option value="M" <?php if($row["marry_status"]=="married") print("selected");?>>married</option>
        </select><br>
    <input type="submit" value="edit">
</form>
<?php
}
?>