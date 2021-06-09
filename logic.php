<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    $sql = "select * from data";
    $query = mysqli_query($conn, $sql);

    if (isset($_REQUEST["new_post"])) {
        $title = $_REQUEST["title"];
        
        $content = $_REQUEST["content"];

        $sql = "INSERT INTO data(title,content) VALUES ('$title', '$content')";
        mysqli_query($conn,$sql);

        header("Location: index.php?info=added");
        exit();
    }

    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM data WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }
    if (isset($_REQUEST['update'])) {
        $id = $_REQUEST['id'];
        $title = $_REQUEST["title"];
        $content = $_REQUEST['content'];

        $sql = "UPDATE data SET title = '$title', content= '$content' WHERE id = $id";
        mysqli_query($conn,$sql);

        header("Location: index.php?info=updated");
        die;

    }
    if (isset($_REQUEST['deleted'])) {

        $id = $_REQUEST['id'];
      

        $sql = "DELETE FROM data where id = '$id'";
        $query = mysqli_query($conn, $sql);

       

        header("Location: index.php?info=deleted");
        die;

    }



