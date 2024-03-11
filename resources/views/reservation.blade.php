<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/reservation.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    @include('header')

    <main>
        <div class="form-container">
            <div id="welcome">Bienvenue sur notre système de réservation de voitures</div>
            <div class="arrival-bedroom-container">
                <div class="arrival-departure-container">
                    <div>
                        <label for="arrival">Date de début de location</label><br>
                        <input type="date" id="arrival" name="arrival">
                    </div>
                    <div>
                        <label for="departure">Date de fin de location</label><br>
                        <input type="date" id="departure" name="departure">
                    </div>
                </div>
                <div id="hotel-offers">Informaion sur la voiture</div>

                <div class="arrival-departure-container">
                    <div>
                        <label for="Bedrooms">Type de voiture</label><br>
                        <select id="Bedrooms" name="Bedrooms">
                            @foreach($voitures as $voiture)
                            <option value="{{$voiture->type}}">{{$voiture->type}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="Adult">Avec chauffeur</label><br>
                        <select id="Adult" name="Adult">
                            <option value="oui">oui</option>
                            <option value="non">non</option>
                        </select>

                    </div>
                    <div>
                        <label for="Child">Nombre de place</label><br>
                        <select id="Child" name="Child">
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                        </select>

                    </div>
                </div>
            </div>
            <div class="servives-container">
                <div class="line "></div>
                <div id="name">
                    <div>Client</div>
                    <div>fidel?</div>
                </div>
                <div class="line line2"></div>
            </div>

            <div class="preferences-container">
                <div>
                    <label class="descriptions">Carte de fidélité ou d'abonnement</label>
                    <div class="Labels">
                        <label for="digit" class="desc-label">16 digit card number</label><br>
                        <input type="text" id="digit" name="digit">
                    </div>
                </div>
                <div>
                    <label class="descriptions">Code préférentiel</label>
                    <div>
                        <input type="text" id="digit" name="digit">
                    </div>
                </div>
                <div>
                    <label class="descriptions">Code d'accès</label>
                    <div class="Labels">
                        <label for="digit" class="desc-label">10 characters </label><br>
                        <input type="text" id="digit" name="digit">
                    </div>
                </div>
                <a href="/validation">
                    <div><button>Voir le prix</button></div>
                </a>

            </div>

        </div>

        <div class="image-container">
            <div class="Image-container">
                <div id="partener">Découvrez Nos Sites Captivants !</div>
                <div id="info">You can also consult them, for more information on them.</div>
                <div class="photos-description">
                    <div>
                        <div class="Images image1"></div>
                        <div class="blue-describe">SwiftDrive à Cotonou </div>
                        <div class="describe">Notre site est équipé de systèmes de surveillance avancés et d'une équipe de sécurité dédiée pour garantir une protection optimale.</div>
                    </div>
                    <div>
                        <div class="Images image2"></div>
                        <div class="blue-describe">SwiftDrive à Parakou </div>
                        <div class="describe"> Nos installations modernes sont conçues pour répondre aux normes les plus élevées, assurant un environnement idéal pour la préservation de nos véhicules.</div>
                    </div>
                    <div>
                        <div class="Images image3"></div>
                        <div class="blue-describe">SwiftDrive à Natitingou</div>
                        <div class="describe">Chacun de nos emplacements offre une sécurité maximale et des installations de pointe pour assurer le bien-être de nos véhicule.</div>
                    </div>
                    <div>
                        <div class="Images image4"></div>
                        <div class="blue-describe">SwiftDrive au Togo</div>
                        <div class="describe">Utilisez SwiftDrive même en dehors du Bénin.</div>
                    </div>
                    <div>
                        <div class="Images image5"></div>
                        <div class="blue-describe">SwiftDrive en Côte d'Ivoire</div>
                        <div class="describe">Nous vous emmenons très loin.</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="foot_item">copyright@2021 All right reserved</div>
        <ul class="foot_logo">
            <li><a href="" class="logos"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="" class="logos"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="" class="logos"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="" class="logos"><i class="fa-brands fa-linkedin"></i></a></li>
        </ul>
    </footer>
</body>

</html>
