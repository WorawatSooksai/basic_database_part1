<?php include "config.php";

$sql = "INSERT INTO `customers` (`cus_id`, `cus_name`, `cus_sex`, `moblie_phone`) 
VALUES (NULL, '".$_POST['cus_name']."', '".$_POST['cus_sex']."', '".$_POST['moblie_phone']."');";
$result = mysqli_query($conn, $sql);



if ($result) {  // output data of each row
    echo '<a href="index.php">กลับเมนูหลัก</a>';
} else {
    echo("Error description: " . mysqli_error($con));
}

mysqli_close($conn);

// print_r($_POST);
//var_dump($_POST);