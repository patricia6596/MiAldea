<?php

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
		
			<div class="row pt-5">

			  <div class="col-lg-4 col-md-6 mb-4 mt-4">
				<div class="card h-100">
				  <a href="#"><img class="card-img-top" src="img/guerrero/guerrero1.png" alt=""></a>
				  <div class="card-body">
					<h4 class="card-title">
						<button type="button" class="btn btn-dark m-1" data-toggle="modal" data-target="#registro" value="guerrero">Guerrero </button>
					</h4>
				  </div>
				</div>
			  </div>
	
			  <div class="col-lg-4 col-md-6 mb-4 mt-4">
				<div class="card h-100">
				  <a href="#"><img class="card-img-top" src="img/mago/mago1.png" alt=""></a>
				  <div class="card-body">
					<h4 class="card-title">
						<button type="button" class="btn btn-dark m-1" data-toggle="modal" data-target="#registro" value="mago">Mago</button>
					</h4>
				  </div>
				</div>
			  </div>
	
			  <div class="col-lg-4 col-md-6 mb-4 mt-4">
				<div class="card h-100">
				  <a href="#"><img class="card-img-top" src="img/arquero/arquero1.png" alt=""></a>
				  <div class="card-body">
					<h4 class="card-title">
						<button type="button" class="btn btn-dark m-1" data-toggle="modal" data-target="#registro" value="Arquero">Arquero</button>

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
						<form method="post" action="accion.php" class="form">
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
						<input type='number' name='num' value='' hidden>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn mibg" name='insertar' value='insertar' href='index.html'>Registrar</button>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</body>
</html>