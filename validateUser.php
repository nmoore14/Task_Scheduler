<?php

    $configs = include 'assets/.configs.php';

    function isValidUser($userName, $password) {
        $hash = getPasswordHash($userName);
        $isValid = password_verify($password, $hash);
        return isValid;
    }

    function getPasswordHash($userName) {
        $user = $configs['username'];
        $pass = $configs['password'];
        $dbname = $configs['database'];
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=' . $dbname, $user, $pass);
            $hash = "";
            $resultSet = $pdo->query("SELECT Password FROM tasks_user WHERE UserName = '$userName'");

            foreach ($resultSet as $row) {
                $hash = $row['Password'];
            }
        } catch(PDOException $err) {
            echo $err->getMessage();
        }
        return $hash;
    }

    function getUsersFirstName($userName) {
        $user = $configs['username'];
        $pass = $configs['password'];
        $dbname = $configs['database'];
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=' . $dbname, $user, $pass);
            $firstName = "";
            $resultSet = $pdo->query("SELECT FirstName FROM tasks_user WHERE UserName = '$userName'");

            foreach ($resultSet as $row) {
                $firstName = $row['FirstName'];
            }
        } catch(PDOException $err) {
            echo $err->getMessage();
        }
        return $firstName;
    }
?>
