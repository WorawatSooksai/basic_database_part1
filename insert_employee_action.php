<?php include "config.php";
// print_r($_POST);


$sql = "INSERT INTO `employees` (`emp_id`, `emp_name`, `emp_sex`, `emp_phone`, `emp_address`) 
VALUES (NULL, '".$_POST['emp_name']."', '".$_POST['emp_sex']."', '".$_POST['emp_phone']."', '".$_POST['emp_address']."');";
$result = mysqli_query($conn, $sql);



if ($result) {  // output data of each row
    echo '<a href="index.php">กลับเมนูหลัก</a>';
} else {
    echo("Error description: " . mysqli_error($con));
}

mysqli_close($conn);

