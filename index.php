<?php
   require_once 'login/set_auth.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
   <?php require_once 'header/metahead.php'; ?>
   <title>TestEx - BeeJee</title>
</head>

<body>
   <?php
      require_once 'header/header.php';

      if($_GET['status'] == "nologin") { require_once 'view/notice.php'; }
   ?>
   <div class="container">
      <?php
         require_once 'cfg/table_cfg.php';
         require_once 'view/table.php';
         require_once 'view/pager.php';
      ?>
      <button class="btn btn-primary" data-toggle="modal" data-target="#modal_add">Добавить новую задачу</button>
   </div>
   <?php
      require_once 'view/modal_add.php';
      require_once 'view/modal_edit.php';
   ?>
</body>

<?php require_once 'header/metafoot.php'; ?>

</html>
