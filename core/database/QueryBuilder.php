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

    public function insert($insertDataArr,$table)
    {
        $dataColumns = array_keys($insertDataArr);
        $columns = implode(",", $dataColumns);
        //dd($columns);
        $questionMark="";
        foreach ($dataColumns  as $dataColumn) :
            $questionMark .= "?,";
        endforeach;

        $questionMark = rtrim($questionMark,",");//remove , in end of value

        $sql = "insert into $table ($columns) value ($questionMark)";
        $statement = $this->pdo->prepare($sql);

        $dataValues = array_values($insertDataArr);
    
        $statement->execute($dataValues);

    }

    // public function delete($table, $id)
    // {
    //     $statement = $this->pdo->prepare("DELETE FROM $table WHERE id = :id");
    //     $statement->bindParam(':id', $id, PDO::PARAM_INT);
    //     $statement->execute();
    // }
}