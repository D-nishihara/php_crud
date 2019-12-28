<?php 
    class DatabaseInsert
    {
        private $name = null;

        private function InsertGetDbCon() {
            require_once "../../src/database/connection.php";
            $databaseConection = DatabaseConnection::GetInstance();
            $con = $databaseConection->GetDbConnection();
            return $con;
        }

        public function Insert($text) {
            require "../../src/database/serch.php";
            $serch = new DatabaseSerch();
            $lastUserId = $serch->LastUserIdSerch();
            $con = $this->InsertGetDbCon();
            $stmt = $con->prepare('INSERT INTO crud (user_id, user_name) VALUES (?, ?)');
            $resut = $lastUserId->fetch();
            if ($resut['user_id'] == null) {
                $int = 1;
                $stmt->bindValue(1, $int, PDO::PARAM_INT);
            } else {                  
                $int = $resut['user_id'] + 1;
                $stmt->bindValue(1, $int, PDO::PARAM_INT);
            }
            $stmt->bindValue(2, $text, PDO::PARAM_STR);
            $stmt->execute();
        }
    }
?>