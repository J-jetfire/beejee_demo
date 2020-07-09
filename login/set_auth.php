<?php
session_set_cookie_params(2*7*24*60*60);
require 'cfg/functions.php';

if(isset($_POST['login']) && isset($_POST['password'])){
    $login = mysqli_real_escape_string($link, $_POST['login']);

    $records =mysqli_query($link,"SELECT password FROM `users` WHERE `login` = '$login'");
    $row = mysqli_fetch_assoc($records);
    $hash = $row['password'];
}

if($_SESSION['login'] && !isset($_COOKIE['rememberUser']) && !$_SESSION['rememberMe'])
{
   $_SESSION = array();
   session_destroy();
}

if(isset($_GET['logoff']))
{
   $_SESSION = array();
   session_destroy();
   header("Location: index.php");
   exit;
}

if($_POST['submit']=='Войти')
{
   $err = array();

   if(!$_POST['login'] || !$_POST['password'])
      $err[] = 'Все поля должны быть заполнены!';

   if(!count($err))
   {
      $_POST['login'] = mysqli_real_escape_string($link, $_POST['login']);
      $_POST['password'] = mysqli_real_escape_string($link, $_POST['password']);
      $_POST['rememberMe'] = (int)$_POST['rememberMe'];

      $sql = " SELECT login,password FROM users WHERE login='{$_POST['login']}'";
      $records = mysqli_query($link, $sql);
      $row = mysqli_fetch_assoc($records);

      if (($_POST['login'] == $row['login']) && ($_POST['password'] == $hash))
      {
         $_SESSION['login']=$row['login'];
         $_SESSION['rememberMe'] = $_POST['rememberMe'];
         setcookie('rememberUser', $_POST['rememberMe']);

         header("Location: index.php");
         exit;
      }
      else {
            $err[]='Неверное имя пользователя или пароль!';
        }
   }

   if($err) { $_SESSION['msg']['login-err'] = implode('<br />',$err); }
}
?>
