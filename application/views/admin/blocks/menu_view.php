<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url(); ?>index.php/admin">ADMINKA for <?= $user; ?></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?= base_url(); ?>">На сайт</a></li>
        <li><a href="<?= base_url(); ?>index.php/login/logout">Выход из админки</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>