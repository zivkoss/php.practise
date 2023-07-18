<html>

<head>
    <title>Uloguj se</title>
</head>

<body>

    <form method="POST">
        <p>
            <label for="">Ime</label>
            <input type="text" name="fname">
        </p>
        <p>
            <label for="">Prezime</label>
            <input type="text" name="lname">
        </p>
        <p>
            <label for="">Email</label>
            <input type="email" name="email">
        </p>
        <p>
            <label for="">Datumrodjenja</label>
            <input type="date" name="date">
        </p>
        <button type="submit">Posalji</button>
    </form>



    <?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $date = $_POST['date'];

        $today = date("Y-m-d");
        $today = date_create($today);

        $converted_date = date_create($date);

        $diff = date_diff($converted_date, $today);
        $diff = $diff->y;

        if ($diff >= 18) {
            $data = "Ime: $first_name,
                 Prezime: $last_name,
                 Email: $email,
                 Datum rodjenja: $date";

            $file = fopen($first_name . ".txt", "w");

            fwrite($file, $data);

            fclose($file);
            
            echo "Uspesno set poslali poruku";
        } else {
            echo "Morate imati 18 godina da bi ste poslali poruku?";
        }
    }

    ?>

</body>

</html>





<html>

<head>
    <title>Auta</title>
</head>

<body>

    <?php

    $selectedBrand = '';

    if (isset($_GET['brand'])) {
        $selectedBrand = $_GET['brand'];
    }

    ?>

    <form method="GET">
        <select name="brand">
            <option value="ALL" <?php echo ($_GET['brand'] ?? '') === 'ALL' ? 'selected' : ''; ?>>All</option>
            <option value="BMW" <?php echo ($_GET['brand'] ?? '') === 'BMW' ? 'selected' : ''; ?>>BMW</option>
            <option value="Audi" <?php echo ($_GET['brand'] ?? '') === 'Audi' ? 'selected' : ''; ?>>Audi</option>
            <option value="Mercedes" <?php echo ($_GET['brand'] ?? '') === 'Mercedes' ? 'selected' : ''; ?>>Mercedes</option>
        </select>

        <button type="submit">Search</button>
    </form>

    <?php

    $cars = [
        'BMW' => ['Serija 3', 'Serija 5', 'X3', 'X5'],
        'Audi' => ['A4', 'A6', 'Q5', 'Q7'],
        'Mercedes' => ['C-Class', 'E-class', 'GLC', 'GLE']
    ];

    foreach ($cars as $brand => $models) {

        if ($selectedBrand === $brand || $selectedBrand === 'ALL' || $selectedBrand === '') {
            echo "<h2>$brand</h2>";

            foreach ($models as $model) {
                echo "<p>$model</p>";
            }
        }
    }
    ?>
</body>

</html>