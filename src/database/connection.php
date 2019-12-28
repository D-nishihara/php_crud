<?php 
    class DatabaseConnection
    {

        private static $singleton;

        public static function GetInstance() {
            if (!isset(self::$singleton)) {
                self::$singleton = new DatabaseConnection();
            }

            return self::$singleton;
        }

        private function DbConnection() {
            
            require "../../../config/config.php";
            $dsn = $db['db'] . ':' . 'dbname=' . $db['dbname'] . ';' . 'host=' . $db['host'];

            try {
                $con = new PDO($dsn, $db['user'], $db['pass']);
            } catch(PDOException $e) {
                exit();
            }
            
            return $con;
        }

        public function GetDbConnection() {
            $con = $this->DbConnection();
            return $con;
        }
    }
?>
