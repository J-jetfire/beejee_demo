<?php
require_once '../cfg/functions.php';

if ($_POST['check'] == "add") {
   addTask($_POST['username'], $_POST['email'], $_POST['text']);
}
else if ($_POST['check'] == "edit") {
   if ($_SESSION['login']) {
      editTask($_POST['id'], $_POST['username'], $_POST['email'], $_POST['text'], $_POST['status']);
   }
   else {
      header("Location: ../index.php?status=nologin");
      die;
   }
}
?>
