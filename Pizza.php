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
    <for method="POST">

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
            <select>
            <option value=""disabled selected hidden>Maak uw Keuze</option>
            <option value="bezorgen">Bezorgen</option>
            <option value="afhalen">Afhalen</option>

            </select>
        <p>
            <input class="datum" type="date" value="2022-11-02"/>
            <input type="time" id="appt" name="appt"
                min="17:00" max="24  :00" required>    
            <button class="btn">Bestel</button>
            </p>
        <td>
        <div class="pizzamenu">
        <h3 class="pizzeria">Pizza Menu</h3>
        <p>
            <label class="pizza">Pizza Margherita €12,50:</label>
            <input type="text" name="naam" class="textarea" required>
            </p>
        <p>
        <label class="pizza">Pizza Funghi €12,50:</label>
            <input type="text" name="naam" class="textarea" required>
            </p>
        <p>
        <label class="pizza">Pizza Marina €13,95:</label>
            <input type="text" name="naam" class="textarea" required>
            </p>
        <p>
        <label class="pizza">Pizza Hawai €11,50:</label>
            <input type="text" name="naam" class="textarea" required>
            </p>
        <p>
            <label class="pizza">Pizza Quattro Formaggi €14,50:</label>
            <input class=pizzat type="text" name="naam" class="textarea" required>
            </p>
            </td>
        </div>
    </table>
</form>

</body>
</html> 

