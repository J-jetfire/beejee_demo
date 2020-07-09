<header class="header">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="index.php">Главная страница <span class="sr-only">(current)</span></a>
            </li>
         </ul>
         <?php if ($_SESSION['login']) {  ?>
         <a href="?logoff"><button class="btn btn-block" style="width:120px;">Выйти</button></a>
         <?php } else { ?>
         <a href="login.php"><button class="btn btn-block" style="width:120px;">Авторизация</button></a>
         <?php } ?>
      </div>
   </nav>
</header>
