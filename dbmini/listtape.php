<?php include "config.php";

$sql_list_tape = "SELECT * FROM `product`";
$res_list_tape = mysqli_query($conn,$sql_list_tape);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List tape</title>
</head>
<body>
    <h1>รายชื่อเพลง</h1>

    <table bordor="1">
        <tr>
            <th>รหัสเพลง</th>
            <th>ชื่อเพลง</th>
            <th>ราคา</th>
            <th>ประเภท</th>
            <th>จัดการ</th>
        </tr>
    
    <?php 
        while($row_list_tape = mysqli_fetch_array($res_list_tape)){
            echo '<tr>
            <td>'.$row_list_tape['product_ID'].'</td>
            <td>'.$row_list_tape['product_Name'].'</td>
            <td>'.$row_list_tape['product_Price'].'</td>
            <td>'.$row_list_tape['product_Type'].'</td>
            <td><a href="editproduct.php?product_ID='.$row_list_tape['product_ID'].'" target="_blank">แก้ไข</a>&nbsp;
            <a href="deleteproduct.php?product_ID='.$row_list_tape['product_ID'].'" target="_blank">ลบ</a></td>
        </tr>';
        }
    ?>
    </table>
    
</body>
</html>