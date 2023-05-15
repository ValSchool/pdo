<!DOCTYPE html>
<html>
<head>
    <title>opdrachtt 2</title>
</head>
<body>
    <form method="post">
        <label for="username">Gebruikersnaam</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Wachtwoord</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Knop</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        echo "Ingevoerde gebruikersnaam: " . $username . "<br>";
        echo "Ingevoerd wachtwoord: " . $password . "<br>";}


$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "Ze zijn gelijk";
} else {
    echo "ze zijn ongelijk";
}

$variabele1 = 10;
$variabele2 = 12;

if ($variabele1 != $variabele2) {
    echo "ze zijn ongelijk";
}

$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "ze zijn gelijk";
} else {
    echo "ze zijn ongelijk";
}
 ?>
</body>
</html>