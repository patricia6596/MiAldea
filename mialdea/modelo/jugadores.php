<?php
    //Para hacer consultas sql, insert o update 
    //Se aplicara el patron Active Record pattern
    class Jugadores {
        public function __construct(Db $conexion){
            $this->db=$conexion->conectar();
        }
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
        //iniciar sesion
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
        //insertar se usara a la hora de crear un personaje
        public function insertar($nom, $nick, $contr, $tipo, $casa, $arma){
            if(!$this->consultar('nick',$nick)){
                $insert = $this->db -> prepare("insert into jugadores values (default, '$nom', '$nick', '$contr', '$tipo', '$casa', '$arma', 'control')");
                $insert -> execute();
                echo "Usuario agregado correctamente";
            }else{
                echo "Este usuario ya existe";
            }
        }
        //actualizar se usara a la hora de mejorar arma o mejorar casa
        public function actualizar($campo, $valor, $nick){
            $upload = $this->db -> prepare("update jugadores set $campo='$valor' where nick='$nick'");
            $upload -> execute();
        }
        //borrar se usara cuando deseemos eliminar un personaje
        public function borrar($nick){
            $delete = $this->db -> prepare("delete from jugadores where nick='$nick'");
            $delete -> execute();
        }

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