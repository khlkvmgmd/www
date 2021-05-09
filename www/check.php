<?php
$surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$fathername = filter_var(trim($_POST['fathername']),FILTER_SANITIZE_STRING);
$group_num = filter_var(trim($_POST['group_num']),FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
// if (mb_strlen($login)<5 || mb_strlen($login)>90)
//   {
//   echo "Недопустимая длина логина";
//   exit;
//   }
// else if (mb_strlen($name)<3 || mb_strlen($name)>50)
//   {
//   echo "Недопустимая длина имени";
//   exit;
//   }
//   else if (mb_strlen($pass)<2 || mb_strlen($pass)>6)
//     {
//     echo "Недопустимая длина пароля(от 2 до 6 символов)";
//     exit;
//     }
$mysql = new mysqli('localhost','root','root','lk_db');
$mysql->query("INSERT INTO `student` (`surname`, `name`, `fathername`, `group_num`, `login`, `pass`) VALUES ('$surname', '$name', '$fathername', '$group_num', '$login', MD5('$pass'))") ;

$mysql->close();
header('location: profile.php');

?>
