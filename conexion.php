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
                echo $usuario['id'] . $usuario ['nombre'];
            }
        }
        public function insertar($jugador){
            $insert = $this->db -> prepare("insert into jugadores values (default, )");
            $insert -> execute();
        }
        public function actualizar($sql){
            $upload = $this->db -> prepare("update jugadores set personaje='mago' where nick='patri'");
            $upload -> execute();
        }
        public function borrar($sql){
            $delete = $this->db -> prepare("delete from jugadores where nick='patric'");
            $delete -> execute();
        }
    }
 ?>