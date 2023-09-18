<?php 

$conn = new mysqli('localhost','root','','res1'); 
    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }

if (isset($_GET['id'])) {

    $userid = $_GET['id'];

    $sql = "DELETE FROM `user` WHERE `id`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>

