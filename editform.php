<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<html>
<head><meta charset="utf-8"></head>
<body>
    <form action="edit-member.php" method="post" target="_blank">
       <input type="hidden" name="username" value="<?=$row["username"]?>">
        <input type="hidden" name="password" value="<?=$row["password"]?>">
        ชื่อสมาชิก:<input type="text" name="name" value="<?=$row["name"]?>"><br>
        ที่อยู่: <br>
        <textarea name="address" rows="3" cols="40"><?=$row["address"]?></textarea><br>
        เบอร์โทร: <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
        email: <input type="text" name="email" value="<?=$row["email"]?>"><br>
        <input type="submit" value="แก้ไขสมาชิก">
    </form>
</body>
</html>