<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Contacto</title>
</head>

<body id="contacto">
    <header class="container">
        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2 ">
                        <li class="nav-item">
                            <a class="nav-link  px-4 py-1 px-sm-4" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 px-sm-4" href="sobre-mi.php">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1 px-sm-4" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active px-4 py-1 px-sm-4" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-rojo"><i class="fas fa-download"></i>Descargar mi CV</i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
     <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Contacto</h1>
            </div>
        </div>
    
    <div class="row">
        <div class="col-12 col-sm-6 ">
            <p>te invito a que te contactes enviándome un mensaje o bien por whatsapp</p>
        </div>
        <div class="col-12 col-sm-6 ">
            <form action="" method="post">
                <div class="mb-3">
                    <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="tel" name="txtTelefono/watsapp" id="txtTelefono/watsapp" placeholder="Telefono/watsapp"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aqui tu Mensaje"
                        class="form-control"></textarea>
                </div>
                <div class="mb-5">
                    <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco px-4">ENVIAR</button>
                </div>

            </form>
        </div>

    </div>


    </div>
    </main>
    <footer class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-3 github">
                <a href="https://github.com/" title="https://github.com/"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/agustin-barrio-a0306921a/" title="linkedin"><i
                        class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3"><a href="https://www.rossettideportes.com/" target="_blank">Rossetti Deportes</a></div>
            <div class="col-12 col-sm-3"><a href="mailto:agub_14@hotmail.com>">agub_14@hotmail.com</a></div>

        </div>

    </footer>

    <div class="whatsapp pt-3 pb-4 px-3">
        <a href="https://api.whatsapp.com/send?phone=0123456789">
            <i class="fa-brands fa-whatsapp"></i></a>
    </div>
</body>


</html>