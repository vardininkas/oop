<?php

use PHPOOP\Framework\Router;
use PHPOOP\Container\DIContainer;

$container = new DIContainer();
$container->loadDependencies();

$requestUri = str_replace( '/PHPOOP' ,  '', $_SERVER['REQUEST_URI']);
$router = $container->get(Router::class);
$router->process($requestUri);

$data = json_decode(file_get_contents('./src/Jsonas/input.json'), true);
if (is_null($data)) {
    $data = [];
}

$reaDdate = date('Y/m/d');
$date = date('Y/m', strtotime($reaDdate. ' -1 months'))

?>

<!DOCTYPE html>
<html>
<head></head>

<body>

<h1>Elektros apskaitos sistema</h1>
<form method="post" action="submit.php">
    Mėnesis: <input type="text" name="menesis" value="<?php echo $date ?>">
    <br><br>
    Sunaudotų kWh kiekis: <input type="text" name="qty" placeholder="kWh">
    <br><br>
    Vienos kWh kaina: <input type="text" name="price" placeholder="kwh kaina">
    <br><br>

    <label for="tariff">Tarifas:</label>
    <select name="tariff" id="tariff">
        <option value="0">--- Pasirinkite tarifa ---</option>
        <option value="1">Dieninis</option>
        <option value="2">Naktinis</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Skaičiuoti kainą">
</form>
</body>

</html>



