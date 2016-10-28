<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../../index.php">Home</a>
        <a class="navbar-brand" href="../../apps/book/add_book.php?app=book&action=create">Créer un livre</a>
        <a class="navbar-brand" href="../../apps/book/admin.php?app=book">Administration</a>
        <a class="navbar-brand" href="user_form?app=user">Sign up</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <form class="navbar-form navbar-right" role="form" action="controller/user_controller.php" method="post">
        <?php if (user_is_logged_in()) : ?>
          <input type="hidden" name="op" value="logout">
          <button type="submit" class="btn btn-warning">Logout</button>
        <?php else : ?>
            <div class="form-group">
                <input name="email" type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <input name="pwd" type="password" placeholder="Password" class="form-control">
            </div>
            <input type="hidden" name="op" value="login">
            <button type="submit" class="btn btn-success">Sign in</button>
        <?php endif; ?>
      </form>
    </div><!--/.navbar-collapse -->
    </div>
</nav>
