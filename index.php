<!DOCTYPE html>
<html lan="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Login</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    </head>

    <body class="light-blue darken-4">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <img src="CPSCLogo.png" style="float:center"/>
                </div>
            </div>

            <div class="row">
                <form id="loginform" class="col s6 offset-s3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="row">
                <div class="input-field col s6 offset-s3">
                    <label for="email">Email:</label>
                    <input name="email" type="email"/>
                </div>
                </div>
                <div class="row">
                <div class="input-field col s6 offset-s3">
                    <label for="password">Password:</label>
                    <input name="password" type="password"/>
                </div>
                </div>
                <?php
                    if ($error && !empty($email) && !empty($epassword)) {
                    echo "<label class='errlabel'>Error: Please enter a valid email and password.</label><br/>";
                    }
                ?>

                <button class="btn waves-effect waves-light black" type="submit" name="submit">
                    Login <i class="material-icons right">arrow_forward</i>
                </button>

                </form>
            </div>

        </div>

    </body>

</html>
