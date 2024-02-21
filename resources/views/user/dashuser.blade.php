<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réclamations - RAK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            height: 50px;
            width: auto;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 60px); /* Réserve de l'espace pour le header */
        }
        .row {
            display: flex;
            justify-content: space-between;
            width: 80%;
        }
        .card {
            width: 30%;
            padding: 30px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            margin: 0 10px;
            background-color: #fff;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
        .red { background-color: #ff6347; }
        .green { background-color: #2ecc71; }
        .blue { background-color: #3498db; }
        a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s;
        }
        a:hover {
            color: #ccc;
        }
        .logout{
            font-size: medium;
        }
    </style>
</head>
<body>
    <div class="header">
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <a href="#" class="logout">Déconnexion</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="card red">
                <a href="reclamation.blade.php">Réclamer</a>
            </div>
            <div class="card green">
                <a href="suivreReclamation.blade.php">Suivre Réclamation</a>
            </div>
            <div class="card blue">
                <a href="historique.blade.php">Historique des Réclamations</a>
            </div>
        </div>
    </div>
</body>
</html>