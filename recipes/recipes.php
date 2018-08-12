<!DOCTYPE html>
<!--
My Site Home Page
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Recipes | TeachMeHowToVeggie.me</title>
    </head>
    <body id="home">
        <div>
            <header id="page_header"> 
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?> 
            </header> 
            <nav id="page-nav">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav.php'; ?> 
            </nav>
            <main>
                <h1 class="pageTitle">Recipes</h1>
                <article class="parentOneCol">
                    <img src="/media/vegetables.jpg" alt="Vegetables" width="500">
                    <h2>Recipes</h2>
                    <p>On the following pages you will find links to recipes, some being <a href="recipes/quickandeasy/quickandeasy.php">Quick and Easy</a> with others that are for people with a little more time on their hands, we'll call them <a href="recipes/intermediate/intermediate.php">Intermediate Recipes.</a> I found the recipes on Pinterest, I have tried most of them and love what I've tasted. I hope you enjoy this bundle of recipes. Hunt for more great recipes on my Pinterest Board: <a href="https://www.pinterest.com/trreyyalarryy/teach-me-how-to-veggie/">Teach Me How To Veggie.</a></p>
                </article>
                <article class="contentLeftSection">
                    <div class="leftCol">
                        <a href="/recipes/quickandeasy/quickandeasy.php"><h2>Quick and Easy Recipes</h2></a>
                    <p>Every recipe found here is simple and delicious, you and your family will love them! These recipes do not take a lot of time of effort but are a quick chance to turn your vegetables into a delicious dish. If you are a busy mom, someone on a time crunch, or are just lazy then these are the recipes for you. Take a dive into these <a href="/recipes/quickandeasy/quickandeasy.php">Quick and Easy Recipes</a> and enjoy the ride!</p>
                    </div>
                    <a href="/recipes/quickandeasy/quickandeasy.php"><img src="/media/cut.jpg" alt="Vegetables" class="rightPic"></a>
                </article>
                <article class="contentRightSection">
                    <a href="/recipes/intermediate/intermediate.php"><img src="/media/blue.jpg" alt="Vegetables" class="leftPic"></a>
                    <div class="rightCol">
                        <a href="/recipes/intermediate/intermediate.php"><h2>Intermediate Recipes</h2></a>
                    <p>Do you love to be in the kitchen? Do you have time to dedicate to a meal? If you answer yes to those questions then you will love these recipes. They are packed full of vegetables and are so good everyone will be wanting more. Enjoy the art of cooking as you try these recipes and make them your own. View the <a href="/recipes/intermediate/intermediate.php">Intermediate Recipes</a> to see your vegetables transform into perfect dishes.</p>
                    </div>
                </article>
                <article class="parentOneCol">
                    <h2>Favorite Recipe of the Month</h2>
                    <h3>Balsamic Roasted Carrots</h3>
                    <p>
                        <video width="640" height="360" controls="" preload="auto">
                        <source src="/media/carrots.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        </video><br>
                        <i>Original Recipe By Kim at <a href="http://www.cravingsofalunatic.com/2014/03/balsamic-roasted-baby-carrots.html">cravingsofalunatic.com</a></i>
                    </p>
                </article>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div> 
    </body>
</html>