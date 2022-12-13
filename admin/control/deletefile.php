<?php
    
    //and also consider to check if the file exists as with the other guy suggested.
    $filename = $_GET['file']; //get the filename
    unlink($filename); //delete it

    $id= $_GET['id'];
    //DELETE DATA pelamar
    include('../../config.php');
    $query = mysqli_query($connect,"DELETE FROM applicants WHERE id='$id'");

    if ($query) {
        header('location: ../index.php?id=suspended'); //redirect back to the other page
    }
?>