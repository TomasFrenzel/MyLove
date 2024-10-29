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
            background-color: #f8f9fa; /* Bílé pozadí */
        }
        nav {
            background-color: #6f42c1; /* Fialový navbar */
        }
        nav .navbar-brand, nav .nav-link {
            color: #ffffff;
        }
        nav .nav-link:hover {
            color: #d1d1d1;
        }
        h1, h2 {/* Zábavné písmo */
            color: #6f42c1; /* Fialová barva pro nadpisy */
        }
        .video-container, .photo-container {
            background-color: #fff; /* Bílé pozadí pro kontejnery */
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        .video-container:hover, .photo-container:hover {
            transform: scale(1.02); /* Mírné zvětšení při hover */
        }
        .btn-primary {
            background-color: #ff6f61; /* Růžové tlačítko */
            border: none;
        }
        .btn-primary:hover {
            background-color: #ff4d47; /* Tmavší růžová při hover */
        }
        .photo-img {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .photo-img:hover {
            transform: scale(1.05);
        }
        .upload-section {
            margin-top: 40px;
            padding: 20px;
            background-color: #6f42c1; /* Fialové pozadí pro sekci nahrávání */
            color: white; /* Bílý text v sekci nahrávání */
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark sticky-top'>
        <div class='container-fluid'>
            <div class='d-flex ms-auto'>
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
        <div class='container my-4'>
            <header id='uvod'>
                <h1>Galerie</h1>
                <p>Zde se můžete kouknout na videa a zazpomínat.</p>
            </header>

            <!-- Sekce pro videa -->
            <section id='videosekce'>
                <h2>Videa</h2>
                <div class="video-container">
                    <video width="100%" controls>
                        <source src="/videos/prahaKoncert.MP4" type="video/mp4">
                        Váš prohlížeč nepodporuje video tag.
                    </video>
                    <div class="mt-3 text-center">
                        <a href="/videos/terkaSpinkaRobison.MP4" download class="btn btn-primary">
                            <i class="fi fi-bs-download"></i> Stáhnout Video
                        </a>
                    </div>
                    <video width="100%" controls>
                        <source src="/videos/pitiRobinson.MP4" type="video/mp4">
                        Váš prohlížeč nepodporuje video tag.
                    </video>
                </div>

                <!-- Další videa zde... -->
            </section>

            <!-- Sekce pro fotografie -->
            <section id='fotosekce'>
                <h2>Fotografie</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img src="/images/photo1.jpg" alt="Fotografie 1" class="photo-img">
                    </div>
                    <div class="col-md-4">
                        <img src="/images/photo2.jpg" alt="Fotografie 2" class="photo-img">
                    </div>
                    <div class="col-md-4">
                        <img src="/images/photo3.jpg" alt="Fotografie 3" class="photo-img">
                    </div>
                    <!-- Další fotografie zde... -->
                </div>
            </section>

            <!-- Sekce pro nahrávání -->
            <section id='upload' class='upload-section'>
                <h2>Nahrát nové video nebo fotografii</h2>
                <form action='upload.php' method='POST' enctype='multipart/form-data'>
                    <div class='mb-3'>
                        <label for='fileInput' class='form-label'>Vyberte soubor:</label>
                        <input class='form-control' type='file' name='file' id='fileInput' required>
                    </div>
                    <div class='mb-3'>
                        <label for='descriptionInput' class='form-label'>Popis:</label>
                        <input class='form-control' type='text' name='description' id='descriptionInput' required>
                    </div>
                    <button type='submit' class='btn btn-primary'>Nahrát</button>
                </form>
            </section>
        </div>
    </div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>
