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
            <option value="ALL">All</option>
            <option value="BMW">BMW</option>
            <option value="Audi">Audi</option>
            <option value="Mercedes">Mercedes</option>
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

