<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>LÁSKY</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: flex-start; /* Start aligning items from the top */
            padding: 20px; /* Optional padding for content */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <div class='container-fluid'>
            <div class='ms-auto'>
                <a class='btn btn-primary' href='nova_stranka.php'>Přejít na stránku</a>
            </div>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav ms-auto'>
                    <li class='nav-item'>
                        <a class='nav-link active' href='myfav.php'>Úvod</a> <!-- Aktuální položka -->
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='galerie.php'>Galerie</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='kalendar.php'>Kalendář</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='odhlasitse.php'>Odhlásit se</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class='content'>
        <div class='container text-center' id='uvod'>
            <h1>Tahle je jenom pro vás</h1>
            <p>Budu tady nahrávat videa/fotky a tak dále.</p>
            <p>Když si budete chtít videjko/fotku stáhnout, stačí zmačknout ikonu download.</p>
        </div>
    </div>

    <footer class='bg-light text-center footer'>
        <h5>Tomáš Frenzel</h5>
        <p>Tento projekt slouží pouze jako moje portfolio.</p>
    </footer>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>
