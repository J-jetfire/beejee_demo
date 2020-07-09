<?php
   define('INCLUDE_CHECK',true);
   $link = db_connect();
   session_name('text_ex');
   session_start();

   function db_connect(){
      define('MYSQL_SERVER', 'localhost');
      define('MYSQL_USER', 'root');
      define('MYSQL_PASSWORD', '');
      define('MYSQL_DB', 'test_ex');
//      define('MYSQL_SERVER', 'mysql.hostinger.ru');
//      define('MYSQL_USER', 'u710234418_beej');
//      define('MYSQL_PASSWORD', 'Rfhbvjdf94');
//      define('MYSQL_DB', 'u710234418_beej');
      $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("Error: ".mysqli_error($link));
      if (!mysqli_set_charset($link,"utf8")){
        printf("Error: ".mysqli_error($link));
      }
      return $link;
   }
   function getCount(){
      global $link;
      global $limit;

      $query = "SELECT `id` FROM `task`";
      $result = mysqli_query($link, $query);
      $tasks = mysqli_num_rows($result);
      $total = intval(($tasks - 1) / $limit) + 1;
      return $total;
   }
   function getTasklist($limit, $offset, $column, $sort) {
        global $link;

        strtoupper($sort);

        $query = "SELECT * FROM `task` ORDER BY $column $sort LIMIT $limit OFFSET $offset";
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        $options = array();

        while($row = mysqli_fetch_assoc($result)){
            $options[$row['id']]=$row;
        }
        return $options;
   }
   function addTask($username, $email, $text) {
       global $link;

       $username = htmlspecialchars($username);
       $text = htmlspecialchars($text);

       $t = "INSERT INTO `task` (`username`, `email`, `text`, `status`, `edit_status`) VALUES ('%s', '%s', '%s', '%s', '%s')";
       $query = sprintf($t, mysqli_real_escape_string($link, $username), mysqli_real_escape_string($link, $email), mysqli_real_escape_string($link, $text), mysqli_real_escape_string($link, 0), mysqli_real_escape_string($link, 0));
       $records = mysqli_query($link, $query);

   }
   function getTask($id){
      global $link;
      $query = "SELECT * FROM `task` WHERE id = '$id' LIMIT 1";
      $result = mysqli_query($link, $query);

      if (!$result)
            die(mysqli_error($link));
      $taskData = array();
      while($row = mysqli_fetch_assoc($result)){
            $taskData[$row['id']]=$row;
        }
      return $taskData;
   }
   function editTask($id, $username, $email, $text, $status) {
        global $link;
        $username = htmlspecialchars($username);
        $text = htmlspecialchars($text);

        $edit_status = 0;
        if (isset($status)){ $status = 1; }
        else { $status = 0; }

        $thisTask = getTask($id);
        if ($thisTask[$id]['text'] != $text) { $edit_status = 1; }
        if ($thisTask[$id]['edit_status'] == 1) { $edit_status = 1; }

        $t = "UPDATE `task` SET `username` = '%s', `email` = '%s', `text` = '%s', `status` = '%s', `edit_status` = '%s' WHERE `id` = '%s'";
        $query = sprintf($t, mysqli_real_escape_string($link, $username), mysqli_real_escape_string($link, $email), mysqli_real_escape_string($link, $text), mysqli_real_escape_string($link, $status), mysqli_real_escape_string($link, $edit_status), mysqli_real_escape_string($link, $id));
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        header("Location: ../index.php");
        die;
    }
?>
