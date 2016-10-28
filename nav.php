<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php print $path_from_app; ?>index.php">Home</a>
        <a class="navbar-brand" href="apps/book/add_book.php?app=book&action=create">Créer un livre</a>
        <a class="navbar-brand" href="apps/book/admin.php?app=book">Administration</a>
        <a class="navbar-brand" href="apps/user/user_form.php?app=user">Sign up</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <form class="navbar-form navbar-right" role="form">
        <div class="form-group">
            <input type="text" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Password" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
        </form>
    </div><!--/.navbar-collapse -->
    </div>
</nav>
