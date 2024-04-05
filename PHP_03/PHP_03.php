<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="data"></div>
    <div id="result"></div>

    <script>
        function countDuplicates(array) {
            var counts = {};

            // Count occurrences of each number
            array.forEach(function(number) {
                counts[number] = (counts[number] || 0) + 1;
            });

            // Extract numbers with counts greater than 1
            var duplicates = {};
            for (var number in counts) {
                if (counts.hasOwnProperty(number) && counts[number] > 1) {
                    duplicates[number] = counts[number];
                }
            }

            return duplicates;
        }

        // Fetch data
        fetch('DATA_PHP_03.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById('data').innerHTML = data;

                var duplicates = countDuplicates(data);
                if (Object.keys(duplicates).length > 0) {
                    var resultText = "Angka Sama :<br>";
                    for (var number in duplicates) {
                        resultText += number + " muncul " + duplicates[number] + " kali<br>";
                    }
                    document.getElementById('result').innerHTML = resultText;
                } else {
                    document.getElementById('result').innerText = "Tidak ditemukan angka yang sama.";
                }
            })
            .catch(error => console.error('Error fetching data:', error));
    </script>
</body>

</html>