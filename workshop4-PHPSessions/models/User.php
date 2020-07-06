<?php


class User
{
    private $connection;
    function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function login($email, $password)
    {
        return $this->connection->runQuery('SELECT * FROM users WHERE email = $1 and password = md5($2)', [$email, $password]);
    }
    public function create($p_name,$user,$email,$password)
    {
        $this->connection->runStatement('INSERT INTO users(
    f_name, user,lastname,email, password)
    VALUES ($1,$2,$3,$4,$5)', [$p_name,$user,$lastname, $email, $password]);
    }
}