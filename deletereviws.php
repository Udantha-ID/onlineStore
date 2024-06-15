<?php  require ("inc/connections.php");

?>


<?php
if(isset ($_POST["sub-btn"])){

    $first = $_POST['fname'];

    $sql = "DELETE FROM reviews WHERE FirstName ='$first' ";



if ($connection->query($sql) === TRUE)
 {
    echo "<script>
    alert('Deleted in succesfully !') ;
    window.location.replace('feedback.php');
</script>";
} else {
    echo "Error deleting record: " . $connection->error;
}
}
$connection->close();

?>