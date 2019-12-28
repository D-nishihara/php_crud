<?php 
    class DatabaseSerch
    {
        private function SerchGetDbCon() {            
            require_once "../../src/database/connection.php";
            $databaseConection = DatabaseConnection::GetInstance();
            $con = $databaseConection->GetDbConnection();
            return $con;
        }

        public function AllSerch() {
            $con = $this->SerchGetDbCon();
            $sql = "SELECT * FROM crud";
            $res = $con->query($sql);
            return $res;
        }

        public function LastUserIdSerch() {
            $con = $this->SerchGetDbCon();
            $sql = "SELECT user_id FROM crud ORDER BY user_id DESC";
            $res = $con->query($sql);
            return $res;
        }

    }
?>