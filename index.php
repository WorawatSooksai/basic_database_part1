<?php include "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sarunmassage</title>
</head>
<body>
    <center>
    <a href="insertcustomer.php">เพิ่มชื่อผู้ใช้</a><br>
    <a href="insertemployee.php">เพิ่มชื่อผู้ให้บริการนวด</a><br>
    <a href="insertmassage.php">เพิ่มรายการบริการนวด</a><br>
    
    <br>รายการนวด
    <table border="1">
        <tr>
            <th>ลูกค้า</th>
            <th>หมอนวด</th>
            <th>ราคา</th>
            <th>ชำระเงิน</th>        
        </tr>

        <?php 
            $sql = "select customers.cus_name  , employees.emp_name , payment.pay_price , payment.pay_complete
            from massage NATURAL join customers NATURAL join employees NATURAL join payment;";

            // inner 
            $res = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($res)){
                echo ' <tr>
                <td>'.$row['cus_name'].'</td>
                <td>'.$row['emp_name'].'</td>
                <td>'.$row['pay_price'].'</td>
                <td>';

                if($row['pay_complete']==0){
                    echo 'ยังไม่ชำระเงิน';
                }else if($row['pay_complete']==1){
                    echo 'ชำระแล้ว';
                }
                
                echo '</td> </tr>';
            }
        ?>
        

    </table>
    </center>
</body>
</html>