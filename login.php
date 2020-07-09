<?php
   require_once 'login/set_auth.php';

   if ($_SESSION['login']){
      header('Location:index.php');
      exit;
   }
?>
<!DOCTYPE html>
<html lang="ru">

<head>
   <?php require_once 'header/metahead.php'; ?>
   <title>LogIn TestEx - BeeJee</title>
</head>

<body>
   <?php require_once 'header/header.php';

      if($_SESSION['msg']['login-err']) {
         echo '<div class="alert alert-danger" role="alert" id="alert_error" style="opacity:1;">'.$_SESSION['msg']['login-err'].'</div>';
         unset($_SESSION['msg']['login-err']);
      }
   ?>

   <div class="container" style="width:500px;">
      <?php require_once 'view/login.php'; ?>
   </div>

</body>

</html>
