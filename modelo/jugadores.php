<?php
    //Para hacer consultas sql, insert o update 
    //Se aplicara el patron Active Record pattern
    class Jugadores {
        public function __construct(Db $conexion){
            $this->db=$conexion->conectar();
        }
        //Consultar se utiliza a la hora de hacer un registro ya que comprueba si existe o no el usuario
        public function consultar($campo, $valor){
            $select = $this->db -> prepare("select * from jugadores where $campo='$valor'");
            $select -> execute();
            $lista = $select -> fetchAll(PDO::FETCH_ASSOC);
            foreach($lista as $usuario) {
                if ($usuario['control']=='control'){
                    return 1;
                }else{
                    return 0;
                };
            }
        }
        //Iniciar se llama cuando un jugador se logea, para comprobar si la contraseña y el nick son correctos
        public function iniciar($nick,$contr){
            $select = $this->db -> prepare("select * from jugadores where nick='$nick' and contr='$contr'");
            $select -> execute();
            $lista = $select -> fetchAll(PDO::FETCH_ASSOC);
            foreach($lista as $usuario) {
                if ($usuario['control']=='control'){
                    return 1;
                }else{
                    return 0;
                };
            }
        }
        //Cuando pasamos a la pantalla de usuario.php, tenemos una sesion con el nick, pero necesitamos el resto de valores para crear el objeto personaje,
        //devolverDatos lo que hace es obtener los datos que tiene ese jugador
        public function devolverDatos($valor){
            $select = $this->db -> prepare("select * from jugadores where nick='$valor'");
            $select -> execute();
            $lista = $select -> fetchAll(PDO::FETCH_ASSOC);
            foreach($lista as $usuario) {
                $aux=array('nombre'=>$usuario['nombre'], 'nick'=>$usuario['nick'], 'contr'=>$usuario['contr'], 'tipo'=>$usuario['personaje'], 'casa'=>$usuario['casa'], 'arma'=>$usuario['arma'], 'puntos'=>$usuario['puntos'] );
            }
            return $aux;
        }
        //insertar se usara a la hora de crear un personaje
        public function insertar($nom, $nick, $contr, $tipo){
            if(!$this->consultar('nick',$nick)){
                $insert = $this->db -> prepare("insert into jugadores values (default, '$nom', '$nick', '$contr', '$tipo', 'paja', 'nivel1', 0, 'control')");
                $insert -> execute();
                echo "<p>Usuario agregado correctamente</p>";
                echo "<p>Inicie sesion para poder jugar</p>";
                header('refresh:1;url=../vista/index.php');
            }else{
                echo "Este usuario ya existe";
                header('refresh:1;url=../vista/index.php');
            }
        }
        //actualizar se usara a la hora de mejorar arma o mejorar casa o actualizar los puntos
        public function actualizar($campo, $valor, $nick){
            $upload = $this->db -> prepare("update jugadores set $campo='$valor' where nick='$nick'");
            $upload -> execute();
        }
        //borrar se usara cuando deseemos eliminar un personaje
        public function borrar($nick){
            $delete = $this->db -> prepare("delete from jugadores where nick='$nick'");
            $delete -> execute();
        }
        //Cuando estamos mejorando un arma o una casa, necesitamos saber cual tenia para poder pasar al siguiente nivel
        public function consultarMejora($campo, $valor,$objeto){
            $select = $this->db -> prepare("select $objeto from jugadores where $campo='$valor'");
            $select -> execute();
            $lista = $select -> fetchAll(PDO::FETCH_ASSOC);
            foreach($lista as $usuario) {
                return $usuario["$objeto"];
            }
        }
    }
?>