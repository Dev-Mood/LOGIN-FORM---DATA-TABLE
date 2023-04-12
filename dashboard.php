<!DOCTYPE html>
<html lang="en">
<head>
<meta name="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN DATA</title>
</head>
<body>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
        color: #333;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #ddd;
    }

    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li.menu-icon {
    display: inline-block;
    margin-right: 20px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 12px;
    text-decoration: none;
    margin-left: 30px;


}

li a:hover:not(.active) {
    background-color: dodgerblue;
    border-radius: 15px;

}
</style>

<ul>
  <li class="menu-icon"><i class="fa fa-bars" aria-hidden="true" style="color: white; position: absolute; margin-top: 13px; margin-left: 12px;"></i></li>
  <li><a href="login.php">Logout</a></li>
 
</ul>
</body>
</html>
<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM admin_data";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>FULLNAME</th><th>AGE</th><th>LOCATION</th><th>SCHOOL NAME</th><th>MAJOR SUBJECT</th><th>CONTACT NUMBER</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fullname"] . "</td><td>" . $row["age"] . "</td><td>" . $row["location"] . "</td><td>" . $row["course"] . "</td><td>" . $row["major"] . "</td><td>" . $row["contact"] . "</td></tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
