<?php
include "mysql_db_conn.php";

// insert data to database
if($_GET["action"] === "insertData") {
    if(!empty($_POST["first_name"]) && !empty($_POST["last_name"]) &&
    !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["gender"]) && 
    $_FILES["image"]["size"] != 0){
        $first_name = mysqli_real_escape_string($conn, $_POST["first_name"]);
        $last_name = mysqli_real_escape_string($conn, $_POST["last_name"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
        $country = mysqli_real_escape_string($conn, $_POST["country"]);
        $gender = mysqli_real_escape_string($conn, $_POST["gender"]);

        // rename the image before saving to database
        $original_name = $_FILES["image"]["name"];
        $new_name = uniqid() . time() . "." . pathinfo($original_name, PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $new_name);

        $sql = "INSERT INTO `user`(`id`, `First Name`, `Last Name`, `email`, `phone`, `Gender`, `Image`) VALUES 
        (NULL, '$first_name','$last_name','$email','$phone','$gender','$new_name')";

        if(mysqli_query($conn, $sql)){
            echo json_encode([
                "statusCode" => 200,
                "message" => "User " . $first_name . " Added Successfully!"
            ]);
        } else {
            echo json_encode([
                "statusCode" => 500,
                "message" => "Failed to save data"
            ]);
        }
    } else {
        echo json_encode ([
            "statusCode" => 400,
            "message" => "Please fill in all the required fields"
        ]);
    }
}