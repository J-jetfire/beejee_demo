<div class="modal" id="modal_add" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Добавить новую задачу</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="alert alert-success" role="alert" id="alert_done">Задача добавлена успешно!</div>
            <form action="cfg/task_cfg.php" method="post" id="form_add">
               <div class="form-group">
                  <label>Имя пользователя</label>
                  <input type="text" name="username" class="form-control" placeholder="Введите имя пользователя" required>
               </div>
               <div class="form-group">
                  <label>E-mail</label>
                  <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Введите e-mail" required>
               </div>
               <div class="form-group">
                  <label>Текст задачи</label>
                  <textarea class="form-control" rows="6" name="text" placeholder="Введите текст задачи" required></textarea>
               </div>
               <input type="text" value="add" name="check" hidden>
               <button type="submit" class="btn btn-primary" style="margin-bottom:10px;">Добавить задачу</button>
               <button type="reset" class="btn btn-secondary" onclick="clearFormAdd();">Отмена</button>
            </form>
         </div>
         <div class="modal-footer"></div>
      </div>
   </div>
</div>
