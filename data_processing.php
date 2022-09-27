<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>személygépjármű adatainak feldolgozása</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand navbar-primary bg-light">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Vissza a rögzítő felülethez</a></li>
            <li class="nav-item"><a class="nav-link" href="cars.php">Tovább a személygépjárművek adataira</a></li>
        </ul>
    </nav>
    <main class="container">
        <?php if (isset($_POST) && !empty($_POST)) : ?>
            <?php if (count($_POST) < 6) : ?>
                <h2>Hiba az űrlap elküldésekor</h2>
                <ul>
                    <?php if (!isset($_POST['licence_plate']) || empty($_POST['licence_plate'])) : ?>
                        <li>A rendszám  megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['brand']) || empty($_POST['brand'])) : ?>
                        <li>A márka megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['modell']) || empty($_POST['modell'])) : ?>
                        <li>A modell megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['constr_year']) || empty($_POST['constr_year'])) : ?>
                        <li>A gyártási év megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['fuel_type']) || empty($_POST['fuel_type'])) : ?>
                        <li>Az üzemanyag típusának megadása kötelező</li>
                    <?php endif; ?>
                    <?php if (!isset($_POST['conditions']) || empty($_POST['conditions'])) : ?>
                        <li>A feltételek elfogadása kötelező</li>
                    <?php endif; ?>
                </ul>
            <?php else : ?>
                <?php 
                    $file = fopen("autók.txt", 'a');
                    $lincence_plate = $_POST['licence_plate'];
                    $brand = $_POST['brand'];
                    $modell = $_POST['modell'];
                    $constr_year = $_POST['constr_year'];
                    $fuel_type = "";
                    switch ($_POST['fuel_type']) {
                        case "benzin":
                            $fuel_type = "benzin";
                            break;
                        case "gázolaj":
                            $fuel_type = "gázolaj";
                            break;
                        case "elektromos":
                            $fuel_type = "elektromos";
                            break;
                        case "hibrid":
                         $fuel_type = "hibrid";
                         break;
                    } 
                    $sor = "$licence_plate;$brand;$modell;$constr_year;$fuel_type". PHP_EOL;
                    fwrite($file, $sor);
                    fclose($file);
                ?>
                <section id="megadott_adatok">
                    <h2>Megadott adatok</h2>
                    <ul>
                        <li>Rendszáma: <?php echo $licence_plate ?> </li>
                        <li>Márkája: <?php echo $brand ?> </li>
                        <li>Modell: <?php echo $modell ?> </li>
                        <li>Gyártási éve: <?php echo $constr_year ?> </li>
                        <li>Üzemanyag típuse: <?php echo $fuel_type ?></li>
                    </ul>
                </section>
            <?php endif; ?>
        <?php endif; ?>
    </main>
    
</body>
</html>