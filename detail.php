<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>

<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["pid"]);
$stmt->execute();
$row = $stmt->fetch();
?>

<div style="padding: 15px">
ชื่อ : <?=$row ["name"]?> <br>
ที่อยู่ : <?=$row ["address"]?> <br>
อีเมล์ : <?=$row ["email"]?> <br>
<img src='img/<?=$row["username"]?>.jpg' width='100'>
<hr><br>

</div>
</body>
</html>