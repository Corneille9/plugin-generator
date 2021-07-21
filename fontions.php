<?php
require_once("variables.php");

function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function treatInput($var)
{
    $var = trim($var);
    $var = stripslashes($var);
    return htmlspecialchars($var);
}

function addPackages($zip, $plugin_slut)
{
    updateVaribles($plugin_slut);
    global $packagesName;
    foreach ($packagesName as $value) {
        $zip->addEmptyDir($value);
        echo $value . "<br>";
    }
}

function addFileContent($zip)
{
    global $fileList;
    foreach ($fileList as $key => $value) {
        $zip->addFromString($key, $value);
        echo $key . "<br>";
    }
}

function downloadPlugin($zip_name)
{
    if (file_exists($zip_name)) {
        header('Content-type: application/zip');
        header('Content-Disposition: attachment; filename="' . $zip_name . '"');
        readfile($zip_name);
        unlink($zip_name);
    }
}

function writeFile($file)
{
    global $plugin_name, $plugin_slut, $plugin_uri, $author, $email, $author_uri;
    $replace = array($plugin_name, $plugin_slut, $plugin_uri, $author, $email, $author_uri);
    $search = array("!@PluginName@!", "!@PluginSlut@!", "!@PluginUri@!", "!@AuthorName@!", "!@!AuthorEmail@!", "!@AuthorUri@!");
    $fic = fopen($file, "r");
    $content = fread($fic, filesize($file));
    fclose($fic);
    return str_ireplace($search, $replace, $content);
}

function updateVaribles($plugin_slut)
{
    global $packagesName, $fileList;
    $plugin_slut = strtolower($plugin_slut);
    $packagesName = array(
        $plugin_slut,
        $plugin_slut . "\admin",
        $plugin_slut . "\admin\css",
        $plugin_slut . "\admin\js",
        $plugin_slut . "\admin\partials",

        $plugin_slut . "\includes",

        $plugin_slut . "\languages",

        $plugin_slut . "\public",
        $plugin_slut . "\public\css",
        $plugin_slut . "\public\js",
        $plugin_slut . "\public\partials",
    );

    $fileList = array(
        $plugin_slut . "\index.php" => writeFile("template/!@pluginslut@!/index.php"),
        $plugin_slut . "\LICENSE.txt" => writeFile("template/!@pluginslut@!/LICENSE.txt"),
        $plugin_slut . "\\$plugin_slut.php" => writeFile("template/!@pluginslut@!/!@pluginslut@!.php"),
        $plugin_slut . "\README.txt" => writeFile("template/!@pluginslut@!/README.txt"),
        $plugin_slut . "\uninstall.php" => writeFile("template/!@pluginslut@!/uninstall.php"),

        $packagesName[1] . "\class-$plugin_slut-admins.css" => writeFile("template/!@pluginslut@!/admin/class-!@pluginslut@!-admin.php"),
        $packagesName[1] . "\index.php" => writeFile("template/!@pluginslut@!/admin/index.php"),
        $packagesName[2] . "\\$plugin_slut-admin.css" => writeFile("template/!@pluginslut@!/admin/css/!@pluginslut@!-admin.css"),
        $packagesName[3] . "\\$plugin_slut-admin.js" => writeFile("template/!@pluginslut@!/admin/js/!@pluginslut@!-admin.js"),
        $packagesName[4] . "\\$plugin_slut-admin-display.php" => writeFile("template/!@pluginslut@!/admin/partials/!@pluginslut@!-admin-display.php"),

        $packagesName[5] . "\class-$plugin_slut.php" => writeFile("template/!@pluginslut@!/includes/class-!@pluginslut@!.php"),
        $packagesName[5] . "\class-$plugin_slut-activator.php" => writeFile("template/!@pluginslut@!/includes/class-!@pluginslut@!-activator.php"),
        $packagesName[5] . "\class-$plugin_slut-deactivator.php" => writeFile("template/!@pluginslut@!/includes/class-!@pluginslut@!-deactivator.php"),
        $packagesName[5] . "\class-$plugin_slut-i18n.php" => writeFile("template/!@pluginslut@!/includes/class-!@pluginslut@!-i18n.php"),
        $packagesName[5] . "\class-$plugin_slut-loader.php" => writeFile("template/!@pluginslut@!/includes/class-!@pluginslut@!-loader.php"),
        $packagesName[5] . "\index.php" => writeFile("template/!@pluginslut@!/includes/index.php"),

        $packagesName[6] . "\\$plugin_slut.pot" => writeFile("template/!@pluginslut@!/languages/!@pluginslut@!.pot"),

        $packagesName[7] . "\class-$plugin_slut-public.php" => writeFile("template/!@pluginslut@!/public/class-!@pluginslut@!-public.php"),
        $packagesName[7] . "\index.php" => writeFile("template/!@pluginslut@!/public/index.php"),
        $packagesName[8] . "\\$plugin_slut-public.css" => writeFile("template/!@pluginslut@!/public/css/!@pluginslut@!-public.css"),
        $packagesName[9] . "\\$plugin_slut-public.js" => writeFile("template/!@pluginslut@!/public/js/!@pluginslut@!-public.js"),
        $packagesName[10] . "\\$plugin_slut-public-display.php" => writeFile("template/!@pluginslut@!/public/class-!@pluginslut@!-public.php"),
    );
}