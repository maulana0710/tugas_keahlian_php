<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['number1'];

    // Loop through each row
    echo "<div style='text-align: center'>";
    for ($i = $num1; $i >= 1; $i--) {
        // Loop to print asterisks and numbers for each row
        for ($j = 1; $j <= $num1; $j++) {
            // Print asterisks or numbers based on the condition
            if ($j == $i) {
                echo $i; // Print the number
            } else {
                echo "*"; // Print an asterisk
            }
        }
        echo "<br>"; // Move to the next line after each row
    }
    echo "</div>";
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
        <h1></h1>
        <form action="" method="post" class="form">
            <div class="flex">
                <label class="width-50" for="number1">masukan angka :</label>
                <input type="text" id="number1" name="number1" required>
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