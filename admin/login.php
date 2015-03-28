<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        HTML Document Structure
    </title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Acceso al panel de Administración</h1>
            <div class="account-wall">
                <img class="profile-img" src="../img/logo.jpg" height="612" width="612"
                    alt="">
                <form class="form-signin" method="post" name="Aceptar" action="">
                  <input type="text" class="form-control" placeholder="Correo" required autofocus>
                  <input type="password" class="form-control" placeholder="Contraseña" required>
                  <input class="btn btn-lg btn-primary btn-block" type="submit" name="Aceptar" value="Aceptar">
                  <input type="button" class="btn btn-lg btn-primary btn-block" name="Cancelar" value="Cancelar" onClick="location.href='../index.php'">
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
