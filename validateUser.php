<?php

    $configs = include 'assets/.config.php';

    function isValidUser($userName, $password) {
        $hash = getPasswordHash($userName);
        $isValid = password_verify($password, $hash);
        return $isValid;
    }

    function getPasswordHash($userName) {
        $user = $configs['username'];
        $pass = $configs['password'];
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
            $hash = "";
            $resultSet = $pdo->query("SELECT Password FROM tasks_user WHERE UserName = '$userName'");

            foreach($resultSet as $row)
            {
                $hash = $row['Password'];
            }
        } catch(PDOException $err) {
            echo $err->getMessage();
        }
        return $hash;
    }

    function getUsersFirstName($userName){
        $user = $configs['username'];
        $pass = $configs['password'];

        try {
            $pdo = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
            $firstName = "";
            $resultSet = $pdo->query("SELECT FirstName FROM tasks_user WHERE UserName = '$userName'");

            foreach($resultSet as $row)
            {
                $firstName = $row['FirstName'];
            }
        } catch(PDOException $err) {
            echo $err->getMessage();
        }
        return $firstName;
    }

    function newUserFirstName($newFirstName) {
        global $checkFirstName;
        $checkFirstName = false;
        if(strlen($newFirstName) >= 3) {
            $checkFirstName = true;
            return $checkFirstName;
        }
    }

    function newUserLastName($newLastName) {
        global $checkLastName;
        $checkLastName = false;
        if(strlen($newLastName) >= 3) {
            $checkLastName = true;
            return $checkLastName;
        }
    }

    function newUserEmail($newEmail) {
        global $checkEmail;
        $checkEmail = false;
        if(filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
            $checkEmail = true;
            return $checkEmail;
        }
    }

    function newUserPhone($newPhone) {
        global $checkPhone;
        $checkPhone = false;
        if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $newPhone)) {
            $checkPhone = true;
            return $checkPhone;
        }
    }

    function newUser_Name($newUsername) {
        global $checkUsername;
        $checkUsername = false;
        if(strlen($newUsername) >= 6){
            $checkUsername = true;
            return $checkUsername;
        }
    }

    function confirmPassword($newPassword, $passwordConfirm) {
        global $passwordCheck;
        $passwordCheck = false;
        if($newPassword != '') {
            if($newPassword == $passwordConfirm) {
                $passwordCheck = true;
                return $passwordCheck;
            }
        }
    }

    function addUser($newFirstName, $newLastName, $newEmail, $newPhone, $newUsername, $newPassword) {

        }
    }
?>
