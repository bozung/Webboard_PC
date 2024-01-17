<?php 
session_start();
    if(!isset($_SESSION['id'])){
        header("location: index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1 style="text-align: center;">WEB WEB EIEI</h1>
    <hr>
    <table style="width: 40%" align="center">
        <tr><td colspan="2">ผู้ใช้ : <?php echo $_SESSION['username'] ?></td></tr>
        <tr><td>หมวดหมู่:</td><td><select name="category">
                                            <option value="allboard">เรื่องทั่วไป</option>
                                            <option value="lisboard">เรื่องเรียน</option>
                                        </select></td></tr>
        <tr><td>หัวข้อ:</td><td><input type="password" name="newpwd" size="35"></td></tr>
        <tr><td>เนื้อหา:</td><td><textarea style="width: 80%;" name="textboard"></textarea></td></tr>
        <tr><td colspan="2" style="text-align: left;"><input type="submit" value="บันทึกข้อความ"></td></tr>
    </table>
</body>
</html>