<?php
class Database{

    public $connection;

    public function __construct($config, $username = "root", $password = "root"){
        $dsn = "mysql:" . http_build_query($config, "", ";");
        $this->connection = new PDO($dsn, $username, $password);
    }

    public function query($sql_query, $params = []){
        $statement = $this->connection->prepare($sql_query);
        $statement->execute($params);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}