<?php
// Start the session to store user data
session_start();
// Function to change the page number in the session
function changePageNumber($pageNumber) {
    $_SESSION['page_number'] = $pageNumber;
}
// Function to get page data based on the page number
function getPageData($pageNumber) {
    // Define data for each page
    $pagesData = [
        1 => [
            'title' => 'Air Con: Open-Work Materials.',
            'text' => 'Taking functionality beyond cargo pockets, designers created lots of looks that had a cooling effect by virtue of the fact that they were made using openwork materials. 
            These ranged from pom-pom embellished mesh at Bottega Veneta to a fine net at Proenza Schouler, 
            and from artful cut-outs at Valentino to a lattice of shells at Versace.',

        ],
        2 => [

            'title' => 'Edward Scissorhands: Slashes and Shreds.',
            'text' => 'Not all holes in clothes were related to ventilation. Spring found designers slashing (see Peter Do and Courregès)—in the manner of Lucio Fontana’s Concetto Spaziale artworks—or shredding it for a timely come undone vibe.'
        ],
        3 => [
            'title' => 'Under Cover: Aprons.',

            'text' => 'The utility and protection associated with workwear has made its way into the ready-to-wear. While cargo pockets continue to sprout like mushrooms, what felt newest were aprons of all varieties—butcher, bib, waiter, hostess—which showed up at Christian Dior, Hermès, and The Row, for starters. In addition to these pop-overs, be they functional or decorative, some designers borrowed the garment’s simple square neckline and applied it to easy summer outfits.'
        ],
        4 => [
            'title' => 'Wings of Desire: Feathery Touches.',

            'text' => 'Nineties nostalgia continues undiminished for spring 2024, and was present in garments and on moodboards. Baz Luhrmann’s Romeo + Juliet—angelic wings and medieval armor—seemed to be a cross-season reference. The message seems to be the same as that voiced by Real Life in 1983'
        ],
        5 => [
            'title' => 'In the Name of the…Roses.',

            'text' => 'The rose is the reigning monarch of flowers. As beautiful as it is commanding (those thorns are prickly indeed), this flower is as redolent with fragrance as it is symbolism. When Sarah Burton used it at McQueen the reference was to the Tudor rose, a sign of royalty. At Balmain, the nod was to Gertrude “A rose is a rose is a rose is a rose” Stein, a friend of Pierre Balmain (who was present at and wrote up the couturier’s debut for Vogue in 1945).'
        ]
    ];

    // Check if the page number exists in the defined data
    if (isset($pagesData[$pageNumber])) {
        return $pagesData[$pageNumber];
    } else {
        return null;
    }
}
// Check if the page number is submitted via POST
if (isset($_POST['pageNumber'])) {
    $newPageNumber = $_POST['pageNumber'];
    // Change the page number in the session
    changePageNumber($newPageNumber);
    // Get page data based on the new page number
    $pageData = getPageData($newPageNumber);
    // If page data is found, encode and echo it as JSON
    if ($pageData) {
        echo json_encode($pageData);
        exit;
    } else {
        // If page data is not found, return a 404 response
        http_response_code(404);
        exit('Data not found');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel=stylesheet href="styles/trends.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Dress Code</title>
</head>
<body>
<header>
    <nav class="navigation">
        <ul>
            <li><a href="main.php" >HOME</a></li>
            <li><a href="test.php" >FIND OUT<br>YOUR SHAPE</a></li>
            <li><a href="bodyshapes.php" >BODYSHAPES</a></li>
            <li><a href="trends.php" class="current-page">TRENDS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </nav>
    <div class="sign-in">
        <a href="login.php">
            <img src="images/user.png" alt="Sign in">
        </a>
    </div>
</header>
<div class="trend-content" id="contentContainer">
    <h1 id="pageTitle">.</h1>
    <p class="trend-text" id="pageText"></p>
</div>

<div class="urlnav">
    <!-- Navigation buttons for each page -->
    <a class="navbutton pageButton" data-page="1">1</a>
    <a class="navbutton pageButton" data-page="2">2</a>
    <a class="navbutton pageButton" data-page="3">3</a>
    <a class="navbutton pageButton" data-page="4">4</a>
    <a class="navbutton pageButton" data-page="5">5</a>
</div>

<script src="scripts/trends.js"></script>
</body>
</html>