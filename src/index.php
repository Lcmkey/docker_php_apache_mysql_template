<?php

echo "Hello from the docker container";

$mysqli = new mysqli("db", "root", "sam.leung", "docker_example");

$sql = "INSERT INTO users (name, fav_color) VALUES('Sam Leung', 'Test')";
$result = $mysqli->query($sql);


$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->name . " " . $user->fav_color;
    echo "<br>";
}
