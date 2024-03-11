<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/contact.css')}}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    @include('header')
    <main>
        <div class="container">
            <div class="adress">
                <div class="adress-container">
                    <div class="Location">Location</div>
                    <div class="LOCATION">Cotonou,Benin</div>
                </div>
                <div class="line"> </div>
            </div>

            <div class="adress">
                <div class="adress-container">
                    <div class="Location">Email</div>
                    <div class="LOCATION">swiftDrive@gmail.com</div>
                </div>
                <div class="line"> </div>
            </div>

            <div class="adress">
                <div class="adress-container">
                    <div class="Location">Phone Number:</div>
                    <div class="LOCATION">+22964963250 & +22969212115</div>
                </div>
                <div class="line"> </div>
            </div>
        </div>

        <div class="container form-container ">
            <div class="suscribe">To suscribe to the newsletter,please fill this form</div>
            <div class="form">
                <div class="form1">
                    <div>
                        <label for="name">Your First-name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div>
                        <label for="number">Your Number</label>
                        <input type="text" id="number" name="number" required>
                    </div>
                    <div>
                        <label for="email">Your email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div>
                        <label for="message">Message :</label>
                        <textarea type="text" id="message" name="message" required></textarea><br>
                    </div>


                </div>
                <button>send message</button>
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
