<table>
<?php
$count = 0;
$winkel = new PDO("mysql:host=localhost;port=3306;dbname=store", "root", "database12345");

$statement = $winkel -> prepare ("select * from producten order by prijs_per_stuk asc");
$statement -> execute();
while ($row = $statement->fetch(PDO::FETCH_OBJ))
{
  $count++;
  echo "<tr><td><a href='delete.php?id=$row->product_id'>$count</a></td><td>$row->product_naam</td><td>$row->omschrijving</td><td>$row->prijs_per_stuk</td></tr>";
}

?>
</table>