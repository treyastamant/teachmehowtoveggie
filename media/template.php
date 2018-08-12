<!DOCTYPE html>
<!--
My Site Home Page
-->
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Template Page - Basic</title>
    </head>
    <body id="home">
        <div>
            <header id="page_header"> 
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?> 
                <h1>Template</h1>
            </header> 
            <nav>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav.php'; ?> 
            </nav>
            
            <main>
                <div>
                  <img src="media/kale.jpg" alt="Kale" width="500">

                </div>
            </main>
            <aside>
                <div>
                    
                </div>
            </aside>
            <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
            </footer>
        </div> 
    </body>
</html>