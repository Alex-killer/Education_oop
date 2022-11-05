<?php
$config = require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/../database/QueryBuilder.php';
require_once __DIR__ . '/../database/Connection.php';

return new QueryBuilder(Connection::make($config['database']));