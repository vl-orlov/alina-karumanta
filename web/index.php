<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title>alinakarumanta</title>
    <link rel="icon" type="image/png" href="img/icons/web_icon_black.png">
    <link rel="shortcut icon" type="image/png" href="img/icons/web_icon_black.png">
    <link rel="apple-touch-icon" href="img/icons/web_icon_black.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carattere&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="js/i18n.js"></script>
</head>
<body>

<?
$page = isset($_REQUEST['page']) ? htmlspecialchars($_REQUEST['page']) : '';

SWITCH ( $page ) {
    case 'landing':              include "includes/landing.php";                break;
    default:                     include "includes/landing.php";       break;
}
?>

</body>
</html>
