<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden; /* Prevent scrolling */
        }
        .container-fluid {
            height: 50px; /* Height for navbar */
        }
        .content {
            height: calc(100% - 50px - 70px); /* Adjust for navbar and footer height */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .footer {
            height: 70px; /* Height for footer */
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <?php 
    echo "
    <nav class='navbar navbar-light bg-light'>
        <div class='container-fluid'>
            <a class='btn btn-primary ms-auto' href='nova_stranka.php'>Přejít na stránku</a>
        </div>
    </nav>

    <div class='content'>
        <form action='index.php' method='POST' class='text-center'>
            <h1 class='mb-4'>Zadejte prosím heslo:</h1>
            <input type='password' name='pass' id='pass' class='form-control mb-3' placeholder='Heslo' required>
            <input type='submit' value='Odeslat' class='btn btn-primary btn-lg'>
        </form>";

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $pass = $_POST['pass'];
            if ($pass == "2991979"){
                header("location: myfav.php");
                exit; // Make sure to exit after redirect
            } else {
                echo '<div class="alert alert-danger" role="alert">Zadali jste spatné heslo</div>';
            }        
        }

    echo "</div>";

    echo "
    <footer class='bg-light text-center footer'>
        <h5>Tomáš Frenzel</h5>
        <p>Tento projekt slouží pouze jako moje portfolio.</p>
    </footer>";
    ?>
    
</body>
</html>
