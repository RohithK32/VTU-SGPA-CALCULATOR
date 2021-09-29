<?php

$con = mysqli_connect('localhost', 'root', ' ','percentage');
// get the post records
$input = $_POST['in'];
$output = $_POST['percentout'];
// database insert SQL code
$sql = "INSERT INTO 'percentagetbl' ('input','output') values('$input','$output')";
// insert in database
$perc = mysqli_query($con, $sql);
if($perc)
{
echo "Contact Records Inserted successfully";
}
}
else
{
echo "Contact Records Inserted";
}
?>
