<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มพนักงาน</title>
</head>
<body>
    <center>
    <form action="insert_employee_action.php" method="post">
        <strong>ชื่อ : </strong><input type="text" name="emp_name"> <br>
        <strong>เพศ : </strong>
        <select name="emp_sex">
        <option value="ชาย">ชาย</option>
        <option value="หญิง">หญิง</option>
        <option value="ไม่ระบุ">ไม่ระบุ</option>
        </select>
        <br>
        <strong>โทรศัพท์มือถือ : </strong><input type="text" name="emp_phone"><br>
        <strong>address : </strong><input type="text" name="emp_address"><br>
        <button type="submit">เพิ่มพนักงาน</button>
    </form>
    </center>
</body>
</html>