<?php

/**
 * Master Header Component
 *
 * @global string|null $pageTitle       Optional. The meta title for the specific page.
 * @global string|null $pageDescription Optional. The meta description for the specific page.
 */

// Fallbacks for SEO metadata if not provided by the parent page
$title       = $pageTitle ?? "Acron Group of Hotels | Premier Boutique Resorts in Goa";
$description = $pageDescription ?? "Experience luxury at Acron Group of Hotels. Boutique beach resorts in North Goa, ideal for families and couples, located just minutes from the coast.";
?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($description) ?>">
    <meta name="author" content="Acron Group of Hotels">
    <meta name="copyright" content="Acron Hospitality Pvt. Ltd.">
    <meta name="theme-color" content="#ffd803">
    <meta name="apple-mobile-web-app-status-bar-style" content="yellow">
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="v2/css/style.css">
    <style>
        body {
            opacity: 0;
            animation: pageEntry 0.4s ease-out forwards;
        }

        @keyframes pageEntry {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4RE4RL53T8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-4RE4RL53T8');
        gtag('config', 'AW-852966872');
    </script>
</head>

<body>
    <a href="#mainContent" class="visually-hidden-focusable position-absolute top-0 start-0 p-3 bg-white z-3" style="border-radius: 0 0 8px 0;">
        Skip to main content
    </a>
    <?php include("v2/components/navbar.php"); ?>