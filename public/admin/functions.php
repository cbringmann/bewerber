<?php

function login_user($username, $password) {

    $username = trim($username);
    $password = trim($password);

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);


    $query = "SELECT * FROM users WHERE username = '{$username}' ";
    $select_user_query = mysqli_query($connection, $query);
    if (!$select_user_query) {

        die("QUERY FAILED" . mysqli_error($connection));

    }


    while ($row = mysqli_fetch_array($select_user_query)) {

    $db_username = $row['username'];
    $db_user_password = $row['user_password'];


        if (password_verify($password,$db_user_password)) {

            $_SESSION['username'] = $db_username;

            redirect("/");

        } else {

        return false;

        }
    }

return true;

}