<?php
	require_once '../controlador/incluirficheros.php';
	include 'global/cabecera.html';
	session_start();
	$nick=$_SESSION['user'];
	$conexion=new Db();
	$modificacion=new Jugadores($conexion);
	$vector=$modificacion->devolverDatos($nick);
	$nombre=$vector['nombre'];
	$contr=$vector['contr'];
	$personaje=new Personaje($nombre, $nick, $contr);
	$personaje->actualizarPersonaje($nick);
?>
		

						<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
							<ul class="nav justify-content-between">
								<li class="nav-item">
									<a class="nav-link text-dark font-weight-bold" >Bienvenido <?php echo $personaje->getNick();?></a> 
								</li>
								<li class="nav-item">
									<a class="nav-link text-dark font-weight-bold" >Tus puntos son <?php echo $personaje->devolverPuntos()?></a>
								</li>
							</div>
						<div>       
							<ul class="nav">
								<li>
									<button type="button" class="btn btn-dark m-1" data-toggle="modal" data-target="#login">Cerrar Sesion</button>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
        
			<div class="container mt-5">
				<div class="row justify-content-center mt-5">
					<div class="col-11 mt-5">
						<div class="row justify-content-around rounded p-3 mt-5">
							<div class="col-md-5">
								<img src="img/<?php echo $personaje->getTipo()."/". $personaje->getArma().".png" ?> " class="img-fluid rounded">
							</div>
							<div class="col-md-2 mt-5 pt-5">
								<div class="pt-5">
									<img src="img/vs.jpg" class="img-fluid rounded">
								</div>
							</div>
							<div class="col-md-5">
								<img src="img/icono.png" class="img-fluid rounded">
							</div>
						</div>
						<h3>
							<?php 
								header('refresh:3;url=../vista/usuario.php');
							?>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>