
<?php

session_start();


if(isset($_POST['submit']))
{
      $kullanci=$_POST['kullanci'];
      $sifre=$_POST['sifre'];
     if($kullanci=="g211210040@sakarya.edu.tr"  && $sifre=="g211210040")  
     {
       
       echo ("Hoşgeldiniz ``g211210040´´");
      echo"<br>"  ;
       echo '<a href="hakkimda.html"> Ana sayfaya geri dön </a>';
     }
       
      
       
    
     else
     {
       
       
      echo ("Lütfen tekrar deneyiniz");
      echo '<a href="giris.html">Giriş yap</a>';
     }


       



}

?>
