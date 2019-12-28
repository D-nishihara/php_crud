<?php 
    class DatabaseDelete
    {
        private function DeleteGetDbCon() {            
            require_once "../../src/database/connection.php";
            $databaseConection = DatabaseConnection::GetInstance();
            $con = $databaseConection->GetDbConnection();
            return $con;
        }

        public function SelectDelete($user_id, $user_name) {
            $con = $this->DeleteGetDbCon();
            $stmt = $con->prepare("DELETE FROM crud WHERE user_id = ? AND user_name = ?");
            $stmt->bindValue(1, $user_id, PDO::PARAM_INT);
            $stmt->bindValue(2, $user_name, PDO::PARAM_STR);
            $stmt->execute();
        }
    }
?>