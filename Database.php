<?php
class Database
{
    public $connection;
    public function __construct($config, $user ='root', $password ='')
    {
        

        $dsn = 'mysql:'.http_build_query($config, '', ';');

        // dd($dsn);

        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dName']};";
        // make a database connection
        $this->connection = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function query($query, $params)
    {

        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}