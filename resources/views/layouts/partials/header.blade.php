<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masakan Buka</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<div class="header">
        <img src="images/woman-cook.png" width="35" height="35">
        <h1>🍽 Cook With Me 🍽</h1>
        <h4>Mari belajar memesak menu buka puasa :)</h4>
</div>

<div class="menu">
        <label>Iftar Ramadhan Meal</label>
        <ul>
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/kategori">Kategori</a>
                <ul class="dropdown">
                    <li><a href="{{url('takjil')}}">Takjil</a></li>
                    <li><a href="{{url('minum')}}">Minuman</a></li>
                </ul>
            </li>
            <li><a href="/profil">Profil</a></li>
            <li><a href="#">Lainnya</a>
                <ul class="dropdown">
                    <li><a href="{{url('cal')}}">Calculator</a></li>
                    <li><a href="{{url('list')}}">List</a></li>
                    <li><a href="{{url('form')}}">Form</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--Akhir Bagian Menu-->


    <div class="banner">
        <div class="search">
            <div class="search_box">
                <img src="images/search.png">
                <input type="text" class="input" placeholder="Search...">
            </div>

        </div>
    </div>
