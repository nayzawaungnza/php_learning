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

    public function delete($id, $table){
        $statement = $this->pdo->prepare("DELETE FROM $table WHERE id = :id");
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
    }

// <<<<<<< HEAD
// =======
//     public function delete($table, $id)
// {
//     // Prepare the SQL query with a placeholder for the ID
//     $statement = $this->pdo->prepare("DELETE FROM $table WHERE id = :id");
    
//     // Bind the ID parameter to the prepared statement and specify it as an integer
//     $statement->bindParam(':id', $id, PDO::PARAM_INT);
    
//     // Execute the query, which will delete the record with the specified ID
//     $statement->execute();
// }
// >>>>>>> 7300e852b61932712b4fe368c440f546aab9a426
 }