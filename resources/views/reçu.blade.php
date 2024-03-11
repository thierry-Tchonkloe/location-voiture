<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
    <title>Reçu</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            /* 100% de la hauteur de l'écran */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        main {
            width: 50%;
            /* 50% de la largeur de l'écran */
            border: 3px solid rgb(204, 205, 208);
            padding: 30px;
        }

        .container {
            display: flex;
            justify-content: space-between;
        }

        .container1 {
            position: relative;
            width: 50%;
            /* 50% de la largeur de l'écran */
            /* border: 1px solid rgb(132, 16, 16); */
            border-radius: 10px;
            /* Ajout du border-radius */
            box-shadow: 0 8px 12px rgba(0, 14, 154, 0.3);
            /* Ajout de l'ombre */
            padding: 10px;
            margin-bottom: 10px;
            transition: transform 0.3s ease;
        }

        .container1:hover {
            transform: translateY(-5px);

        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border-bottom: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .btn-outline-primary {
            display: block;
            margin: 0 auto;
        }

        main>div:first-child {
            font-size: 2.5em;
            /* taille du texte en em */
            font-weight: bold;
            /* texte en gras */
            color: blue;
        }

        hr {
            color: blue;
            border-width: 5px;
            height: 20px;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <div>Reçu</div>
            <div>Logo</div>
        </div>
        <hr>
        <div class="container">
            <div>
                <div>SwiftDrive</div>
                <p>Adresse</p>
            </div>

            <div>
                <div>Nom Prénom</div>
                <p>Adresse</p>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="container1">
                <div class="container">
                    <p>Date de la facture</p>
                    <p>29 mai 2002</p>
                </div>
                <div class="container">
                    <p>Numéro de la facture</p>
                    <p>29 mai 2002</p>
                </div>
                <div class="container">
                    <p>Numéro de client</p>
                    <p>29 mai 2002</p>
                </div>
                <div class="container">
                    <p>Contact client</p>
                    <p>29 mai 2002</p>
                </div>
            </div>


            <div class="container1">
                <div class="container">
                    <p>Type de voiture</p>
                    <p>Decapote</p>
                </div>
                <div class="container">
                    <p>Avec chaufeur</p>
                    <p>oui</p>
                </div>
                <div class="container">
                    <p>Nombre de places</p>
                    <p>8</p>
                </div>
                <div class="container">
                    <p>Date</p>
                    <p>Du 29/05/02 au 20/58/20</p>
                </div>
            </div>
        </div>
        <br>
        <div>
            <p>Informations additionnelles</p>
            <p>Merci d'avoir choisi Mon Entreprise pour vos services</p>
            <p>Service après-vente-Garantie : 1an</p>
        </div>
        <hr>

        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Prix de réservation(/h)</th>
                    <th>Nombre d'heure </th>
                    <th>%TVA</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Decapote</td>
                    <td>500f</td>
                    <td>3</td>
                    <td>500</td>
                    <td>1500</td>
                </tr>
                <tr>
                    <td>Decapote</td>
                    <td>500f</td>
                    <td>3</td>
                    <td>500</td>
                    <td>1500</td>
                </tr>

            </tbody>
        </table>
        <br>
        <button type="button" class="btn btn-outline-primary">Valider la réservation</button>
    </main>
</body>

</html>
