<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo index</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <!-- menu de navegacion -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
        <div class="container">
            <img src="img/logo.png" alt="responsive image" class="img-fluid max-width: 100%; height: auto;" width="200" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">La Empresa</a>
                    </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nosotros</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Mision</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Vision</a>     
                </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Servicios</a>
                </li>

                <li class="nav-item mr-2">
                    <a class="nav-link " href="#">Contacto</a>
                 </li>
            </ul>
            
                <form class="form-inline">
	    			<a class="btn btn-outline-secondary mr-2" href="registrate.view.php">Registrate</a>
                    <a class="btn btn-outline-secondary" href="login.php">Ingresar</a>
	  		    </form>	
            </div>
        </div>    
    </nav>

    <!-- Menu de slider -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slide1.jpg" height="700" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-secondary align-items-center">¿Estas fuera de Venezuela y no tienes como Gestionar tus Documentos?</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slide2.jpg" height="700" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-secondary align-items-center mb-5">Estamos Aqui para Ayudarte</h2>
                </div>    
             </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/portada.png" height="700" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-secondary">Registrate gratis para que puedas disfrutar de nuestros servicios</h1>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Seccion Sobre nosotros. la empresa, vision, mision -->
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                <h2 class="text-secondary text-left mb-1">Sobre nosotros</h2>
                <figure class="figure">
                    <img src="img/nosotros.png" alt="responsive image" class="img-fluid max-width: 100%; height: auto; mt-5" width="200">
                </figure>
                <p class="text-justify">Un equipo de confianza que brindamos el mejor apoyo de servicio de asistencias y asesorías para gestiones diversas, tales como revisión, traducción, apostillado de todo tipo de documentos, gestiones gubernamentales, tramites civiles, trámites bancarios y pago de deudas de servicios públicos y entre otros.</p>
                <figure class="figure">
                    <img src="img/conoce-servicios.png" alt="responsive image" class="img-fluid max-width: 100%; height: auto; mt-5">
                </figure>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center mb-2">
                        <figure class="figure">
                            <img src="img/empresa.png" alt="responsive image" width="200" class="img-fluid">
                        </figure>
                        <h2 class="text-center text-primary">La Empresa</h2>
                        <p class="text-justify">La organización busca destacarse en los aspectos de eficacia en la resolución y la garantía de entrega de los documentos, así como la seguridad de los datos y ya que de esa forma se consigue satisfacer completamente al público; a lo que se considera, que cuando se presenten fallas en alguno de estos conceptos se deben implementar estrategias secundarias para mejorar esta situación lo más rápido posible, porque la empresa puede perder clientes en poco tiempo.</p>
                        </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h2 class="text-center text-primary">Mision</h2>
                            <p class="text-justify">Construir un apoyo fundamental para todas las personas dentro del territorio nacional y fuera de él que requiera un servicio confiable y seguro para la agilización de todo tipo de documentos y trámites.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h2 class="text-center text-primary">Vision</h2>
                        <p class="text-justify">Convertirse en corto plazo en una solución confiable y seguro en el área de gestión y trámites a nivel nacional en el territorio de Venezuela con los mejores precios.</p>
                    </div>
                </div>
                                
            </div>
        </div>
    </div>
    <!-- Seccion Por que elegirnos -->
    <div class="jumbotron jumbotron-fluid bg-success">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 align-items-center">
                    <h1 class="text-white mt-4"> Por qué elegirnos</h1> 
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                    <i class = "display-1 text-white material-icons">done_outline</i> 
                </div>
            </div>    
        </div>
    </div>
    
    <div class="container">   
        <div class="row mb-3">
            <div class="col-sm-12 col-md-7 col-lg-7">
                <h3 class="text-success mt-2"> Seguridad en tus documentos <i class ="display-4 material-icons">done</i></h3>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam odio culpa pariatur. Veritatis adipisci esse dolore! Maiores delectus porro nostrum.</p>
                <h3 class="text-success mt-2">Prioridad siempre para los clientes <i class ="display-4 material-icons">done</i></h3>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam odio culpa pariatur. Veritatis adipisci esse dolore! Maiores delectus porro nostrum.</p>
                <h3 class="text-success mt-2">Confianza para los usuarios <i class ="display-4 material-icons">done</i></h3>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam odio culpa pariatur. Veritatis adipisci esse dolore! Maiores delectus porro nostrum.</p>
                <h3 class="text-success mt-2">Apoyaremos tus necesidades <i class ="display-4 material-icons">done</i></h3>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam odio culpa pariatur. Veritatis adipisci esse dolore! Maiores delectus porro nostrum.</p>
            </div>
    
            <div class="col-sm-12 col-md-5 col-lg-5">
                <figure class="figure">
                    <img src="img/conoce.png" alt="responsive image" class="img-fluid max-width: 100%; height: auto; mt-5">
                </figure>
            </div>
        </div>
    </div>

    <!-- Seccion conoce de nuestros servicios -->
    <div class="jumbotron junbotron-fluid bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 align-items-center">
                    <h1 class="text-white mt-4"> Conoce nuestros servicios</h1> 
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                    <i class = " display-1 text-white material-icons ">description</i> 
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <figure class="figure mt-5">
                    <img src="img/servicios.png" class="img-fluid width: 100%; height: auto;" alt="responsive image">
                </figure>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 mt-3">
                <div class="card-deck mb-4">
                    <div class="card">  
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">  
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">  
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>   
                </div>
                <div class="card-deck">
                    <div class="card">  
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">  
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">  
                        <div class="card-body">
                            <h5 class="card-title text-primary">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div> 
                </div>       
            </div>
        </div>
    </div>
    <!-- Seccion contactenos -->
    <div class="jumbotron junbotron-fluid bg-dark mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 align-items-center">
                    <h1 class="text-white text-center mt-4"> Para mas informacion contactenos</h1> 
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                    <i class = " display-1 text-white material-icons ">contact_phone</i> 
                </div>
            </div>
        </div>
    </div>
    <div id="Contacto" class="container mt-5">
		<div class="row ">
			<div class="col-sm-12 col-md-12 col-lg-8">
				<div class="col-sm-12 col-md-12 col-lg-12">
				<form action="index.php" method="post" name="" id="">
					<div class="form-group">
						<label class="text-secondary col-form-label-md" for="nombre">Nombre:</label>
						<input type="text" class="form-control form-control-lg border-secondary" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="Ingresar Nombre">
					</div>

					<div class="form-group">
						<label class="text-secondary col-form-label-md" for="email">Correo:</label>
						<input type="email" class="form-control form-control-lg border-secondary" name="correo" id="correo" aria-describedby="emailHelp" placeholder="Ingresar Correo">
					</div>

					<div class="form-group">
						<label class="text-secondary col-form-label-md border-dark" for="contenido">Mensaje</label>
						<textarea class="form-control border-secondary"name="mensaje" id="mensaje" max-width="400" max-height="300" rows="3" placeholder="Escribir mensaje"></textarea>
					</div>

                    <?php if (!empty($errores)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $errores; ?>
                        </div>
                    <?php elseif (isset($enviado)): ?> 
                        <div class="alert alert-success text-center" role="alert">
                            Sus datos han sido enviados
                        </div>                                               
                    <?php endif ?>

					<button type="submit" name="submit" id="submit" class="btn btn-block btn-outline-secondary mb-5">Enviar Mensaje</button>
				</form>
				</div>
			</div>

			<div class="col-sm-12 col-md-12 col-lg-4">
				<figure class="figure d-flex justify-content-center">
                    <img src="img/contactenos.jpg" class="img-fluid width: 100%; height: auto;" alt="responsive image">
                </figure>
			</div>
		</div>
    </div>
    
      <!-- Footer de la pagina  -->
    <footer class="container-fluid mt-5" id="navegador-tudiligenciaya">
        <div class="container mt-3">
          <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <figure class="figure text-center">
                      <img src="img/logo.png" alt="responsive image" class="img-fluid max-width: 100%; height: auto; mt-5" width="300">
                      <small class="text-muted">@ Copyright Venezuela 2018</small>
                    </figure>
                </div>

              <div class="col-sm-12 col-md-3 col-lg-3">
                  <h1 class="display-4 text-muted text-center">Inicio</h1>
                    <ul class="nav flex-column text-center">
                        <li class="nav-item">
                          <a href="#LaEmpresa" class="nav-link">La Empresa</a>
                        </li>
                        <li class="nav-item">
                          <a href="#Nosotros" class="nav-link">Nosotros</a>
                        </li>
                        <li class="nav-item">
                          <a href="#Servicios" class="nav-link">Servicios</a>
                        </li>
                        <li class="nav-item">
                          <a href="#Contacto" class="nav-link">Contacto</a>
                        </li>
                    </ul>
              </div>
              <div class="col-sm-12 col-md-3 col-lg-3">
                  <h1 class="display-4 text-muted text-center">Siguenos</h1>
                    <ul class="nav flex-column text-center">
                        <li class="nav-item">
                            <a href="https://www.facebook.com/tudiligenciaya2018/" class="nav-link">Facebook</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.instagram.com/tudiligenciaya/" class="nav-link">Instagram</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://twitter.com/tu_diligenciaya?lang=es" class="nav-link">Twitter</a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3">
                  <h1 class="display-4 text-muted text-center">Contacto</h1>
                    <ul class="nav flex-column text-center">
                          <li class="nav-item">
                              <p class="text-muted">Tlf.: +58424000000</p>
                          </li>
                          <li class="nav-item">
                              <p class="text-muted">Tlf.: +58424000000</p>
                          </li>
                          <li class="nav-item">
                              <p class="text-muted">Tlf.: +58424000000</p>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="text-muted">tudiligenciaya2018@gmail.com</a>
                          </li>
                    </ul>
                </div>
            </div>
        </div>
      <nav class="navbar bg-light justify-content-center">
          <a class="text-muted">© Powered By JDeverloper 2018 +584241296335</a>
      </nav>
    </footer>
    <script>
        $('.carousel').carousel({
            interval: 15000
        })
    </script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    
</body>
</html>