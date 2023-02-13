<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มชื่อผู้ใช้</title>
</head>
<body>
    <center>
    <form action="insert_customer_action.php" method="post">
        <strong>ชื่อลูกค้า :
        <strong>เพศ : </strong>
        <select name="cus_sex">
        <option value="ชาย">ชาย</option>
        <option value="หญิง">หญิง</option>
        <option value="ไม่ระบุ">ไม่ระบุ</option>
        </select>
        <br>
        <strong>โทรศัพท์มือถือ : </strong><input type="text" name="moblie_phone"><br>
        <button type="submit">เพิ่มลูกค้า</button>
    </form>
    </center>
</body>
</html>