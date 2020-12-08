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
			<form method="post" action="../controlador/accion.php" class="form">
								<ul class="nav">
									<li>
									<button type="submit" class="btn btn-dark m-1" name='salir' value='salir'>Cerrar sesion</button>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>

 
				<div class="container">
					<div class="text-center">
						<img src="img/casa/<?php echo $personaje->getCasa().".jpg"?>" style="width: 500px;">
					</div>	
					<div class="row justify-content-center ">
						<div class="col-11">
							<div class="row justify-content-around bg-light rounded p-3 m-2">
								<div class="col-md-5">
									<img src="img/<?php echo $personaje->getTipo()."/". $personaje->getArma().".png" ?> " class="img-fluid rounded">
								</div>
								<div class="col-md-5 mt-5 ">
									<li>
										<button type="submit" class="btn btn-dark m-1" name='mejorarPersonaje' value='mejorarPersonaje'>Mejorar Personaje</button>
									</li>
									<li>
										<button type="submit" class="btn btn-dark m-1" name='mejorarCasa' value='mejorarCasa'>Mejorar Casa</button>
									</li>
									<li>
									<button type="submit" class="btn btn-dark m-1" name='luchar' value='luchar'>Batalla</button>
									</li>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>	
		</div>
	</body>
</html>