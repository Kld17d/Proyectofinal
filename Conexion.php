<html>
    <head>
        <title> Conexión de PHP </title>
</head>
<body bgcolor="orange" >

<?php

$user = "alberto";
$password = "1234";
$database = "muebles";
$table = "clasificacion";

try {
    $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    echo "<h2>CONECTADO</2><ol>";
    foreach($db->query("SELECT categoria,vr_unit FROM $table") as $row) {
        echo "<li>" . $row['categoria'] . "</li>";
    echo "<li>" . $row['vr_unit'] . "</li>";

    }

    echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "</br>";
    die():
}


?>
