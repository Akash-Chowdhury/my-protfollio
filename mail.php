<?php
if(isset($_POST['submit']))
{   $name=$_POST['Name'];
    $email=$_POST['Email'];
    $sub=$_POST['subject'];
    $msg=$_POST['message'];

    $send=mail("chowdhuryakash950@gmail.com",$msg);
    {
      if ($send){
          echo "<script>alert('Done')</script>";
      }
    
      else{
        echo "<script>alert('Not Done')</script>";
      }
    }
}
?>