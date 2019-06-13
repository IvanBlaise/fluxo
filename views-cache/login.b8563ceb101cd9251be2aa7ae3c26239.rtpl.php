<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    	<title>Login</title>
    	<!-- Bootstrap -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- CSS -->
        <link href="css/login.css" rel="stylesheet">
    </head>

    <body>
        <center>
        	<div class='header-box'>
                <h1>Fluxo Solutions</h1>
            </div>

            <div class="erro">
                <!--Aqui vc colca seu back-end: if(erro)-->
                    <?php if( $error != '' ){ ?><div class="alert alert-danger"><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></div><?php } ?>
                <!--endif-->
            </div>

            <form action="/fluxo/home" method="post" class="form-login">
                <label>Usuário:</label>
                <input type="text" class="form-control" name="login" value=""/>
                <label>Senha:</label>
                <input type="password" class="form-control" name="senha" />
                <br>
                <input type="submit" value="Login" class="btn btn-primary btn-block">
            </form>
        </center>
    </body>
</html>
