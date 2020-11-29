 <?php
    class Conexion {
        private static $_handle = null;
        private static $_dsn = "mysql:dbname=mialdea;host=localhost";
        private static $_user = "jap";
        private static $_password = "mialdea";
        private static $_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        private function __construct(){
            $this->conectar();
         }
        function conectar(){
            if ( is_null( self::$_handle ) ) {
                try {
                    self::$_handle = new PDO( 
                        self::$_dsn, self::$_user, self::$_password, self::$_options
                    );
                } catch ( PDOException $error ){
                    die ( $error->getMessage() );
                }
            }
            return self::$_handle;
        }
        public function consultar($sql){
            $this->stmt=mysql_query($sql,$this->link);
            return $this->stmt;
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