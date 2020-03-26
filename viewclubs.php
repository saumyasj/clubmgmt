<!DOCTYPE html>
<html>
<head>
<title>View Clubs</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: black;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: black;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Club Id</th>
<th>Club name</th>
<th>Club type</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "clubs");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT clubid, clubname, clubtype FROM club";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["clubid"]. "</td><td>" . $row["clubname"] . "</td><td>"
. $row["clubtype"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>