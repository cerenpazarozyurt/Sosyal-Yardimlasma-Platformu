<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yardımlaşma</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <script src="https://d3js.org/d3.v7.min.js"></script>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

</head>

<body>

<style>
    .navbar {
        background-color: #3B4A3C;
        display: flex;
        justify-content: center;
    }

    .nav-link {
        color: #FFFFFF;
        font-family: Poppins, sans-serif;
        font-size: 16px;
        font-weight: 600;
        margin: 0 20px;
        text-transform: uppercase;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #FF5C5C; /* Hover rengi */
        border-bottom: 1px solid #FF5C5C;
    }

    .icon {
        width: 60px;
        height: auto;
    }

    .nav-link-1.btn {
        background-color: #FF5C5C;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 25px;
        margin: 0 10px;
        transition: background-color 0.3s ease, color 0.3s;
    }

    .nav-link-1.btn:hover {
        background-color: #FFD700; /* Altın sarısı hover */
        color: #3B4A3C;
    }

    .navbar-toggler {
        border: 1px solid #fff;
    }

.dropdown-menu {
    background-color: #3B4A3C;
    border-radius: 10px;
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease-in-out, opacity 0.2s;
    transform: scale(0.95); /* Küçük başlat */
    opacity: 0; /* Başlangıçta görünmez */
    display: block !important;
    visibility: hidden;
}

.nav-item.dropdown:hover .dropdown-menu {
    transform: scale(1); /* Normal boyuta geç */
    opacity: 1;
    visibility: visible;
}

.dropdown-item {
    color: #BFBFBF;
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    padding: 10px 20px;
    transition: background-color 0.3s, color 0.3s, padding-left 0.3s;
    display: flex;
    align-items: center;
}

.dropdown-item:hover {
    background-color: #FF5C5C;
    color: #fff;
    padding-left: 30px; 
}

.dropdown-icon {
    margin-right: 10px;
    opacity: 0;
    transition: opacity 0.3s;
}

.dropdown-item:hover .dropdown-icon {
    opacity: 1;
}

</style>

    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="icon" src="{{ asset('assets//helping_17338269.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Anasayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/hakkimizda') }}">Hakkımızda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="activitiesDropdown" role="button" 
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Faaliyetler
                        </a>
                        <div class="dropdown-menu" aria-labelledby="activitiesDropdown">
                            <a class="dropdown-item" href="{{ url('/kanbagisi') }}">
                                <span class="dropdown-icon">➤</span> Kan Bağışı
                            </a>
                            <a class="dropdown-item" href="{{ url('/afetdestegi') }}">
                                <span class="dropdown-icon">➤</span> Afet Desteği
                            </a>
                            <a class="dropdown-item" href="{{ url('/gonullucalisma') }}">
                                <span class="dropdown-icon">➤</span> Gönüllü Çalışma
                            </a>
                        </div>
                    </li>
                    
                    
                    <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
                </ul>
            </div>
            <div class="d-flex">
                @if (Auth::user())
                <a class="nav-link-1 btn" href="{{ url('/acilkan') }}">Acil Kan İhtiyacı</a>
                <a class="nav-link-1 btn" href="{{ url('/logout') }}">Çıkış</a>
                @else
                <a class="nav-link-1 btn" href="{{ url('/login') }}">Giriş Yap</a>
                <a class="nav-link-1 btn" href="{{ url('/register') }}">Kayıt Ol</a>
                @endif
            </div>
        </div>
    </nav>
