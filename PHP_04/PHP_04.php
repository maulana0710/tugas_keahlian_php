<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];

    $oddNumbers = array(); // Initialize an array to store odd numbers

    for ($i = $num1; $i <= $num2; $i++) {
        if ($i % 2 != 0) {
            $oddNumbers[] = $i; // Add odd number to the array
        }
    }

    echo "<h1 style='text-align: center'>Angka ganjil dari $num1 dan $num2: </h1>";
    echo "<div style='text-align: center'><h2>[";
    echo implode(", ", $oddNumbers);
    echo "]</h2></div>";
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
        <h1>Angka Ganjil</h1>
        <form action="" method="post" class="form">
            <div class="flex">
                <label class="width-50" for="number1">angka 1 :</label>
                <input type="text" id="number1" name="number1" required>
            </div>
            <div class="flex">
                <label class="width-50" for="number2">angka 2 :</label>
                <input type="text" id="number2" name="number2" required>
            </div>
            <div class="flex">
                <label class="width-50" for="submit"></label>
                <input type="submit">
            </div>
        </form>
    </section>

    <section>

    </section>
</body>

</html>