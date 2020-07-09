<?php
require_once '../cfg/functions.php';

$taskID = $_POST['id'];
$taskData = getTask($taskID);
?>
<div class="form-group">
   <label for="exampleInputPassword1">Имя пользователя</label>
   <input type="text" class="form-control" name="username" placeholder="Введите имя пользователя" required value="<?=$taskData[$taskID]['username']?>">
</div>
<div class="form-group">
   <label for="exampleInputEmail1">E-mail</label>
   <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Введите e-mail" required value="<?=$taskData[$taskID]['email']?>">
</div>
<div class="form-group">
   <label for="exampleFormControlTextarea1">Текст задачи</label>
   <textarea class="form-control" name="text" rows="6" placeholder="Введите текст задачи" required><?=$taskData[$taskID]['text']?></textarea>
</div>
<div class="form-group">
   <input type="checkbox" name="status" id="this_done" <?php if ($taskData[$taskID]['status'] == 1){ echo 'checked'; } ?> >
   <label for="this_done">Выполнено</label>
</div>
<input type="text" value="<?=$taskData[$taskID]['id']?>" name="id" hidden>
<input type="text" value="edit" name="check" hidden>
<button type="submit" class="btn btn-primary" style="margin-bottom:10px;">Сохранить</button>
<button type="reset" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
