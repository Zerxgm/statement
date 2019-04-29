<?php
$con=mysqli_connect('localhost','root','','doc');
if($con==false){
    print("Ошибка подключения: ".mysqli_connect_error());
}else {
    print("Соединение установленно");
}

?>