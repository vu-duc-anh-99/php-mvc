<?php 

    class DBConfig
    {
        private $conn = NULL;
        public function connect()
        {
            $username = "hbstudent";
            $password = "hbstudent";
            $dbname = "quanlysinhvien";
            $servername = "localhost";
            try {
                $this->conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed". $e.getMessaage();
            }
            return $this->conn;
        }
    }

?>