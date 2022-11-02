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

<for method="POST">

<!-- tabel data -->
<table align="center" cellpadding="5">
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
           
</form>
</body>
</html>

