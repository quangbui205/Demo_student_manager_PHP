<?php

include "db/DBConnect.php";

class StudentDB
{
    public $connect;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=demo";
        $username = "root";
        $password = "123456@Abc";
        $db = new DBConnect($dsn,$username,  $password);
        $this->connect = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM students";
        $data = $this->connect->query($sql);
        return $data->fetchAll();
    }

    public function create($student)
    {
        $sql = "INSERT INTO `students`(`name`, `email`, `address`, `group_id`) VALUES (?, ?, ?, ?)";
        $statement = $this->connect->prepare($sql);
        $statement->bindParam(1, $student->name);
        $statement->bindParam(2, $student->email);
        $statement->bindParam(3, $student->address);
        $statement->bindParam(4, $student->group_id);
        return $statement->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM `students` WHERE `id` = ?";
        $statement = $this->connect->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

}