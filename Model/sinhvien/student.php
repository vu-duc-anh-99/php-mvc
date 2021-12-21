<?php 

    class Student extends DBConfig{
        public function insert($data)
        {
            $field_list = "";
            $value_list = "";
            
            foreach ($data as $key => $value) {
                $field_list .= ",".$key;
                $value_list .= ",'".$value."'";
            }

            $sql = "INSERT INTO sinhvien (".trim($field_list,",").
                    ") VALUES (".trim($value_list,",").")";

            $stmt = parent::connect()->prepare($sql);
            return $stmt->execute();
        }

        public function update($data,$id)
        {
            $field_list = "";
            $value_list = "";
            $sqlData = "";

            foreach ($data as $key => $value) {
                $sqlData .= ", $key" . "='" . $value. "'";
            }

            $sql = "UPDATE sinhvien SET ".trim($sqlData,","). " WHERE id = $id";
            $stmt = parent::connect()->prepare($sql);
            return $stmt->execute();
        }

        public function delete($id)
        {
            $sql = "DELETE FROM sinhvien WHERE id = ".$id;
            var_dump($sql);
            $stmt = parent::connect()->prepare($sql);
            return $stmt->execute();
        }

        public function getList($data)
        {
            $where = "";
            if($data != ""){
                $where = " WHERE hoten LIKE '%$data%'";
            }
            $sql = "SELECT * FROM sinhvien ".$where;
            var_dump($sql);
            $stmt = parent::connect()->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchALL();
        }

        public function getData($id)
        {
            $sql = "SELECT * FROM sinhvien WHERE id = $id";
            $stmt = parent::connect()->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetch();
        }
            
        
    }

?>