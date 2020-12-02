 <?php
    //Aqui se va a implementar el patron Singleton, ya que solo queremos que se instancie una conexion
    class Db{
        private static $conexion = null;
        private static $dbname = "mysql:dbname=mialdea;host=localhost";
        private static $usuario = "jap";
        private static $password = "mialdea";
        private static $pdo_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        protected $db;
        
        protected function conectar(){
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
        
    }
 ?>