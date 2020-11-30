 <?php
    class Db {
        private static $conexion = null;
        private static $dbname = "mysql:dbname=mialdea;host=localhost";
        private static $usuario = "jap";
        private static $password = "mialdea";
        private static $pdo_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        private $db;
        public function __construct(){
            $this->db=$this->conectar();
        }
        function conectar(){
            if ( is_null( self::$conexion ) ) {
                try {
                    self::$conexion = new PDO( 
                        self::$dbname, self::$usuario, self::$password, self::$pdo_options
                    );
                } catch ( PDOException $error ){
                    die ( $error->getMessage() );
                }
            }
            return self::$conexion;
        }
        public function consultar(){
            $select = $this->db -> prepare("select * from jugadores");
            $select -> execute();
            $lista = $select -> fetchAll(PDO::FETCH_ASSOC);
            foreach($lista as $usuario) {
                echo $usuario['id'] . $usuario ['nick'];
            }
        }
        public function insertar($nom, $nick, $contr, $tipo, $casa, $arma){
            $insert = $this->db -> prepare("insert into jugadores values (default, '$nom', '$nick', '$contr', '$tipo', '$casa', '$arma')");
            $insert -> execute();
        }
        public function actualizar($nick, $tipo, $casa, $arma){
            $upload = $this->db -> prepare("update jugadores set personaje='$tipo', casa='$casa', arma='$arma' where nick='$nick'");
            $upload -> execute();
        }
        public function borrar($nick){
            $delete = $this->db -> prepare("delete from jugadores where nick='$nick'");
            $delete -> execute();
        }
    }
 ?>