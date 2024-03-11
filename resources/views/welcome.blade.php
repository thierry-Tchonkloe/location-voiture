<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/accueil.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@3.0.0/dist/aos.css" />
    <script src="https://cdn.jsdelivr.net/npm/aos@3.0.0/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@3.0.0/dist/aos.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    @include('header')

    <main>

        <div class="container">
            <div data-aos="zoom-in">
                <div class="container1">
                    <div>

                        <div class="line line1"></div>
                        <div id="name">
                            <div>Swift</div>
                            <div>Drive</div>
                        </div>
                        <div class="line line2"></div>

                    </div>

                    <div id="importance">Explorez le Monde en Toute Liberté avec Nos Voitures de Location</div>
                    <div class="description">
                        Bienvenue chez SwiftDrive, où la liberté de conduire rencontre la simplicité de la réservation. Avec SwiftDrive, votre voyage devient une expérience sans effort, offrant la flexibilité dont vous avez besoin. Que ce soit pour une courte escapade en ville ou une aventure de plusieurs jours, notre processus de réservation simple vous permet de prendre le volant en un rien de temps.</div>
                    <div class="description">Nos voitures de qualité sont soigneusement entretenues, vous assurant une conduite sûre et agréable à chaque kilomètre. Embarquez pour l'aventure avec SwiftDrive - réservez dès aujourd'hui et découvrez comment la liberté de conduire peut être aussi simple que SwiftDrive.</div>
                </div>
            </div>
        </div>


        <center style="margin: 50px 0; padding: 6px 10px 6px 10px;">
            <a href="/NosVoiture">
                <div class="d-grid gap-2 col-2 mx-auto">
                    <button class="btn btn-primary bg-success" type="button">voire nos voiture</button>
                </div>
            </a>
        </center>

        <div class="container2">
            <div class="container2_1">Promotions</div>
            <div id="description1">
                Chaque offre que nous présentons chez SwiftDrive a une histoire captivante, et nous sommes enthousiastes à l idée de la partager avec vous. </div>
        </div>

        <div class="container3">
            <div id="image1"><img src="images/mp.jpeg"></div>
            <div class="textes">
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    Rejoignez-nous dans l'exploration de ces opportunités exceptionnelles. Ces offres spéciales sont bien plus qu une simple réduction - elles sont une invitation à vivre une aventure exceptionnelle avec SwiftDrive. Ne manquez pas l'occasion de rendre votre voyage encore plus extraordinaire. Explorez nos promotions dès maintenant et préparez-vous à embarquer pour une expérience inoubliable avec SwiftDrive. </div>
            </div>
        </div>

        <div class="container2 container2_2">
            <div class="container2_1">Livraison et Récupération Pratiques</div>
        </div>

        <div class="container3">
            <div class="textes">
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    Avec SwiftDrive, la location de voiture devient synonyme de simplicité et de flexibilité. Notre service de livraison et de récupération vous permet d obtenir votre voiture directement à l aéroport ou à votre hôtel, éliminant les tracas logistiques. Une fois votre voyage terminé, nous récupérons la voiture là où cela vous convient. Profitez d une expérience de location sans souci avec SwiftDrive et partez en toute liberté. </div>
            </div>
            <div id="image_2"></div>
        </div>

        <div class="container2 container2_2">
            <div class="container2_1">Assurance</div>
        </div>
        <div class="container3">
            <div class="textes">
                <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">

                    Proposez-vous une tranquillité d esprit totale avec nos options d assurance flexibles. Choisissez parmi différentes solutions pour une protection adaptée à vos besoins. Conduisez en toute confiance avec SwiftDrive.</div>
            </div>
            <div id="image_4"></div>
        </div>

        <center style="margin: 50px 0; padding: 6px 10px 6px 10px; witdh:100%;">
            <a href="/NosVoiture">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary bg-success" type="button" style="witdh:30%;">voire nos voiture</button>
                </div>
            </a>
        </center>


        <div class="container2 container2_2">
            <div class="container2_1">Our Localisation</div>
        </div>

        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=900&amp;height=600&amp;hl=en&amp;q=cotonou&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">FNF Download</a></div>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    width: 100%;
                    height: 600px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                    height: 600px;
                }

                .gmap_iframe {
                    height: 600px !important;
                }
            </style>
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

    <script src="https://cdn.jsdelivr.net/npm/aos@3.0.0/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init();
        });
    </script>
</body>

</html>
