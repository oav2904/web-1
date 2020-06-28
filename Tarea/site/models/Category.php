<?php


class Category
{
    private $connection;
    function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function find($id)
    {
        return $this->connection->runQuery('SELECT * FROM categories WHERE id = $1', [$id]);
    }

    public function create($name)
    {
        $this->connection->runStatement('INSERT INTO categories(
    name, description)
    VALUES ($1,$2)', [$name, $description]);
    }

    public function read()
    {
        return $this->connection->runQuery('SELECT * FROM categories ORDER BY id');
    }

    public function update($id, $name, $description)
    {
        $this->connection->runStatement('UPDATE categories
    SET name=$2 , description=$3
    WHERE id=$1', [$id, $name, $description]);
    }

    public function delete($id)
    {
        $this->connection->runStatement('DELETE FROM categories
    WHERE id=$1', [$id]);
    }
}