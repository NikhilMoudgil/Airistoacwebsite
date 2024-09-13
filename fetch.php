<?php
include('connection.php');
?>
<?php
error_reporting($error_level = null);
$sql = "SELECT *FROM contactform";

$contact = $conn->query($sql);
if ($contact) {
    echo "<TABLE border >";
    echo "<TR>";
    echo "<TH>Name</TH>";
    echo "<TH>Email</TH>";
    echo "<TH>Phone No.</TH>";
    echo "<TH>Location</TH>";
    echo "<TH>Contact Method</TH>";
    echo "<TH>Contact Time</TH>";
    echo "<TH>Message</TH>";
    echo "<TH>Delete</TH>";
    echo "<TH>Edit</TH>";
    echo "</TR>";
    while ($row = $contact->fetch_array()) {
        echo "<TR>";
        echo "<TD>$row[0]</TD>";
        echo "<TD>$row[1]</TD>";
        echo "<TD>$row[2]</TD>";
        echo "<TD>$row[3]</TD>";
        echo "<TD>$row[4]</TD>";
        echo "<TD>$row[5]</TD>";
        echo "<TD>$row[6]</TD>";
        echo "<TD><button>Delete</button></TD>";
        echo "<TD><a href='update.php/?page=edit&id='.row[1].'>Edit</a></TD>";

        echo "</TR>";
    }
    echo "</TABLE>";
    $contact->free_result();
} else {
    echo "Something went wrong!<BR>";
    echo "Error Description: ", $conn->error;
}
$conn->close();
?>
