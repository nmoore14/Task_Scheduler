<?php

// Set and declare session variables
session_start();

$configs = include 'assets/.config.php';

// Variables needed by multiple functions that are not declared outside of this page.




function isValidUser($userName, $password) {
    $hash = getPasswordHash($userName);
    $isValid = password_verify($password, $hash);
    return $isValid;
}

function getPasswordHash($userName) {
    $user = USERNAME;
    $pass = PASSWORD;
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=nmoore2', $user, $pass);
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
    $user = USERNAME;
    $pass = PASSWORD;

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=nmoore2', $user, $pass);
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
    $checkFirstName = false;
    if(strlen($newFirstName) >= 3) {
        $checkFirstName = true;
        $_SESSION['checkFirstName'] = $checkFirstName;
    } else {
        $_SESSION['checkFirstName'] = $checkFirstName;
    }
}

function newUserLastName($newLastName) {
    $checkLastName = false;
    if(strlen($newLastName) >= 3) {
        $checkLastName = true;
        $_SESSION['checkLastName'] = $checkLastName;
    } else {
        $_SESSION['checkLastName'] = $checkLastName;
    }
}

function newUserEmail($newEmail) {
    $checkEmail = false;
    if(filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
        $checkEmail = true;
        $_SESSION['checkEmail'] = $checkEmail;
    } else {
        $_SESSION['checkEmail'] = $checkEmail;
    }
}

function newUserPhone($newPhone) {
    $checkPhone = false;
    if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $newPhone)) {
        $checkPhone = true;
        $_SESSION['checkPhone'] = $checkPhone;
    } else {
        $_SESSION['checkPhone'] = $checkPhone;
    }
}

function newUser_Name($newUsername) {
    $checkUsername = false;
    if(strlen($newUsername) >= 6){
        $checkUsername = true;
        $_SESSION['checkUsername'] = $checkUsername;
    } else {
        $_SESSION['checkUsername'] = $checkUsername;
    }
}

function confirmPassword($newPassword, $passwordConfirm) {
    $passwordCheck = false;
    if($newPassword != '' && strlen($newPassword) >= 6) {
        if($newPassword == $passwordConfirm) {
            $passwordCheck = true;
            $_SESSION['passwordCheck'] = $passwordCheck;
        }
    } else {
        $_SESSION['passwordCheck'] = $passwordCheck;
    }
}

function errorShow($checkFirstName, $checkLastName, $checkEmail, $checkPhone, $checkUsername, $passwordCheck) {
    global $errorCheck;
    $errorCheck = array();

    if ($checkFirstName === false) {
        $errorCheck[] = 'fnError';
    }
    if ($checkLastName === false) {
        $errorCheck[] = 'lnError';
    }
    if ($checkEmail === false) {
        $errorCheck[] = 'emError';
    }
    if ($checkPhone === false) {
        $errorCheck[] = 'phError';
    }
    if ($checkUsername === false) {
        $errorCheck[] = 'unError1';
    }
    if ($passwordCheck === false) {
        $errorCheck[] = 'pwError';
    }

    return $errorCheck;
}

function addUser($newFirstName, $newLastName, $newEmail, $newPhone, $newUsername, $newPassword) {
    global $pass;
    global $connPass;
    global $e1;
    global $e2;
    $password = $newPassword;
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $user = USERNAME;
    $pass = PASSWORD;
    $db = DATABASE;
    $host = HOST;

    try {
        $conn = new PDO("mysql:host=localhost;dbname=nmoore2", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connPass = "Connect Successful";
    } catch(PDOException $e1) {
        $connPass = "Connection Failed";
    }

    $insert_statement = 'INSERT INTO tasks_user(UserEmail, UserCellPhone, UserName, Password, FirstName, LastName, JoinDate, ActiveUser) VALUES(:newEmail, :newPhone, :newUsername, :passHash, :newFirstName, :newLastName, :joinDate, :activeUser)';
    $dateIn = date("Y-m-d H:i:s");
    $insert_params = array(':newEmail' => $newEmail, ':newPhone' => $newPhone, ':newUsername' => $newUsername, ':passHash' => $hash, ':newFirstName' => $newFirstName, ':newLastName'  => $newLastName, ':joinDate' => $dateIn, ':activeUser' => 0);

    try {
        $insert = $conn->prepare($insert_statement);
        $insert->execute($insert_params);
        $last_id = $conn->lastInsertId();
        $pass = "Query has been executed.";
    } catch(PDOException $e2) {
        $pass = "Query failed.";
    }

}
?>
