<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Validation de Réservation</title>
    <style>
        body {
            top: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        main {
            width: 50%;
            border: 1px solid rgb(132, 16, 16);
            padding: 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .container1 {
            position: relative;
            width: 50%;

            border-radius: 10px;
            box-shadow: 0 8px 12px rgba(0, 14, 154, 0.3);
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
            margin-bottom: 10px;
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
            font-weight: bold;
            color: blue;
        }

        hr {
            color: blue;
            border-width: 5px;
            height: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .payment-button {
            display: block;
            margin: 10px auto;
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
                    <p>Avec chauffeur</p>
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

        <div>
            <p>Informations additionnelles</p>
            <p>Merci davoir choisi Mon Entreprise pour vos services</p>
            <p>Service après-vente-Garantie : 1 an</p>
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

        <!-- Formulaire de paiement -->
        <form>
            <label for="cardNumber">Numéro de carte de crédit :</label>
            <input type="text" id="cardNumber" name="cardNumber" required>

            <label for="expiryDate">Date d'expiration :</label>
            <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>

            <label for="cvv">CVV :</label>
            <input type="text" id="cvv" name="cvv" required>

            <button type="button" class="btn btn-outline-primary payment-button">Payer</button>
        </form>
    </main>
</body>

</html>
