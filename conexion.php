 <?php
    class Db {
        private static $conexion = null;
        private static $dbname = "mysql:dbname=registro;host=localhost";
        private static $usuario = "jap";
        private static $password = "mialdea";
        private static $pdo_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        private $db;
        private function __construct(){
            $db=$this->conectar();
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
            $select = $this->db -> prepare( 'select * from usuarios');
            return $select -> execute();
        }
        public function insertar($sql){
            $this->stmt=mysql_query($sql,$this->link);
            return $this->stmt;
        }
        public function actualizar($sql){
            $this->stmt=mysql_query($sql,$this->link);
            return $this->stmt;
        }
        public function borrar($sql){
            $this->stmt=mysql_query($sql,$this->link);
            return $this->stmt;
        }
    }
 ?>