
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Форма авторизации</title>
</head>
<body>




<?php
$sql="INSERT INTO user SET login = '$_POST[login]',password = '$_POST[password]'";
$result=mysqli_query($con,$sql);
if(!$result){
    $error=mysqli_error($con);
    print("Ошибка MySQL: ".$error);
}
?>




</body>