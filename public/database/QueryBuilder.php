<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function getAll()
    {
        $sql = mysqli_query($this->pdo, "SELECT * FROM posts");
        $posts = mysqli_fetch_all($sql, MYSQLI_ASSOC);

        return $posts;
    }
}