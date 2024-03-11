
<?php

    if(isset($_POST['sign-up'])){
        function escape($string) {
            global $connection;
            return mysqli_real_escape_string($connection, $string);
        }

        $user_name      = escape($_POST['username']);
        $user_email     = escape($_POST['email']);
        $user_pass      = escape($_POST['password']);


        //user name validation
        //at lest 3 character, letter, numeber and underscore allowed
        $pattern_un = "/\w{3,16}/";
        if(!preg_match($pattern_un, $user_name)) {
            $errUn = "Must be at lest 3 character long, letter, number and underscore allowed";
        }
        else {
            $query = "SELECT * FROM clients WHERE user_name = '$user_name'";
            $query_con = mysqli_query($connection, $query);
            if(!$query_con) {
                die("Query Failed" . mysqli_error($connection));
            }
            $count = mysqli_num_rows($query_con);
            if($count == 1) {
                $errUn = "User name not available pick new one";
            }
        }

        //email validation
        //filter_var($user_email, FILTER_VALIDATE_EMAIL)


        $pattern_ue = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i";

        if(!preg_match($pattern_ue, $user_email)) {
            $errUe = "Invalid format of email";
        } else {
            $query = "SELECT * FROM clients WHERE user_email = '$user_email'";
            $query_con = mysqli_query($connection, $query);
            if(!$query_con) {
                die("Query Failed" . mysqli_error($connection));
            }
            $count = mysqli_num_rows($query_con);
            if($count == 1) {
                $errUe = "Email already exists";
            }
        }

        // password validation
        $pattern_up = "/^.*(?=.{4,56})(?=.*[a-z])(?=.*[A-Z])(?=.*\d).*$/";
        if(!preg_match($pattern_up, $user_pass)) {
            $errPass = "Must be at lest 4 character long, 1 upper case, 1 lower case letter and 1 number exist";
        }




        if(!isset($errUn) && !isset($errUe) && !isset($errPass)) {
            $hash = password_hash($user_pass, PASSWORD_BCRYPT, ['cost'=>10]);
            date_default_timezone_set("africa/PORTO-NOVO");
            $date = date("Y-m-d H:i:s");
            $date_update = date("Y-m-d H:i:s");

            $query = "INSERT INTO clients (user_name, user_email, user_password, created_at, update_at)
            VALUES ('$user_name', '$user_email', '$hash', '$date', '$date_update')";

            $query_conn = mysqli_query($connection, $query);
            if(!$query_conn) {
                die("Query failed" . mysqli_error($connection));
            }
            else {
                return redirect('http://127.0.0.1:8000/');
            }

        }

    }