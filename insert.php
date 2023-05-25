<?php
$host = 'localhost:3307';

$db   = 'test';

$user = 'root';

$pass = '';

$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try

{

$pdo = new PDO($dsn, $user, $pass, $options);

echo "Connectie gemaakt!";
} 
catch (\PDOException $e) 
{
throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_naam = $_POST["product_naam"];

    $prijs_per_stuk = $_POST["prijs_per_stuk"];
    $omschrijving = $_POST["omschrijving"];

    $query = 'INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (:product_naam, :prijs_per_stuk, :omschrijving)';
    $statement = $pdo->prepare($query);

    $data = array(
        "product_naam" => $product_naam,
        "prijs_per_stuk" => $prijs_per_stuk,
        "omschrijving" => $omschrijving
    );

    $result = $statement->execute($data);

    if ($result) {
        echo "Product  toegevoegd.";
    } else {
        echo "Kan het Product niet toevoegen, Errorcode: 404";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>product</title>
</head>
<body>
    <h1>product Toevoegen</h1>

    <form method="POST" action="insert.php">

        <label for="product_naam">productnaam:</label>
        <input type="text" name="product_naam" required><br><br>
        
        <label for="prijs_per_stuk">prijs per stuk:</label>

        <input type="number" name="prijs_per_stuk" required><br><br>
        
        <label for="omschrijving">omschrijving:</label>
        <textarea name="omschrijving" required></textarea><br><br>
        
        <input type="submit" value="toevoegen">
    </form>
</body>
</html>
