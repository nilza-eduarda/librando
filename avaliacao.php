<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $obj = $_POST['obj'];
    $difficulty = $_POST['difficulty'];
    $harmony = $_POST['harmony'];
    $acessibility = $_POST['acessibility'];
    $recommendation = $_POST['recommendation'];
    $suggestions = isset($_POST['suggestions'])?$_POST['suggestions']:'';

    $db = New SQLite3("database.sqlite");

    $table = "INSERT INTO RESP (obj, difficulty, harmony, acessibility, recommendation, suggestions) VALUES ('$obj', '$difficulty', '$harmony', '$acessibility', '$recommendation', '$suggestions')";

    $db->exec($table);
    header("Location: index.html");
}
else {
    header("Location: index.html");
}

?>