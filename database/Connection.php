<?php

class Connection
{
    public static function make($config)
    {

//Mysql
//        return new PDO(
//            "{$config['connection']};dbname={$config['database']};charset={$config['charset']};",
//            $config['username'],
//            $config['password']);
        //return mysqli_connect($config['connection'], $config['username'], $config['password'], $config['database']);

        return new PDO(
            "{$config['connection']};dbname={$config['database']};charset={$config['charset']}",
            $config['username'],
            $config['password']);
    }
}