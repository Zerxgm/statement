<?php
$con=mysqli_connect('localhost','root','','doc');
if($con==false){
    print("Ошибка подключения: ".mysqli_connect_error());
}else {
    print("Соединение установленно");
}

?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Формо отправки данных</title>
</head>
<body>


<form method="post">
    <p>Ваша Фамилия: <input type="text" name="surname" /></p>
    <p>Ваше Имя: <input type="text" name="name" /></p>
    <p>Ваше Отчество: <input type="text" name="oname" /></p>
    <p>Ваше Отчество: <input type="date" name="d_add" /></p>
    <p><input type="submit" name="send" value="Отправить"/></p>
</form>

<?php
$sql="INSERT INTO statement SET surname = '$_POST[surname]',name = '$_POST[name]',oname = '$_POST[oname]',d_add = '$_POST[d_add]'";
$result=mysqli_query($con,$sql);
if(!$result){
    $error=mysqli_error($con);
    print("Ошибка MySQL: ".$error);
}
?>




</body>
