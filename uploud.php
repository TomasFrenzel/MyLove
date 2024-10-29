<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Definuj cílovou složku
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Zkontroluj, jestli je soubor skutečně video nebo obrázek
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            echo "Soubor je obrázek - " . $check["mime"] . ".";
        } else {
            echo "Soubor není obrázek.";
            $uploadOk = 0;
        }
    }

    // Povolit určité formáty
    if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "mp4") {
        echo "Omlouváme se, povoleny jsou pouze JPG, JPEG, PNG a MP4.";
        $uploadOk = 0;
    }

    // Zkontroluj, jestli $uploadOk není nastaven na 0, pokud je to špatně
    if ($uploadOk == 0) {
        echo "Omlouváme se, váš soubor nebyl nahrán.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "Soubor " . htmlspecialchars(basename($_FILES["file"]["name"])) . " byl nahrán.";
            // Můžete také uložit popis do databáze nebo souboru
        } else {
            echo "Omlouváme se, došlo k chybě při nahrávání vašeho souboru.";
        }
    }
}
?>
