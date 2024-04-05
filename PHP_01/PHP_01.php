<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = '';

    if (!is_string($name) || $name === '') {
        $message = "Nama harus diisi dengan string.";
    } elseif (!is_string($address) || $address === '') {
        $message = "Alamat harus diisi dengan string.";
    } elseif (!is_numeric($phoneNumber)) {
        $message = "Nomor Telepon harus diisi dengan angka.";
    } else {
        $message = "Data valid, proses selanjutnya disini.";
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
		<form class="form" method="post">
			<div class="flex">
				<label class="width-50" for="name">Nama</label>
				<input type="text" id="name" name="name" required>
			</div>
			<div class="flex">
				<label class="width-50" for="address">Alamat</label>
				<input type="text" id="address" name="address" required>
			</div>
			<div class="flex">
				<label class="width-50" for="phoneNumber">Nomor Telepon</label>
				<input type="text" id="phoneNumber" name="phoneNumber" required>
			</div>
			<div class="flex">
				<label class="width-50" for="gender">Jenis Kelamin</label>
				<div class="dropdown">
					<button class="dropbtn">Pilih</button>
					<div class="dropdown-content">
						<input type="radio" id="men" name="gender" value="pria">Pria</input>
						<input type="radio" id="women" name="gender" value="wanita">Wanita</input>
					</div>
				</div>
			</div>
			<div class="flex">
				<label class="width-50"></label>
				<input type="submit">
			</div>
		</form>

	</section>
</body>

</html>