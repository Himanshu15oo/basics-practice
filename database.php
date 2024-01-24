<?php

// Connection to DB
$conn = new mysqli("localhost", "admin", "password", "widget_corp");
if (!$conn) {
    die("Database connection failed: " . $conn->connect_error());
}

// print_r($conn);

$result = $conn->query("Select * from subjects");

while ($row = $result->fetch_assoc()) {
    echo $row["id"] . " | " . $row["menu_name"] . " | " . $row["position"] . " | " . $row["visible"] . " <br />";
}

$conn->close();
