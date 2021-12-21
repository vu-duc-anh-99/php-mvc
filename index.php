<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sinh viên</title>
</head>
<body>
    
</body>
</html>

<?php 

    include "DBconfig/DBConfig.php";

    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    else{
        $controller = "";
    }

    switch ($controller) {
        case 'sinh-vien':
            include 'Controller/sinhvien/index.php';
            break;
        default:
            include 'Controller/sinhvien/index.php';
            break;
    }
?>