

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <title>Document</title>
</head>
<body>
    
<div class="main">
 <form method="post" action="page.php">
    <div class="tes1">
        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div class="tes1">
        <label for="">prenom</label><br>
        <input type="text" id="prenom" name="prenom" required>
    </div>
    <div class="tes1">
        <label for="">Date de naissance</label><br>
        <input type="input" id="date" name="date" required>
    </div>
    <div class="tes1">
        <label for="">Sex</label><br>
        <select id="sex" name="sex" required>
            <option value="M">M</option>
            <option value="F">F</option>
          </select>
    </div>
    <div class="tes1">
        <label for="">Matricule</label><br>
        <input type="text" id="matricule" name="matricule" required>
    </div>
    <div class="tes1">
        <label for="">filiere</label><br>
        <input type="text" id="filiere" name="filiere" required>
    </div>
    <div class="tes1">
        <label for="">Departement</label><br>
        <select id="cars" name="cars">
            <option value="volvo">ICT4D</option>
            <option value="saab">MATHEMATIQUE</option>
            <option value="fiat">BIOLOGY</option>
            <option value="audi">Chimie</option>
          </select>
    </div>
    
    <button type="submit"  value="Envoyer" >submit</button>
 </form>
</div>


</body>
</html>


