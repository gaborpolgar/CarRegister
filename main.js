function validation() {
    const licence_plate = document.forms["car_reg_form"]["licence_plate"].value;
    const brand = document.forms["car_reg_form"]["brand"].value;
    const modell = document.forms["car_reg_form"]["modell"].value;
    const constr_year = document.forms["car_reg_form"]["constr_year"].value;
    const fuel_type = document.forms["aar_reg_form"]["fuel_type"].value;
    const conditions = document.forms["car_reg_form"]["conditions"].checked;
    if (licence_plate.trim().length == 0) {
        alert("A rendszám megadása kötelező")
        return false;
    }
    if (brand.trim().length == 0) {
        alert("A márka megadása kötelező")
        return false;
    }
    if (modell.trim().length == 0) {
        alert("A modellnév megadása kötelező")
        return false;
    }
    if (constr_year.trim().length == 0) {
        alert("A gyártási év megadása kötelező")
        return false;
    }
    if (fuel_type.trim().length == 0) {
        alert("Iskolai végzettség megadása kötelező")
        return false;
    }
    if (!feltetelek) {
        alert("A feltételek elfogadása kötelező")
        return false;
    }
    return true;
}