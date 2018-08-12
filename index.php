<!DOCTYPE html>
<!--
My Site Home Page
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Home | TeachMeHowToVeggie.me</title>
    </head>
    <body id="home">
        <div id="content">
            <header id="page_header"> 
               <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?> 
            </header> 
            <nav id="page-nav">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav.php'; ?> 
            </nav>
            
            <main>
                <section>
                    <img src="/media/vegtomato.jpg" alt="Tomato" id="tompic">
                    <h2 id="maintomato">Bring the benefit <br> of veggies to your <br> dinner table.</h2>
                </section>
                
                <div class="parentThreeCol">
                    <article class="questions">
                        <h2 class="headThreeCol">WHY?</h2>
                        <div class="sectionThreeCol sectionOneThreeCol">
                        <h3>Why should I eat more vegetables?</h3>
                        <p> Vegetables have many health benefits. Explore the benefits and set goals to bring those benefits into your own life. Examples of the benefits include:                        </p>
                        <ul>
                            <li>Vegetables provide you with optimal nutrition that give you the needed vitamins when eaten daily.</li>
                            <li>Vegetables can help prevent or fight diseases.</li>
                            <li>Vegetables provide great fiber that we need daily.</li>
                        </ul>
                        <p><a href="/about/about.php">Read More</a> on how eating vegetables daily can benefit your life.</p>
                        </div>
                    </article>
                    <article class="questions">
                        <h2 class="headThreeCol headTwoThreeCol">WHAT?</h2>
                        <div class="sectionThreeCol sectionTwoThreeCol">
                        <h3>What vegetables should I eat?</h3>
                        <p> With all of the options it is helpful to have an idea of what vegetables will benefit you in what specific ways. Here are some examples:</p>
                        <ul>
                            <li>Spinach is low in fat and high in zinc, protein, fiber and vitamins A and K.</li>
                            
                            <li>Tomatoes are packed with vitamins that are especially good for your skin. They help maintain strong bones and are full of important antioxidants.</li>
                        </ul>
                        <p><a href="/veggies/veggies.php">Read More</a> on how specific vegetables bring specific benefits.</p>
                        </div>
                    </article>
                    <article class="questions">
                        <h2 class="headThreeCol headThreeThreeCol">HOW?</h2>
                        <div class="sectionThreeCol sectionThreeThreeCol">
                        <h3>How can I cook/prepare vegetables?</h3>
                        <p>Eaten raw or sauted vegetables can be prepared to make any mouth water. Get the most out of your vegetables by trying some of the collected recipes, some of them including:</p>
                        <ul>
                            <li>Kale Pesto Sauce</li>
                            <li>Spaghetti Squash</li>
                            <li>Stuffed Peppers</li>
                            <li>Spinach Stuffed Mushrooms</li>
                            <li>Garlic Parmesan Roasted Asparagus</li>
                        </ul>
                        <p>View <a href="/recipes/recipes.php">Recipes</a> for a complete list that you can try and make your own.</p>
                        </div>
                    </article>
                </div>
                <article class="contentLeftSection">
                    <div class="leftCol">
                        <h2>Guess the Vegetable</h2>
                    <p>Can you guess what vegetable is being cut? See if you know your vegetables. Good luck!</p>
                    </div>
                      <img src="/media/question.jpg" alt="Carrot" width="600" class="rightPic">
                    <br>
                    <audio controls preload="none"> 
                        <source src="/media/carrotcut.mp3">
                        <source src="/media/carrotcut.ogg">
                    <p>Your browser does not support HTML5 audio</p>
                    </audio>
                </article>
            </main>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div> 
    </body>
</html>