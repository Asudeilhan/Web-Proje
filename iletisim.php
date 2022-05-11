<?php
session_start();


if(isset($_POST['submit'])){

$isim = $_POST['fname'];
$soyadi = $_POST['lname'];
$mail = $_POST['email'];
$cinsiyet =$_POST['gender'];
$address = $_POST['address'];
$sehir = $_POST['state'];
$ulke= $_POST['country'];





echo ($isim);
echo"<br>"  ;
echo ($soyadi);
echo"<br>"  ;
echo ($mail);
echo"<br>"  ;
echo ($cinsiyet);
echo"<br>"  ;
echo ($address);
echo"<br>"  ;
echo ($sehir);
echo"<br>"  ;
echo ($ulke);
echo"<br>"  ;


}






?>