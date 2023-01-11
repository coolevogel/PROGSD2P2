<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Winkelmand week3</title>
</head>
<body>

<?php
$dagtotaal = array();



$prijzen = array(
        'chocola' => 1.25,
        'snoepgoed' => 2.75,
        'blikje frisdrank' => 2.25,
        'gevulde koek' => 1.75
);

foreach($prijzen as $key => $value){
    echo $key, " ", $value, "<br>";
};
?>

<h2>Winkelmand</h2>
<form action="" method="post">
    <label for="product">Product:</label><br>
    <input type="text" name="product" required placeholder="product"><br>

    <label for="aantal">Aantal:</label><br>
    <input type=number name="aantal" required placeholder="aantal" min="<?php echo 1?>" max="<?php echo 15?>"><br><br>

    <input type="submit" name="submit" value="toevoegen" >
</form>

<?php

function calcprice($hoeveel, $item){
    $totaalprijs = $hoeveel * $item;
};

$dagtotaal = array(

);

if (isset($_POST['submit'])) {

    $product = $_POST['product'];
    $aantal = $_POST['aantal'];

    if (empty($aantal)) {
        echo 'Aantal moet groter zijn dan 0';
    } else {

        if (array_key_exists($product, $prijzen )) {

            /*
             * 1. Wijzig de var_dump en laat met behulp van een loop de inhoud van de $prijzen array zien. (done)
             * 
             * 2. Kijk in de array $prijzen wat de prijs is die bij het product behoort. (done)
             * 
             * 3. Maak een functie die de totaalprijs berekent voor het gekozen product. (done)
             * 
             * 4. Kies minimaal 4 keer een product en submit dit. (done)
             * 
             * 5. Maak een functie die het totaal van elke bestelling in de array $dagtotaal stopt. (done)
             * 
             * 6. Maak een functie die het totaal van alle bestellingen optelt. (done)
             * 
             * 7. Maak een kortingsfunctie, als het totaalbedrag groter is dan 100 mag je 5% korting geven (done)
             * 
             * 8. Laat op het scherm zien wat de klant moet betalen. (done)
             */

            $prijs = $prijzen[$product];
            echo '<br><br>';
            echo 'Gekozen product en totaal prijs', '<br><br>';
            echo 'Product: ' . $product . '<br>';
            echo 'Aantal in winkelmand: ' . $aantal . '<br>';
            totaalprijs($aantal, $prijs);
        } else {
            echo 'Dit product wordt niet verkocht';
        }

    }
}

function totaalprijs($aantal, $prijs){
    echo 'Totaal prijs: ' . $aantal * $prijs . '<br>';
};

function dagtotaal(){
    $aantal * $prijs = $totaal;
    array_push($dagtotaal, $totaal);
};

?>

</body>
</html>