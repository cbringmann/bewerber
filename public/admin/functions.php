<?php

function redirect($location){

    header("Location:" . $location);
    exit;

}

function isLoggedIn(){

    if(isset($_SESSION['username'])){
        return true;
    }

    return false;
}

function login_user($username, $password) {

    global $conn;

    $username = trim($username);
    $password = trim($password);

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);


    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_query = mysqli_query($conn, $query);
    if (!$select_user_query) {

        die("QUERY FAILED" . mysqli_error($conn));

    }


    while ($row = mysqli_fetch_array($select_user_query)) {

    $db_username = $row['username'];
    $db_user_password = $row['user_password'];

        redirect("/");


/*        if (password_verify($password,$db_user_password)) {

            $_SESSION['username'] = $db_username;

            redirect("/");

        } else {

        return false;

        }*/
    }

//return true;

}