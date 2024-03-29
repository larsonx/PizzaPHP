<?php

if (isset($_POST['submit'])) {
    $dag = date('l');
    $naam = $_POST['naam'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];
    $plaats = $_POST['plaats'];
    $time = $_POST['time'];
    $pizza1 = $_POST['margherita'];
    $pizza2 = $_POST['funghi'];
    $pizza3 = $_POST['marina'];
    $pizza4 = $_POST['hawai'];
    $pizza5 = $_POST['quattroformaggi'];
    $korting = 0;
    $totaal_prijs = 0;
    $bezorgen = $_POST['select'];
    $bezorgkosten = 5.00;
    $x = 0;

    //connectie
    $conn = new mysqli('localhost', 'root', '', 'pizzaphp');
    if ($conn->connect_error) {
        die('Connection Failed    :  ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into bestellingen(naam, adres, postcode, plaats,tijd, margherita,funghi,marina,hawai,quattroformaggi)
            values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssssssss', $naam, $adres, $postcode, $plaats,$time, $pizza1, $pizza2, $pizza3, $pizza4, $pizza5);
        $stmt->execute();
        echo "Uw bestelling is verwerkt" . "<br>" . "<br>";
        $stmt->close();
        $conn->close();
    }



    echo "Gegevens" . "<br>" . "<br>";
    echo "Naam: " . $_POST['naam'] . "<br>";
    echo "Adres: " . $_POST['adres'] . "<br>";
    echo "Postcode: " . $_POST['postcode'] . "<br>";
    echo "Plaats: " . $_POST['plaats'] . "<br>";
    echo "Tijd: " . $_POST['time'] . "<br>";
    echo "Aantal margherita: " . $_POST['margherita'] . "<br>";
    echo "Aantal funghi: " . $_POST['funghi'] . "<br>";
    echo "Aantal marina: " . $_POST['marina'] . "<br>";
    echo "Aantal hawai: " . $_POST['hawai'] . "<br>";
    echo "Aantal quattroformaggi: " . $_POST['quattroformaggi'] . "<br>" . "<br>";


    function bezorgkostenmaandag($x, $bezorgen, $pizza1, $pizza2, $pizza3, $pizza4, $pizza5)
    {

        if ($bezorgen == 'bezorgen') {
            $totaalprijs = $x;
            $x = ($pizza1 + $pizza2 + $pizza3 + $pizza4 + $pizza5) * 7.50 + 5;
            echo "Maandag zijn alle Pizza's €7,50" . "<br>";
            echo "Bezorgkosten €5,00" . "<br>";
            echo "Totaal:  " . "€" . number_format($x, 2, ',') . "<br>";
            
        } elseif ($bezorgen == 'afhalen') {
            echo $x = ($pizza1 + $pizza2 + $pizza3 + $pizza4 + $pizza5) * 7.50;
        }

    }

    function vrijdag($bezorgen, $totaal_prijs, $korting)
    {
        if ($bezorgen == 'bezorgen') {
            echo "vrijdag 15% korting  -€" . number_format($korting, 2, ',') . "<br>";
            echo "Bezorgkosten: €5,00" . "<br>";
            echo "Totaal: €" . number_format($totaal_prijs + 5, 2, ',') . "<br>";

        } elseif ($bezorgen == 'afhalen') {
            echo "vrijdag 15% korting -€" . number_format($korting, 2, ',') . "<br>";
            echo "Totaal: €" . number_format($totaal_prijs, 2, ',') . "<br>";

        }
    }

    function diwodo($bezorgen, $totaal_prijs)
    {
        if ($bezorgen == 'bezorgen') {

            echo "Bezorgkosten: €5,00" . "<br>";
            echo "Subtotaal: €" . number_format($totaal_prijs, 2, ',') . "<br>";
            echo "Totaal: €" . number_format($totaal_prijs + 5, 2, ',') . "<br>";

        } elseif ($bezorgen == 'afhalen') {

            echo "Totaal: €" . number_format($totaal_prijs, 2, ',') . "<br>";

        }
    }

    if ($dag == 'Monday') {
        $totaal_prijs = ($pizza1 + $pizza2 + $pizza3 + $pizza4 + $pizza5) * 7.50;
        bezorgkostenmaandag($x, $bezorgen, $pizza1, $pizza2, $pizza3, $pizza4, $pizza5);

    } else {
        $totaal_prijs += $pizza1 * 12.50;
        $totaal_prijs += $pizza2 * 12.50;
        $totaal_prijs += $pizza3 * 13.95;
        $totaal_prijs += $pizza4 * 11.50;
        $totaal_prijs += $pizza5 * 14.50;

        if ($dag == 'Friday' && $totaal_prijs > 20) {
            $korting = $totaal_prijs * 0.15;
            $totaal_prijs = $totaal_prijs - $korting;
            vrijdag($bezorgen, $totaal_prijs, $korting);


        }
    }
    if ($dag == 'Tuesday' || 'Wednesday' || 'Thursday') {
        diwodo($bezorgen, $totaal_prijs);
    }






}


?>