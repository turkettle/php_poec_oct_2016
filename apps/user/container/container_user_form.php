<?php
    // include('controller/book_controller.php');
?>

<div class="container main">

    <form class="form-horizontal" action="controller/user_controller.php" method="POST">

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-4">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
            </div>
        </div>

        <div class="form-group">
            <label for="pwd" class="col-sm-2 control-label">PWD</label>
            <div class="col-sm-4">
                <input type="password" name="pwd" class="form-control" id="pwd" placeholder="PWD" required>
            </div>
        </div>

        <div class="form-group">
            <label for="pwdconf" class="col-sm-2 control-label">PWD Conf</label>
            <div class="col-sm-4">
                <input type="password" name="pwdconf" class="form-control" id="pwdconf" placeholder="PWD" required>
            </div>
        </div>

        <input type="hidden" name="op" value="create">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sauvegarder</button>
            </div>
        </div>
    </form>

</div><!-- /container -->
