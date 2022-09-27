<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Személygépkocsik listája</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand navbar-primary bg-light">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Vissza a rögzítő felülethez</a></li>
            <li class="nav-item"><a class="nav-link" href="cars.php">Tovább a személygépkocsik adataira</a></li>
        </ul>
    </nav>
    <main class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>rendszám</th>
                    <th>márka</th>
                    <th>modell</th>
                    <th>gyártási éve</th>
                    <th>üzemanyag típus</th>
                </tr>
            </thead>
            <tbody>

                <?php
            $file = fopen("autók.txt", "r");
            $i = 0;
            while ($sor = fgets($file)) {
                $i++;
                $adatok = explode(";", $sor);
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $adatok[0] ?></td>
                    <td><?php echo $adatok[1] ?></td>
                    <td><?php echo $adatok[2] ?></td>
                    <td><?php echo $adatok[3] ?></td>
                    <td><?php echo $adatok[4] ?></td>
                </tr>
                <?php
            }
            fclose($file);
            ?>
            </tbody>
            
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>rendszám</th>
                    <th>márka</th>
                    <th>modell</th>
                    <th>gyártási éve</th>
                    <th>üzemanyag típus</th>
                </tr>
            </tfoot>
        </table>
    </main>
    
</body>
</html>