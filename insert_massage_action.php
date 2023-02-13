<?php print_r($_POST);

//INSERT INTO `payment` (`pay_id`, `pay_price`, `pay_complete`, `pay_datetime`) 
// VALUES (NULL, '', '0', '2023-02-13 09:20:43.000000');

include "config.php";

$price_mas = 0;

if($_POST['mas_type']=='นวดทั่วไป'){
    $price_mas = 240;
}else if($_POST['mas_type']=='นวดเส้น'){
    $price_mas = 300;
}else{
    $price_mas = 350;
}

$sql_pay = "INSERT INTO `payment` (`pay_id`, `pay_price`, `pay_complete`, `pay_datetime`) 
VALUES (NULL, '".($_POST['mas_time']* $price_mas)."', '0', '".date("Y-m-d H:i:s")."');
";
$result = mysqli_query($conn, $sql_pay);



if ($result) {  // output data of each row

    $pay_id = mysqli_insert_id($conn);

    $sql_mas = "INSERT INTO `massage` (`mas_id`, `mas_type`, `cus_id`, `emp_id`, `pay_id`, `mas_time`, `mas_timeupdate`) 
    VALUES (NULL, '".$_POST['mas_type']."', '".$_POST['cus_id']."', '".$_POST['emp_id']."', '".$pay_id ."', '".$_POST['mas_time']." ', current_timestamp());";
    $res_mas = mysqli_query($conn,$sql_mas);
    if($res_mas){
        echo '<a href="index.php">กลับเมนูหลัก</a>';
    }else{
        echo("Error description: " . mysqli_error($con));
    }
    
} else {
    echo("Error description: " . mysqli_error($con));
}

mysqli_close($conn);