<!DOCTYPE html>
<html lang="en">
    <head>

<title>exercice2</title>
        <meta charset="utf-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="css/NosVoiture.css">

        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <script src="script.js" defer></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">


        <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">

</head>
<body>


    <header>
        <nav>
            <a href="">
                <div class="logo">
                    <div><img src="images/e.png" alt=""></div>
                </div>
            </a>
            <ul class="menu">
                <li><a href="/" class="nav-item">Home</a></li>
                <li><a href="/reservation" class="nav-item">Reservation</a></li>
                <li><a href="/NosVoiture" class="nav-item">Nos VoitureS</a></li>
                <li><a href="/contact" class="nav-item">Contact</a></li>
                <li><a href="/connexion" class="nav-item">Login/Sing up</a></li>
            </ul>
        </nav>
    </header>


    <div class="lightbox">
        <div class="wrapper">
            <header>
                <div class="photographer">
                    <i class="uil uil-camera"></i>
                    <span></span>
                </div>
                <div class="buttons">
                    <i class="uil uil-import"></i>
                    <i class="close-icon uil uil-times"></i>
                </div>
            </header>
            <div class="preview-img">
                <div class="img"><img src="" alt="preview-img"></div>
            </div>
        </div>
    </div>
    <section class="search">
        <img src="images/search-img.jpg" alt="search-img">
        <div class="content">
            <h1>Nos diverse voiture de location</h1>
            <p>Chercher et louer  les voiture que vous vouler</p>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search images">
            </div>
        </div>
    </section>
    {{--  <section class="gallery">
        <ul class="images"></ul>
        <button class="load-more">Load More</button>
    </section>  --}}



<section class="product_section">

            <div class="section_title">
                <span>

                </span>
                <h2>Nos Voitures</h2>
                <span>

                </span>
            </div>

            <div class="all_product">
            @foreach($voitures as $voiture)

                <div class="produit_item">
                    <img src="{{$voiture->image}}" class="produit_image" alt="produit5">
                    <figcaption>
                        <span class="produit_title">{{$voiture->nom}}</span>
                        <span class="produit_price">{{$voiture->prix_sans_chauffeur}}</span>
                    </figcaption>
                    <div class="shop_button_container"><a href="{{Route('creerVoiture.show',$voiture->id)}}" class="shop_button">Réserver</a></div>
                </div>
            @endforeach

            </div>
        </section>


        <div class="d-grid gap-1 col-2 mx-auto button_a">
            <a href="produit/produit.html" alt="button" class="btn bg-dark text-white"
            type="button">Voir Plus de Voitures </a>
        </div><br><br>

        @include('footer')

    </body>
    </html>
