<?php
$host_name = "localhost";
$username = "<your username>";
$password = "<your password>";
$dbname = "<your dbname>";
$results_per_page = 4;

// Connection string for PostgreSQL
$conn_string = "host=$host_name dbname=$dbname user=$username password=$password";

// Connect to PostgreSQL
$conn = pg_connect($conn_string);
if (!$conn) {
    // Connection failed
    echo "An error occurred. Could not connect to the database.";
    exit; 
} else {
    // Connection succeeded
    echo "Connection to database established successfully.";
}
?>
