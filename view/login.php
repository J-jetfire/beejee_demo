<h5 class="modal-title">Авторизация</h5>
<form action="login.php" method="post" id="form_auth">
   <div class="form-group">
      <label>Имя пользователя</label>
      <input type="text" name="login" id="login" class="form-control" placeholder="Введите имя пользователя" required>
   </div>
   <div class="form-group">
      <label>Пароль</label>
      <input type="password" name="password" id="password" class="form-control" placeholder="Введите пароль" required>
   </div>
   <div class="form-group" style="margin-bottom:0;">
      <input type="checkbox" class="" name="rememberMe" id="rememberMe" checked="checked" value="1">
      <label for="rememberMe">Запомнить меня</label>
   </div>
   <input type="submit" class="btn btn-primary" name="submit" class="submit" value="Войти" style="margin-bottom:10px;">
   <a href="index.php"><button type="reset" class="btn btn-secondary">Назад</button></a>
</form>
