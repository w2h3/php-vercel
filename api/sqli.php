<?php
$host = "ep-rough-union-a49kya9s-pooler.us-east-1.aws.neon.tech";
$port = "5432";
$dbname = "verceldb";
$user = "default";
$password = "GR53UtesKTkx";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = pg_query($conn, "SELECT * FROM users WHERE id = $id");

    if (!$result) {
        echo "An error occurred.\n";
        exit;
    }

    if (pg_num_rows($result) > 0) {
        // output data of each row
        while ($row = pg_fetch_assoc($result)) {
            echo "id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["email"] . "<br>";
        }
    } else {
        echo "0 results";
    }
} else {
    echo "No ID parameter provided.";
}

pg_close($conn);
?>
