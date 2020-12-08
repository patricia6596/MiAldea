<?php
	require_once '../controlador/incluirficheros.php';
	include 'global/cabecera.html';

?>

					<ul class="nav">
                        <li>
                            <button type="button" class="btn btn-dark m-1" data-toggle="modal" data-target="#login">Login</button>
						</li>
                    </ul>
                </div>
			</nav>

			<div class="row mt-5 pt-5">
				<div class="col">
				  <p class="display-4 text-center mibg text-white bg-dark navbar-dark">Elige un personaje</p>
				</div>
			</div>
		<form method="post" action="../controlador/accion.php" class="form">
			<div class="row pt-5">
			  	<div class="col-lg-4 col-md-6 mb-4 mt-4">
					<div class="card h-100">
				  		<img class="card-img-top" src="img/guerrero/nivel1.png" alt="">
				  		<div class="card-body">
							<h4 class="card-title text-center">
								<input type="radio" data-toggle="modal" data-target="#registro" name="tipo" value="Guerrero">Guerrero
							</h4>
					  	</div>
					</div>
			  	</div>
			
			  	<div class="col-lg-4 col-md-6 mb-4 mt-4">
					<div class="card h-100">
				  		<img class="card-img-top" src="img/mago/nivel1.png" alt="">
				  		<div class="card-body">
							<h4 class="card-title text-center">
								<input type="radio" data-toggle="modal" data-target="#registro" name="tipo" value="Mago">Mago
							</h4>
					  	</div>
					</div>
				</div>

			  	<div class="col-lg-4 col-md-6 mb-4 mt-4">
					<div class="card h-100">
				  		<img class="card-img-top" src="img/arquero/nivel1.png" alt="">
				  		<div class="card-body">
							<h4 class="card-title text-center">
								<input type="radio" data-toggle="modal" data-target="#registro" name="tipo" value="Arquero">Arquero
							</h4>
						</div>
			  		</div> 
				</div>
			</div>	

<!--Modal registro-->
			<div class="modal" id="registro">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header mibg">
							<h4 class="modal-title">Registro de usuario</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Nombre:</label>
								<input type="text" class="form-control" name="nombre">
							</div>
							<div class="form-group">
								<label>Nick:</label>
								<input type="text" class="form-control" name="nick">
							</div>	
							<div class="form-group">
								<label>Contraseña:</label>
								<input type="password" class="form-control" name="contr">
							</div>	
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn mibg" name='registrar' value='registrar' href='index.html'>Registrar</button>
							</form>
						</div>	
					</div>
				</div>
			</div>
			<!--Modal login-->
			<div class="modal" id="login"> 
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header mibg">
							<h4 class="modal-title">Iniciar sesion</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<form method="post" action="../controlador/accion.php">
								<div class="form-group">
									<label>Nick:</label>
									<input type="text" class="form-control" placeholder="Introduzca su Nick" name="nick">
								</div>
								<div class="form-group">
									<label>Contraseña:</label>
									<input type="password" class="form-control" placeholder="Introduzca su contraseña" name="contr">
								</div>
						</div>
						<div class="modal-footer"> 
							<button type="submit" class="btn mibg" name='iniciar' value='iniciar'>Iniciar sesión</button>
							</form>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>