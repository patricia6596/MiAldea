<?php
	require_once '../controlador/incluirficheros.php';

	include 'global/cabecera.html';
	
	$conexion=new Db();
	
?>

<ul class="nav">
    <li>
        <button type="button" class="btn btn-dark m-1" data-toggle="modal" data-target="#login">Login</button>
    </li>
    <li>
        <a type="button" class="btn btn-dark m-1" href="crearpersonaje.php" >Registro</a>
    </li>
</ul>
</div>
</nav>

	<div class="row mt-5 pt-5 ">
		<div class="col">
			<p class="display-4 text-center text-white bg-dark navbar-dark">Preparate para la lucha</p>
		</div>
	</div>
	<div class="fondo">

	</div>
</div>


<!--Modal loguin-->
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
			
		</div>
	</body>
</html>