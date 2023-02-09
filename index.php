<!DOCTYPE html>
<html lang="NL">

<head>
    <title>Pizza Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <h3 class="pizzeria">Larson's Pizzeria</h3>
    <p <div class="tabel1">
    <form action="pizza.php" method="POST">

        <!-- tabel data -->
        <table>
            <tr>
                <td>
                    <!-- gegevens -->
                    <h3 class="persoonlijk">Persoons gegevens</h3>
                    <p>
                        <label>Naam:</label>
                        <input type="text" name="naam" class="textarea" required>
                    </p>

                    <p>
                        <label>Adres:</label>
                        <input type="text" name="adres" class="textarea" required>
                    </p>
                    <p>
                        <label>Postcode:</label>
                        <input type="text" name="postcode" class="textarea" required>
                    </p>
                    <p>
                        <label>Plaats:</label>
                        <input type="text" name="plaats" class="textarea" required>
                    </p>

                    <label>Bezorgen of afhalen:
                        <select value="select" name="select" id="select" required>
                            <option value="" disabled selected hidden>Maak uw Keuze</option>
                            <option value="bezorgen" name="bezorgen">Bezorgen </option>
                            <option value="afhalen" name="afhalen">Afhalen</option>

                        </select>
                        <p>
                            <input type="date" name="datum" class="datum" value="<?php echo date("Y-m-d"); ?>">
                            <input type="time" id="appt" name="appt" min="17:00" max="24  :00" required>
                            <input type="submit" name="submit" value="Verzenden" />
                        </p>
                <td>
                    <div class="pizzamenu">
                        <h3 class="persoonlijk">Pizza Menu</h3>
                        <p>
                            <label class="pizza">Pizza Margherita €12,50:</label>
                            <input type="number" name="margherita" min="0" value="0" class="textarea">
                        </p>
                        <p>
                            <label class="pizza">Pizza Funghi €12,50:</label>
                            <input type="number" name="funghi" min="0" value="0" class="textarea">
                        </p>
                        <p>
                            <label class="pizza">Pizza Marina €13,95:</label>
                            <input type="number" name="marina" min="0" value="0" class="textarea">
                        </p>
                        <p>
                            <label class="pizza">Pizza Hawai €11,50:</label>
                            <input type="number" name="hawai" min="0" value="0" class="textarea">
                        </p>
                        <p>
                            <label class="pizza">Pizza Quattro Formaggi €14,50:</label>
                            <input type="number" name="quattroformaggi" min="0" value="0" class="textarea">
                        </p>
                </td>
                </div>
        </table>
    </form>

</body>

</html>