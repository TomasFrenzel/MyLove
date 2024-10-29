<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Moje Portfolio</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
    <style>
        body {
            padding-top: 70px; /* Základní padding pro fixní navbar */
            background-color: #121212; /* Tmavší pozadí */
            color: #fff; /* Bílý text pro lepší kontrast */
        }
        h1, h2 {
            margin-top: 20px;
        }
        nav {
            background-color: #343a40; /* Tmavě šedý navbar */
        }
        nav .navbar-brand, nav .nav-link {
            color: #ffffff; /* Bílý text v navbaru */
        }
        nav .nav-link:hover {
            color: #d1d1d1; /* Světlejší barva při hover */
        }
        header {
            background-color: #6f42c1; /* Fialové pozadí */
            color: white;
            padding: 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin: 0 15px; /* Odsazení od krajů */
        }
        header:hover {
            background-color: #5a32a3; /* Tmavší fialová při hover */
        }
        section {
            margin: 20px; /* Odsazení pro sekce */
            padding: 15px;
            border-radius: 5px;
            background-color: #222; /* Tmavší pozadí pro sekce */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            transition: transform 0.2s ease, background-color 0.3s ease; /* Přidán efekt pro pozadí */
        }
        section:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.7);
            background-color: #333; /* Světlejší pozadí při hover */
        }
        .list-group-item {
            transition: background-color 0.3s ease;
        }
        .list-group-item:hover {
            background-color: #333; /* Tmavší pozadí pro hover u položek */
        }
        .btn-primary {
            background-color: #6f42c1; /* Fialové tlačítko */
            border: none; /* Bez rámečku */
        }
        .btn-primary:hover {
            background-color: #5a32a3; /* Tmavší fialová při hover */
        }
        .btn-secondary {
            background-color: #495057; /* Tmavě šedé tlačítko */
            border: none; /* Bez rámečku */
        }
        .btn-secondary:hover {
            background-color: #343a40; /* Světlejší šedá při hover */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class='navbar navbar-expand-lg fixed-top'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='#'>Moje Portfolio</a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav ms-auto'>
                    <li class='nav-item'>
                        <a class='nav-link' href='#uvod'>Úvod</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#projekty'>Projekty</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#dovednosti'>Dovednosti</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#o-mne'>O mně</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='#kontakt'>Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class='container'>
        <!-- Úvodní stránka -->
        <header id='uvod'>
            <h1>Ahoj, jsem Tomáš Frenzel</h1>
            <p>Jsem programátor specializující se na tvorbu moderních webových stranek s databázovým propojením. Mám vášeň pro vytváření efektivních a inovativních řešení.</p>
            <img src='[url_k_fotce]' alt='Moje foto' class='img-fluid rounded-circle' style='width: 150px;'>
        </header>

        <!-- Projekty -->
        <section id='projekty'>
            <h2>Projekty</h2>
            <ul class='list-group'>
                <li class='list-group-item'>
                    <h5>Bezpečne na internetu</h5>
                    <p>Stránku jsem vytvořil jako maturitní práci. Použité technologie: PHP, html/css, boodstrep, MySQL.</p>
                    <a href='[odkaz_na_demo]' class='btn btn-primary'>Zobrazit demo</a>
                    <a href='https://github.com/TomasFrenzel/obhajoba' class='btn btn-secondary'>Zobrazit na GitHubu</a>
                </li>
                <li class='list-group-item'>
                    <h5>Název projektu 2</h5>
                    <p>Krátký popis projektu 2. Použité technologie: [technologie].</p>
                    <a href='[odkaz_na_demo]' class='btn btn-primary'>Zobrazit demo</a>
                    <a href='[odkaz_na_github]' class='btn btn-secondary'>Zobrazit na GitHubu</a>
                </li>
                <li class='list-group-item'>
                    <h5>Nás 5</h5>
                    <p>Tato stránka je vytvořena jako společná galerie pro mé nejbližší. Použité technologie:  PHP, html/css, boodstrep.</p>
                    <a href='[odkaz_na_demo]' class='btn btn-primary'>Zobrazit demo</a>
                    <a href='https://github.com/TomasFrenzel/MyLove' class='btn btn-secondary'>Zobrazit na GitHubu</a>
                </li>
            </ul>
        </section>

        <!-- Dovednosti -->
        <section id='dovednosti'>
            <h2>Dovednosti</h2>
            <ul class='list-group'>
                <li class='list-group-item'>JavaScript</li>
                <li class='list-group-item'>HTML/CSS</li>
                <li class='list-group-item'>MySQL</li>
                <li class='list-group-item'>PHP</li>
                <li class='list-group-item'>C</li>
            </ul>
        </section>

        <!-- O mně -->
        <section id='o-mne'>
            <h2>O mně</h2>
            <p>Jsem Tomáš Frenzel, programátor s vášní pro technologie. Mám zkušenosti v oblasti tvroby webových stránek s databázemi MySQL, PHP, JavaScript. Pracuji taky rad na tvorbě programu v jazyce C.  Rád pracuji na projektech, které mě můžou posunout dál.</p>
        </section>

        <!-- Kontakt -->
        <section id='kontakt'>
            <h2>Kontakt</h2>
            <p>Můžeš mě kontaktovat na e-mailu: <a href='mailto:Tomasagel71@gmail.com' class='text-decoration-none text-primary'>Tomasagel71@gmail.com</a></p>
        </section>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>
