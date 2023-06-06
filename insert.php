<!DOCTYPE html>
<html>
<head>
    <title>product toevoegen</title>
</head>
<body>

<?php
// kijk of het formulier is verzonden
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // maak een verbinding met de database
    $servername = "localhost";
    $username = "jouw_gebruikersnaam";
    $password = "jouw_wachtwoord";
    $dbname = "winkel";

    // maaakt de verbinding
    $conn = new mysqli($servername, $username, $password, $dbname);

    // kijkt of de verbinding succesvol is
    if ($conn->connect_error) {
        die("Verbinding mislukt: " . $conn->connect_error);
    }

    // ontvang de gegevens uit het formulier
    $product_naam = $_POST['product_naam'];
    $prijs_per_stuk = $_POST['prijs_per_stuk'];
    $omschrijving = $_POST['omschrijving'];

    $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES ('$product_naam', '$prijs_per_stuk', '$omschrijving')";

    // Voer de query uit
    if ($conn->query($sql) === TRUE) {
        echo "product succesvol toegevoegd.<br>";
    } else {
        echo "fout bij het toevoegen van het product: " . $conn->error . "<br>";
    }

    // sluit de verbinding met de database af
    $conn->close();
}
?>
<h2>product toevoegen</h2>

<form method="POST" action="insert.php">
    <label for="product_naam">Product Naam:</label><br>
    <input type="text" id="product_naam" name="product_naam" required><br><br>

    <label for="prijs_per_stuk">Prijs per Stuk:</label><br>
    <input type="text" id="prijs_per_stuk" name="prijs_per_stuk" required><br><br>

    <label for="omschrijving">Omschrijving:</label><br>
    <textarea id="omschrijving" name="omschrijving" required></textarea><br><br>

    <input type="submit" value="product Toevoegen">
</form>

</body>
</html>
