<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/reservation.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
        }
        .detail_{
            background: #333;
            width : 100%;
            height: 70vh;
            display: flex;
            flex-direction:row;
            justify-content: space-evenly;
            align-items: center;
            color: white;
        }
        .img-detail{
            /*width: 350px;
            height: 350px;*/
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center
        }
        .img-detail>img{
            
        }
    </style>
</head>
<body>
    @include('header')

    <div class="detail_">
        <div class="img-detail">
            <img src="{{$voitures->image}}" alt="">
        </div>
        <div style="width:25%">

        </div>
        <div>
            <div>
                <h3>prix de reservation sans chauffeur: <?php echo"$voitures->prix_sans_chauffeur"?> </h3>

                <p></p>

                <h3>prix de reservation avec chauffeur: <?php echo"$voitures->prix_avec_chauffeur" ?></h3>
            </div>
            <a href="">
                <button Type="button">je reserve</button>
            </a>
        </div>
    </div>
    @include('footer')
</body>
</html>
