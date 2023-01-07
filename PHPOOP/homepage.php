<?php
//require("json.php")

$data = json_decode(file_get_contents('./src/Jsonas/input.json'), true);
if (is_null($data)) {
    $data = [];
}


?>

<!DOCTYPE html>
<html>
<head></head>

<body>

<h1>Elektros apskaitos sistema</h1>
<form method="post" action="submit.php">
    Sunaudotų kWh kiekis: <input type="text" name="qty" placeholder="kWh"><br><br>
    Vienos kWh kaina: <input type="text" name="price" placeholder="kwh kaina"><br><br>

    <label for="tariff">Tarifas:</label>

            <select name="tariff" id="tariff">
                <option value="0">--- Pasirinkite tarifą ---</option>
                <option value="1">Dieninis</option>
                <option value="2">Naktinis</option>
            </select>
    <br><br>

    <label for="menesis">Mėnesis:</label>
            <select name="menesis" id="menesis">
                <option value="0">--- Pasirinkite menesi ---</option>
                <option value="1">Sausis</option>
                <option value="2">Vasaris</option>
                <option value="3">Kovas</option>
                <option value="4">Balandis</option>
                <option value="5">Gegužė</option>
                <option value="6">Birželis</option>
                <option value="7">Liepa</option>
                <option value="8">Rugpjūtis</option>
                <option value="9">Rugsėjis</option>
                <option value="10">Spalis</option>
                <option value="11">Lapkritis</option>
                <option value="12">Gruodis</option>
            </select>
    <br><br>

    <input type="submit" value="Skaičiuoti kainą">
</form>
</body>

</html>



