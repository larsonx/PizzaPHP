<!DOCTYPE html>
<html lang="NL">
<head>
<title>Pizza Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <h3 class="pizzeria">Larson's Pizzeria</h3>
    <p 
    <div class= "tabel1">
    <form action="index.php" method="POST">

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
            <select required>
            <option value=""disabled selected hidden>Maak uw Keuze</option>
            <option value="bezorgen" name="bezorgen">Bezorgen </option>
            <option value="afhalen"  name="afhalen">Afhalen</option>

            </select>
        <p>
            <input class="datum" type="date" value="2022-11-02"/>
            <input type="time" id="appt" name="appt"
                min="17:00" max="24  :00" required>    
            <input type="submit" name="submit" value="Verzenden"/>
            </p>
        <td>
        <div class="pizzamenu">
        <h3 class="persoonlijk">Pizza Menu</h3>
        <p>
            <label class="pizza">Pizza Margherita €12,50:</label>
            <input type="number" name="aantal1" id="aantal1" min="0" value="0" class="textarea">
            </p>
        <p>
            <label class="pizza">Pizza Funghi €12,50:</label>
            <input type="number" name="aantal2" id="aantal2" min="0" value="0" class="textarea">
            </p>
        <p>
            <label class="pizza">Pizza Marina €13,95:</label>
            <input type="number" name="aantal3" id="aantal3" min="0" value="0" class="textarea">
            </p>
        <p>
        <label class="pizza">Pizza Hawai €11,50:</label>
            <input type="number" name="aantal4" id="aantal4" min="0" value="0" class="textarea">
            </p>
        <p>
            <label class="pizza">Pizza Quattro Formaggi €14,50:</label>
            <input type="number" name="aantal5" id="aantal5" min="0" value="0" class="textarea">
            </p>
            </td>
        </div>
    </table>
</form>

</body>
</html> 

