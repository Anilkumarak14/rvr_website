<h1>Programs offered</h1>
<?php
$servername = "localhost";
$username = "anil";
$password = "Anil@123";
$dbname = "rvr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve UG departments with intake
$sql_ug = "SELECT department, intake, year_of_start FROM ug_courses";
$result_ug = $conn->query($sql_ug);

// Retrieve PG departments with intake
$sql_pg = "SELECT department, intake, year_of_start FROM pg_courses";
$result_pg = $conn->query($sql_pg);



echo "<h3>Undergraduate Courses:</h3><br>";
if ($result_ug->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Department</th><th>Intake</th><th>Year of Start</th></tr>";
    while($row = $result_ug->fetch_assoc()) {
        echo "<tr><td>" . $row["department"] . "</td><td>" . $row["intake"] . "</td><td>" . $row["year_of_start"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No departments found for UG.";
}

echo "<br><br><h3>Postgraduate Programs:</h3><br>";
if ($result_pg->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Department</th><th>Intake</th><th>Year of Start</th></tr>";
    while($row = $result_pg->fetch_assoc()) {
        echo "<tr><td>" . $row["department"] . "</td><td>" . $row["intake"] . "</td><td>" . $row["year_of_start"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No departments found for PG.";
}

$conn->close();
?>
