<?php
    class QueryBuilder{
        protected $pdo;
        public function __Construct($pdo){
           $this->pdo = $pdo;
        }
       
        public function selectAll($table){
            $statement = $this->pdo->prepare("select * from $table");
            $statement->execute();
            return ($statement->fetchAll(PDO::FETCH_OBJ));
        }
        public function insert($dataArr,$table)
        {
            // implode() = array to string with comma glue
            $getDataValues = (array_values($dataArr));
            $getDataKeys = array_keys($dataArr);
            $cols = implode(',',$getDataKeys);
            $questionMark = "";
            
            foreach($getDataKeys as $key)
            {
                $questionMark .= "?,";
            }
            $questionMark = rtrim($questionMark,',');
            $sql = "insert into $table ($cols) values ($questionMark)";

            $statement = $this->pdo->prepare($sql);
            $statement->execute($getDataValues);

            // dd($sql);
           
        
            

            
            

        }
    }   
?>