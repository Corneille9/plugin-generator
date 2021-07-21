<?php
require_once("fontions.php");
if (isset($_POST['generate'])) {
    $plugin_name = treatInput($_POST['plugin_name']);
    $plugin_slut = treatInput($_POST["plugin_slut"]);
    $plugin_uri = treatInput($_POST["plugin_uri"]);
    $author = treatInput($_POST["author"]);
    $email = treatInput($_POST["email"]);
    $author_uri = treatInput($_POST["author_uri"]);

    $table = array(
        "le nom du plugin" => $plugin_name,
        "le plugin slut" => $plugin_slut,
        "l'uri du plugin" => $plugin_uri,
        "l'auteur" => $author,
        "l'email" => $email,
        "l'uri de l'auteur" => $author_uri
    );

    $isValid = true;
    foreach ($table as $key => $item) {
        if (empty($item)) {
            $error = "Veuillez renseigner " . $key;
            $isValid = false;
            break;
        }
        if ($key == "l'email" and !isEmail($item)) {
            $error = $key . " is invalid";
            $isValid = false;
            break;
        }
    }

    if ($isValid and extension_loaded('zip')) {
        $zip = new ZipArchive();
        $zip_name = $plugin_slut . ".zip";
        if ($zip->open($zip_name, ZIPARCHIVE::CREATE) === TRUE) {
            addPackages($zip, $plugin_slut);
            addFileContent($zip);
            $zip->close();
        }
        downloadPlugin($zip_name);
    }
}
require_once("view.php");