<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$what=$_POST['what'];
$cost=$_POST['cost'];
$blue=$_POST['blue'];
$purple=$_POST['purple'];
$pink=$_POST['pink'];
$orange=$_POST['orange'];
$yellow=$_POST['yellow'];
$green=$_POST['green'];
$whitish=$_POST['whitish'];
$pig=$_POST['quantity_of_pink_bastards'];
$panda=$_POST['quantity_of_retarded_pandas'];

$to="shamsial2000@gmail.com";
$subject = "Заявка с сайта по продаже ";
$message = 
"
Пользователь хочет :" .htmlspecialchars($what)." <br />
".htmlspecialchars($blue)." голубых <br />
".htmlspecialchars($purple)." фиолетовых <br />
".htmlspecialchars($pink)." розовых <br />
".htmlspecialchars($orange)." оранжевых <br />
".htmlspecialchars($yellow)." жёлтых <br />
".htmlspecialchars($green)." зелёных <br />
".htmlspecialchars($whitish)." белых <br />
".htmlspecialchars($pig)." нюш <br />
".htmlspecialchars($panda)." панд <br />
Имя :".htmlspecialchars($name)."<br />
Телефон : ".htmlspecialchars($phone)."<br />
Почта :".htmlspecialchars($email)."<br />
Сумма :".htmlspecialchars($cost);
$headers = "from: maproject.ml <project25018@maproject.ml>\r\nContent-type : text/html;charset=UTF-8\r\n";
mail ($to,$subject, $message,$headers);
header('Location: thanks/thanks.html');
exit();
?>