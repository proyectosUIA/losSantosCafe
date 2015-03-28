<!DOCTYPE html>
<html>
    
    <head>
        <link rel="icon" href="file:///C:/Users/gbarquero/Dropbox/UIA (compartida)/2015/Programacion 3/Proyecto/Pruebas/img/favicon.ico">
        <meta name="description" content="Página de Inicio de la Cafetería">
        <title>Inicio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/scriptPagination.js"></script>
    </head>
    
    <body>
<div class="section">
    <nav class="navbar navbar-default navbar-static-top" role= "navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <span><img src="img/favicon.jpg"></span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php echo" class=\"$inicio\""; ?>>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li <?php echo" class=\"$menu\""; ?> >
                        <a href="menu1.php">Menú</a>
                    </li>
                    <li <?php echo" class=\"$productos\""; ?>>
                        <a href="#">Productos</a>
                    </li>
                    <li <?php echo" class=\"$acerca\""; ?>>
                        <a href="#">Acerca de Nosotros</a>
                    </li>
                    <li <?php echo" class=\"$contacto\""; ?>>
                        <a href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>