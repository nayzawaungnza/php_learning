<?php 
class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($insertDataArr,$table){
        $dataColumns = array_keys($insertDataArr);
        $columns = implode(",", $dataColumns);
        //dd($columns);
        $questionMark="";
        foreach ($dataColumns  as $dataColumn) :
            $questionMark .= "?,";
        endforeach;

        $questionMark = rtrim($questionMark,",");//remove , in end of value

        $sql = "insert into $table ($columns) value ($questionMark)";
        //dd($sql);
        $statement = $this->pdo->prepare($sql);

        $dataValues = array_values($insertDataArr);
        //dd($dataValues);
        //$values = implode(",", $dataValues);
        //dd($values);
        $statement->execute($dataValues);

        
    }
}