<?php include "config.php" 


?>

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
    <form action="insert_massage_action.php" method="post">
    <strong>ชื่อลูกค้า :</strong>  
        <select name="cus_id">
            <?php 
            $sql_cus = "SELECT * FROM `customers`";
            $res_cus = mysqli_query($conn , $sql_cus);

            while($row_cus = mysqli_fetch_array($res_cus)){
                echo '<option value="'.$row_cus['cus_id'].'">'.$row_cus['cus_name'].'</option>';
            }
            
            ?>
        
        </select>
        <br>
        <strong>ชื่อผู้ให้บริการ :</strong>  
        <select name="emp_id">
            <?php 
            $sql_cus = "SELECT * FROM `employees`";
            $res_cus = mysqli_query($conn , $sql_cus);

            while($row_cus = mysqli_fetch_array($res_cus)){
                echo '<option value="'.$row_cus['emp_id'].'">'.$row_cus['emp_name'].'</option>';
            }
            
            ?>
        
        </select>
        <br>
        <strong>ชื่อประเภทการนวด :</strong>  
        <select name="mas_type">
            <option value="นวดทั่วไป" selected>นวดทั่วไป</option>
            <option value="นวดประคบสมุนไพร" selected>นวดประคบสมุนไพร</option>
            <option value="นวดเส้น" selected>นวดเส้น</option>
        
        </select>
        <br>
        <strong>จำนวนชั่วโมง :</strong> 
        <input type="number" name="mas_time" value="1" min="1" max="6" step="1" />

        <br>
        
        <button type="submit">เพิ่มรายการ</button>
    </form>
    </center>
</body>
</html>