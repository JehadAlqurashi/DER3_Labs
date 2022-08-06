<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1256cd022a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("/css/dashboard.css")}}">
</head>
<body>
<header>
    <a href="#" class="logo">
        <img src="img/AppKD.svg" alt="">
    </a>
    <title>Dashboard</title>
    <nav class="navbar">
        <div class="search-box">

        </div>
    </nav>
    <div class="icons">
        <a  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</header>
<div class="sidebar">
    <ul class="nav-links">
        <li>
            <div id="aCHIFFRAGE" class="">
                <i class="fa-solid fa-user"></i>
                <a href="{{route("dashboard.users")}}"> <span class="links_name">Users</span></a>
            </div>
        </li>
        <li>
            <div id="aPLANNING" class="">
                <i class="fa-solid fa-skull-crossbones"></i>
                <a href="{{route("dashboard.challenge")}}"> <span class="links_name">Challenges</span></a>
            </div>
        </li>

    </ul>
</div>

<section class="home-section" id="HOME">
    <div class="home-content" id="dashboard" class="tabcontent">
        @yield("content")
    </div>
</section>

<section class="home-section" id="CHIFFRAGE">
    <div class="home-content" id="dashboard" class="tabcontent">

        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="cont-maTable">
                    <p>SECTION CHIFFRAGE <br> SECTION CHIFFRAGE</p>
                </div>
            </div>
            <div class="top-sales box" style="background:green;">
            </div>
</section>

<section class="home-section" id="PLANNING">
    <div class="home-content" id="dashboard" class="tabcontent">

        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="cont-maTable">
                    <p>SECTION PLANNING <br> SECTION PLANNING</p>
                </div>
            </div>
            <div class="top-sales box" style="background:blue;">
            </div>
</section>
<section class="home-section" id="INDICATEURS">
    <div class="home-content" id="dashboard" class="tabcontent">

        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="cont-maTable">
                    <p>SECTION INDICATEURS <br> SECTION INDICATEURS</p>
                </div>
            </div>
            <div class="top-sales box" style="background:black;">
            </div>
</section>

<section class="home-section" id="FACTURATION">
    <div class="home-content" id="dashboard" class="tabcontent">

        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="cont-maTable">
                    <p>SECTION FACTURATION <br> SECTION FACTURATION</p>
                </div>
            </div>
            <div class="top-sales box" style="background:yellow;">
            </div>
</section>

<section class="home-section" id="DATABASE">
    <div class="home-content" id="dashboard" class="tabcontent">

        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="cont-maTable">
                    <p>SECTION BDD <br> SECTION BDD</p>
                </div>
            </div>
            <div class="top-sales box">
            </div>
</section>

</body>
</html>
