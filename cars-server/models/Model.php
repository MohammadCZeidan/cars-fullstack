<?php
abstract class Model{

    protected static string $tzable;
    protected static string $primary_key = "id";
   

    // public static function find(mysqli $connection, string $id){//read
    //     $sql = sprintf("SELECT * from %s WHERE %s = ?",
    //                    static::$table,
    //                     //    $primary_key);
    //                    static::$primary_key);

    //     $query = $connection->prepare($sql);
    //     $query->bind_param("i", $id);
    //     $query->execute();               

    //     $data = $query->get_result()->fetch_assoc();

    //     return $data ? new static($data) : null;
    // }

    //     public static function findall(mysqli $connection){//crud
    //     $sql = sprintf("SELECT * from %s",
    //                    static::$table,
    //                     //    $primary_key);
    //                    static::$primary_key);

    //     $query = $connection->prepare($sql);
    //     $query->execute();               

    //     $data = $query->get_result()->fetch_assoc();

    //     return $data ? new static($data) : null;
    // }
    //     public static function create(mysqli $connection,int $id, string $name, string $color,int $year){//crud
    //     $stmt = $connection->prepare("INSERT INTO cars (id,name,color,year) VALUES (?, ?,?, ?)");
    //     $stmt->bind_param("issi",$id,$name,$color,$year); 
    //     $stmt->execute()    
    //      $stmt->close();          

    // }

    // public static function update(mysqli $connection,int $id, string $name, string $color,int $year){//crud
    //     $stmt = $connection->prepare("UPDATE  cars SET name=?, color=?,year=? where id=?");
    //     $stmt->bind_param("ssii",$name,$color,$year,$id); 
    //     $stmt->execute()    
    //      $stmt->close();          

    // }
  public static function delete(mysqli $connection,int $id){//crud
        $stmt = $connection->prepare("DELETE FROM CARS WHERE id=?");
        $stmt->bind_param("i",$id); 
        $stmt->execute()    
         $stmt->close();          

    }

    
}



?>
