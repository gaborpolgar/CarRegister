<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Személygépkocsi rögzítő felület</title>
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
        <form action="data_processing.php" method="POST" name="car_reg_form" id="car_reg_form" 
        onsubmit="return validation();"
        >
            <h2>Személygépkocsi regisztrációs űrlap</h2>
            <div class="mb-3">
                <label class="form-label" for="nev_input">Rendszám:</label>
                <input class="form-control" type="text" name="lincence_plate" id="licence_plate_input" placeholder="Rendszám" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="brand_input">E-mail:</label>
                <input class="form-control" type="text" name="brand" id="brand_input" placeholder="Márka" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="modell_input">Modell:</label>
                <input class="form-control" type="text" name="modell" id="modell_input" placeholder="Modell" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="constr_year_input">Gyártási év:</label>
                <input class="form-control" type="text" name="modell" id="constr_year_input" placeholder="Gyártási év" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="fuel_type_input">Üzemanyag típusa</label>
                <select class="form-select" name="fuel_type" id="fuel_type_input" required>
                    <option value=""></option>
                    <option value="benzin">benzin</option>
                    <option value="gazolaj">gázolaj</option>
                    <option value="elektromos">elektromos</option>
                    <option value="hibrid">hibrid</option>
                </select>
            </div>
            <div class="mb-3">
                <input class="form-check-input" type="checkbox" name="conditions" id="conditions_input" required>
                <label class="checkbox_label form-check-label" for="conditions_input">Elolvastam és elfogadom a felhasználói feltételeket</label>
            </div>
            <button type="reset" class="btn btn-outline-danger">Űrlap alaphelyzetbe</button>
            <button type="submit" class="btn btn-outline-primary">Elküld</button>
        </form>
    </main>
    
</body>
</html>