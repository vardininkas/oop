<?php
$dataArray = json_decode(file_get_contents('./src/Jsonas/input.json'), true);
if (is_null($dataArray)) {
    $dataArray = [];
}

$date = date('Y/m/d');

$dataArray[] = [
    "qty" => $_POST['qty'],
    "price" => $_POST['price'],
    "tariff" => $_POST['tariff'],
    "month" => $_POST['month'],
    "createdAt" => date('Y/m/d')

];
file_put_contents('./src/Jsonas/input.json', json_encode($dataArray));

if(isset($_POST['submit'])) {
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $tariff = $_POST['tariff'];
    $month = $_POST['month'];
}

if ($tariff == '1') {
    $totalPrice = $qty * $price;
    $text = 'dieninio tarifo ';
} else {
    $totalPrice = ($qty * $price) * 0.5;
    $text = 'naktinio tarifo ';
}

?>

<!DOCTYPE html>
<html>
<head></head>

<body>
<h3>Suvartotas kiekis:<?php echo $qty ?></h3>
<h3>Vienos kWh kaina:<?php echo $price ?></h3>
<h3>Tarifas:<?php echo $tariff ?></h3>
<h3>Mėnesis:<?php echo $month ?></h3>
<h2>Viso <?php echo $text ?>kaina:<?php echo $totalPrice ?></h2>

<form action="index.php">
    <input type="submit" name="select" value="Deklaruoti ir Sumokėti"/>
</form>
</body>

</html>