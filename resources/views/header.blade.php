<header>
        <nav>
            <a href="">
                <div class="logo">
                    <div><img src="{{asset('images/e.png')}}" alt=""></div>
                </div>
            </a>
            <ul class="menu">
                <li><a href="/" class="nav-item">Home</a></li>
                <li><a href="{{Route('reservation.create')}}" class="nav-item">Reservation</a></li>
                <li><a href="{{Route('voitures.listes')}}" class="nav-item">Nos Voitures</a></li>
                <li><a href="{{Route('contact.create')}}" class="nav-item">Contact</a></li>
                <li><a href="{{Route('client.connexion')}}" class="nav-item">Login/Sing up</a></li>
            </ul>
        </nav>
    </header>