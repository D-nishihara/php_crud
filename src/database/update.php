<?php 
    class DatabaseUpdate
    {
        private function UpdateGetDbCon() {            
            require_once "../../src/database/connection.php";
            $databaseConection = DatabaseConnection::GetInstance();
            $con = $databaseConection->GetDbConnection();
            return $con;
        }

        public function SelectUpdate($user_id, $user_name) {
            $con = $this->UpdateGetDbCon();
            $stmt = $con->prepare("UPDATE crud SET user_name = ? WHERE user_id = ?");
            $stmt->bindValue(1, $user_name, PDO::PARAM_STR);
            $stmt->bindValue(2, $user_id, PDO::PARAM_INT);
            // $stmt->bindValue(3, $user_name, PDO::PARAM_STR);
            $stmt->execute();
        }
    }
?>