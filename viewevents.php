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
<th>EventId</th>
<th>Title</th>
<th>Description</th>
<th>StartDate</th>
<th>EndDate</th>
<th>Cost</th>
<th>LocationID</th>

</tr>
<?php
$con = mysqli_connect("localhost", "root", "", "clubs");

if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
$sql = "SELECT EventID, Title, Description, StartDate, EndDate, Cost, LocationID FROM events";
$result = $con->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["EventID"]. "</td><td>" . $row["Title"] . "</td><td>"
. $row["Description"]. "</td><td>". $row["StartDate"]."</td><td>" . $row["EndDate"]."</td>><td>" . $row["Cost"]."</td>><td>" . $row["LocationID"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$con->close();
?>
</table>
</body>
</html>