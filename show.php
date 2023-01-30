<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>
    <head>
    <title>เเสดงข้อมูล</title>
</head>
    <style>
        body {
            font-family: Arial, Verdana;
            font-size:18px;
        }

        h1 {
            font-size:18px;
        }
    </style>
    <body>
        <h1>ข้อมูลที่เเสดงผล</h1>
        <?php
        
            $name= $_GET["name"];
            $age= $_GET["age"];
            $sex= $_GET["sex"];
            $status= $_GET["status"];

            if ($age < "16" && $sex == "ผู้ชาย" && $status == "ยังไม่ได้แต่งงาน"){
                $titaltxt="ด.ช.";
                $sex = "เพศชาย";
                $status="ยังไม่ได้แต่งงาน";
            }else if($age > "15" && $sex == "ผู้ชาย" && $status == "ยังไม่ได้แต่งงาน"){
                $titaltxt="นาย";
                $sex = "ชาย";
                $status="ยังไม่ได้แต่งงาน";
            }else if($age > "16" && $sex == "ผู้ชาย" && $status == "แต่งงานแล้ว"){
                $titaltxt="นาย";
                $sex = "ชาย";
                $status="แต่งงานแล้ว";
            }else if($age < "16" && $sex == "ผู้ชาย" && $status == "แต่งงานแล้ว"){
                $titaltxt="ด.ช.";
                $sex = "ชาย";
                $status="แต่งงานแล้ว";
            }else if($age < "16" && $sex == "ผู้หญิง" && $status == "ยังไม่ได้แต่งงาน"){
                $titaltxt="ด.ญ.";
                $sex = "หญิง";
                $status="ยังไม่ได้แต่งงาน";
            }else if($age > "15" && $sex == "ผู้หญิง" && $status == "ยังไม่ได้แต่งงาน"){
                $titaltxt="นางสาว";
                $sex = "หญิง";
                $status="ยังไม่ได้แต่งงาน";
            }else if($age > "15" && $sex == "ผู้หญิง" && $status == "เเต่งงานเเล้ว"){
                $titaltxt="นาง";
                $sex = "หญิง";
                $status="เเต่งงานเเล้ว";
            }else if($age < "16" && $sex == "ผู้หญิง" && $status == "เเต่งงานเเล้ว"){
                $titaltxt="ด.ญ.";
                $sex = "หญิง";
                $status="แต่งงานแล้ว";
            }

            echo "<font style='font-size:18px'>";
            echo "<b>ชื่อ:</b> ".$titaltxt.$name."<br>";
            echo "<b>อายุ:</b> ".$age."<br>";
            echo "<b>เพศ:</b> ".$sex."<br>";
            echo "<b>สถานะ:</b> ".$status."<br>";
        ?>
    </body>
</html>