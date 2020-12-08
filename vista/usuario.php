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
	$casa=new Casa;
	$arma=new Arma;
?>

			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="nav justify-content-between">
					<li class="nav-item">
						 Bienvenido <?php echo $personaje->getNick();?> 
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

        
        <div class="container">
		    <div class="text-center">
                <img src="img/casas/casa de paja.jpg" style="width: 500px;">
            </div>	
			
			<div class="row justify-content-center ">
				<div class="col-11">
					<div class="row justify-content-around bg-light rounded p-3 m-2">
						<div class="col-md-5">
							<img src="img/guerrero/guerrero1.png" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 mt-5 ">
							<li>
								<button type="button" class="btn btn-dark m-1 ">Mejorar Personaje</button>
							</li>
							<li>
								<button type="button" class="btn btn-dark m-1">Mejorar Casa</button>
							</li>
							<li>
								<button type="button" class="btn btn-dark m-1">Batalla</button>
							</li>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>