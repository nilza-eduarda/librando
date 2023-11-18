<?php

$db = New SQLite3("database.sqlite");

$table = "CREATE TABLE IF NOT EXISTS RESP (id INTEGER PRIMARY KEY, obj TEXT, difficulty TEXT, harmony VARCHAR(25), acessibility VARCHAR(25), recommendation VARCHAR(25), suggestions TEXT)";

$db->exec($table);

?>