<?php
//Starts a new session or resumes the existing session.
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel=stylesheet href="styles/bodyshapes.css">
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
            <li><a href="bodyshapes.php" class="current-page">BODYSHAPES</a></li>
            <li><a href="trends.php">TRENDS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </nav>
    <div class="sign-in">
        <a href="login.php">
            <img src="images/user.png" alt="Sign in">
        </a>
    </div>
</header>


<div class="image">
    <img src="images/types.jpg" alt="girl_types">
</div>
<div class="buttons">
    <button id="triangleBtn" class="button-link">TRIANGLE</button>
    <button id="invertedTriangleBtn" class="button-link">INVERTED TRIANGLE</button>
    <button id="appleBtn" class="button-link">APPLE</button>
    <button id="rectangleBtn" class="button-link">RECTANGLE</button>
    <button id="hourglassBtn" class="button-link">HOURGLASS</button>
</div>


<section>

    <div class="nadpis_tr">
        <p  id="triangle">triangle.</p>
    </div>

    <div class="des_box_left">
        <div class="description_tr">
            <p>With this shape, your shoulders and bust are narrower than your hips. You probably have slim arms and a fairly defined waist.
                Your waist most likely slopes out to your hips.</p>
        </div>
        <div class="style_advice_tr">
            <p>👗 Stylists often recommend clothing that shows off the waistline.</p>
        </div>
        <div class="clothing_tr">
            <div class="top">
                <h3 class="top_white"> top </h3>
                <ul class="ul_white">
                    <li>Structured Jackets or Blazers</li>
                    <li>Boatneck Tops</li>
                    <li>Off-Shoulder Tops</li>
                    <li>Embellished or Detailed Tops</li>
                    <li>V-neck Tops</li>
                </ul>
            </div>
            <div class="bottom">
                <h3 class="bottom_white"> bottom </h3>
                <ul class="ul_white">
                    <li>A-Line Skirts</li>
                    <li>Bootcut or Flared Pants</li>
                    <li>Dark-colored Bottoms</li>
                    <li>High-Waisted Bottoms</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="img_triangle">
        <img src="images/IMG_1456.JPG" alt="Triangle">
    </div>

</section>
<section>

    <div class="nadpis_intr">
        <p id="inverted-triangle">inverted triangle.</p>
    </div>
    <div class="des_box_right">
        <div class="description_intr">
            <p>If your shoulders and bust are larger than your relatively narrow hips, <br>
                you have what’s known as an inverted triangle shape.</p>
        </div>
        <div class="style_advice_intr">
            <p>👗 Stylists may recommend tops that have some shaping around the waist and more open necklines,
                or clothing that shows off your legs.</p>
        </div>
        <div class="clothing_intr">
            <div class="top">
                <h3 class="top_white"> top </h3>
                <ul class="ul_white">
                    <li>V-neck or Deep V-neck Tops</li>
                    <li>Wrap Tops</li>
                    <li>Peplum Tops</li>
                    <li>Off-shoulder Tops</li>
                    <li>Flowy Tops</li>
                </ul>
            </div>
            <div class="bottom">
                <h3 class="bottom_white"> bottom </h3>
                <ul class="ul_white">
                    <li>Straight-leg </li>
                    <li>Bootcut Pants </li>
                    <li>A-line Skirts</li>
                    <li>Embellished Bottoms</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="img_intriangle">
        <img src="images/intrianglr.JPG" alt="In_Triangle">
    </div>

</section>
<section>

    <div class="nadpis_apple">
        <p id="apple">apple.</p>
    </div>
    <div class="des_box_left">
        <div class="description_ap">
            <p> If your bust is larger than the rest of your body, your hips are narrow, and your midsection is fuller,
                you have what’s usually called an apple body type.</p>
        </div>
        <div class="style_advice_ap">
            <p>👗 Stylists usually point people with this body
                type toward tops that flare at the top or that have vertical details.</p>
        </div>
        <div class="clothing_ap">
            <div class="top">
                <h3 class="top_black"> top </h3>
                <ul class="ul_black">
                    <li>Empire Waist Tops</li>
                    <li>Tunics</li>
                    <li>Flowy Blouses</li>
                    <li>V-neck or Deep V-neck Tops</li>
                    <li>Wrap Tops</li>
                </ul>
            </div>
            <div class="bottom">
                <h3 class="bottom_black"> bottom </h3>
                <ul class="ul_black">
                    <li>High-Waisted Pants or Jeans</li>
                    <li>A-line Skirts</li>
                    <li>Bootcut Pants</li>
                    <li>Straight-leg Pants</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="img_triangle">
        <img src="images/IMG_1456.JPG" alt="Triangle">
    </div>
    <div class="apple">
        <img src="images/apple.JPG" alt="Apple">
    </div>

</section>
<section>

    <div class="nadpis_rec">
        <p id="rectangle">rectangle.</p>
    </div>
    <div class="des_box_right">
        <div class="description_rec">
            <p>If your waist measurements are about the same as your hip or bust, and your shoulders and hips are about the same width,
                you have what’s called a “banana” or rectangle body type.</p>
        </div>
        <div class="style_advice_rec">
            <p>👗 Stylists will probably point you toward off-the-shoulder tops,
                tube dresses, and belted waists.</p>
        </div>
        <div class="clothing_rec">
            <div class="top">
                <h3 class="top_black"> top </h3>
                <ul class="ul_black">
                    <li>Peplum Tops</li>
                    <li>Ruffled Tops</li>
                    <li>Wrap Tops</li>
                    <li>Crop Tops</li>
                    <li>Boatneck Tops</li>
                </ul>
            </div>
            <div class="bottom">
                <h3 class="bottom_black"> bottom </h3>
                <ul class="ul_black">
                    <li>Straight-leg Pants</li>
                    <li>A-line Skirts</li>
                    <li>Textured Bottoms</li>
                    <li>Bootcut Pants</li>
                    <li>Printed Bottoms</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="rectangle">
        <img src="images/rectang.JPG" alt="rectangle">
    </div>

</section>
<section>

    <div class="nadpis_hg">
        <p id="hourglass">hourglass.</p>
    </div>
    <div class="des_box_left">
        <div class="description_hg">
            <p>If your hips and bust are nearly equal in size and you have a well-defined waist that’s narrower than both, you have an hourglass shape.
                Your legs and upper body are proportionate.</p>
        </div>
        <div class="style_advice_hg">
            <p>👗 Form-fitting or tailored clothing have traditionally been
                designed with this body type in mind.</p>
        </div>
        <div class="clothing_hg">
            <div class="top">
                <h3 class="top_white"> top </h3>
                <ul class="ul_white">
                    <li>Wrap Tops</li>
                    <li>Tailored Blouses</li>
                    <li>Fitted Blouses</li>
                    <li>Peplum Tops</li>
                    <li>Sweetheart Neckline Tops</li>
                    <li>Belted Tops</li>
                </ul>
            </div>
            <div class="bottom">
                <h3 class="bottom_white"> bottom </h3>
                <ul class="ul_white">
                    <li>High-Waisted Bottoms</li>
                    <li>Pencil Skirts</li>
                    <li>Bootcut Pants</li>
                    <li>Flared Pants</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="hourglass">
        <img src="images/hourglass.JPG" alt="hourglass">
    </div>

</section>



<script src="scripts/bodyshapes.js"></script>
</body>
</html>