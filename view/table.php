<table class="table table-hover" id="table_of_tasks">
   <thead class="thead-dark">
      <tr>
         <th <?=$username_ico?> scope="col" nowrap style="width:200px;"><a href="?page=<?=$page?>&col=username&sort=<?=$sort_col?>">Имя пользователя</a><i class="fas fa-sort"></i></th>
         <th <?=$email_ico?> scope="col" nowrap style="width:200px;"><a href="?page=<?=$page?>&col=email&sort=<?=$sort_col?>">E-mail</a><i class="fas fa-sort"></i></th>
         <th scope="col" nowrap>Текст задачи</th>
         <th <?=$status_ico?> scope="col" nowrap style="width:60px;"><a href="?page=<?=$page?>&col=status&sort=<?=$sort_col?>">Статус</a><i class="fas fa-sort"></i></th>
         <th style="width:110px;">Отметка</th>
         <?php if ($_SESSION['login']) { ?> <th style="width:50px;"></th> <?php } ?>
      </tr>
   </thead>
   <tbody>
      <?php foreach ($options as $option): ?>
      <tr>
         <td><?=$option['username']?></td>
         <td><?=$option['email']?></td>
         <td><?=$option['text']?></td>
         <td style="font-size:10px;"><?php
      if ($option['status'] == 1) { echo '<span class="green">Выполнено</span>'; }
      else { echo '<span>Выполняется</span>'; }
   ?></td>
         <td style="font-size:10px;"><?php if ($option['edit_status'] == 1){ echo '<span class="orange">Отредактировано администратором</span>'; }?></td>
         <?php if ($_SESSION['login']) { ?> <td><button class="btn" onclick="openEdit(<?=$option['id']?>);">РЕД.</button></td> <?php } ?>
      </tr>
      <?php endforeach; ?>
   </tbody>
</table>
