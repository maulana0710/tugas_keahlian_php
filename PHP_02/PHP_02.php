<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username === 'kreators' && $password === 'srotaerk') {
        $message = 'Login Berhasil!';
    } else {
        $message = 'Login Gagal!';
    }

    header('Content-Type: application/json');
    echo json_encode(['message' => $message]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .flex {
            display: flex;
            flex-wrap: wrap;
        }

        .container {
            text-align: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .width-50 {
            width: 50%;
        }

        .height-50 {
            height: 50%;
        }

        /* Style The Dropdown Button */
        .dropbtn {
            text-align: left;
            color: black;
            background: #fff;
            border: 1px solid black;
            cursor: pointer;
            width: 175px;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
        }

        /* Links inside the dropdown */
        .dropdown-content input {
            color: black;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content input:hover {
            background-color: #f1f1f1
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
            border: 1px solid black;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #fff;

        }
    </style>
</head>

<body>
    <section class="container">
        <h1>LOGIN</h1>
        <form action="" method="post" class="form">
        <div class="flex">
            <label class="width-50" for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="flex">
            <label class="width-50" for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="flex">
            <label class="width-50" for="submit"></label>
            <input type="submit" value="Login">
        </div>
    </form>

    </section>
</body>

</html>