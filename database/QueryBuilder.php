<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($table)
    {
        $sql = 'SELECT * FROM posts';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);

//        $sql = mysqli_query($this->pdo, "SELECT * FROM {$table}");
//        return mysqli_fetch_all($sql, MYSQLI_ASSOC);
    }

    public function getOne($table, $id)
    {
        $sql = 'SELECT * FROM posts WHERE id=:id';
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            'id' => $id,
        ]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function create($table, $data, $id)
    {
        $keys = implode(',', array_keys($data));
        $tags = ":" . implode(', :', array_keys($data));

        $sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
    }

    public function update($table, $data, $id)
    {
        $keys = array_keys($data);

        $string = '';

        foreach ($keys as $key) {
            $string .= $key . '=:' . $key . ',';
        }

        $keys = rtrim($string, ',');

        $data['id'] = $id;

        $sql = "UPDATE {$table} SET {$keys} WHERE id=:id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM {$table} WHERE id=:id";

        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            'id' => $id,
        ]);
    }

}