<!DOCTYPE html>
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Teaching Presentation - Images</title>
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
                <h1 class="pageTitle">Images</h1>
                <section class="contentRightSection">
                    <img src="/media/images1.jpg" alt="Pictures" class="leftPic">
                    <div class="rightCol">
                    <h2>How to Choose the Right Image</h2>
                    <ul>
                        <li>Be sure that the images you choose fit with the theme, purpose, mood of your site and provides information that is relevant.</li>
                        <li>Making sure that your photos fit with the color palette and are recognizable adds to the flow and harmony of your website.</li>
                        <li>Gather images that you have taken or look into stock photos that you can use. Make sure to research the photos you are using to ensure that you are not infringing on anyone's copyright.</li>
                    </ul>
                    </div>
                </section>
                <section class="contentLeftSection">
                    <div class="leftCol">
                        <h2>How to Add Images in HTML</h2>
                    <ul>
                        <li>In HTML, images are defined using the img tag.</li>
                        <li>See below for an example of how an image is added within HTML code. Notice that a style attribute can be added to scale the image into a specific size. </li>
                    </ul>
                        
                        <p>The img element is an empty element (meaning it does not need a closing / tag) and must include the following:</p>
                        <ul>
                            <li>src – this is important because it tells the browser where to look to find the image. You will put a URL here or the location of the image file.</li>
                            <li>alt – this gives a description of the image incase someone is unable to view the image. </li>
                        </ul>
                        
                    </div>
                    
                    <img src="/media/images2.jpg" alt="Mountain View" class="rightPic">
                    <img src="/media/imageexample.PNG" alt="HTML Example" class="examplePictures">
                </section>
                <section class="contentRightSection">
                    <img src="/media/imageexample2.PNG" alt="Images in HTML" class="leftPic">
                    <div class="rightCol">
                        <h2>Where to put the img element</h2>
                    <ul>
                        <li>This example is found in “HTML&CSS design and build websites” by Jon Duckett pages 101-102.</li>
                        <li>You can see the difference that placement of the img element makes to the look and format of the web page.</li>
                    </ul>
                    </div>
                </section>
                <section class="parentOneCol">
                        <h2>Saving/Creating Images for Your Site</h2>
                    <ul>
                        <li>Save them in the right format.</li>
                        <li>Save them to be the right size (the size you want them to appear on your web site).</li>
                        <li>Use pixels to measure your images.</li>
                    </ul>
                </section>
                <section class="parentTwoCol">
                    
                    <div class="sectionOneTwoCol">
                        <h2>JPG Format</h2>
                        <p>JPEG is ideal for photographs and images with a lot of different colors.</p>
                        <img src="/media/imagejpg.jpg" alt="JPG Image">
                        <img src="/media/imagejpg2.jpg" alt="JPG Image">
                    </div>
                    <div class="sectionTwoTwoCol">
                        <h2>PNG and GIF Formats</h2>
                        <p>GIF and PNG should be used when you are saving images that have fewer colors.</p>
                        <img src="/media/imagepng.png" alt="PNG Image">
                        <img src="/media/imagepng2.jpg" alt="PNG Image">
                    </div>
                </section>
                <section class="parentOneCol">
                        <h2>Final Suggestions</h2>
                    <ul>
                        <li>When adding images into your web site be sure that they are relevant and that they look professional. If you zoom into a picture to much, or crop it poorly the result could look blurry, blocky or loose its original purpose. </li>
                        <li>Plan what images will be used and follow the guidelines to save and add the images to your web site.</li>
                        <li>Practice adding images and play around with different options until it fits and looks how you wanted it to look. If you have further questions about images in HTML look at the resources listed on the next page.</li>
                    </ul>
                </section>
                <section class="parentOneCol">
                        <h2>Additional Resources</h2>
                    <ul>
                        <li>“HTML&CSS design and build websites” by Jon Duckett</li>
                        <a href="http://www.htmlandcssbook.com/" target="_blank"><li>www.htmlandcssbook.com</li></a>
                        <a href="http://www.w3schools.com/tags/tag_img.asp" target="_blank"><li>www.w3schools.com</li></a>
                        <a href="http://www.w3schools.com/html/html_images.asp" target="_blank"><li>www.w3schools.com</li></a>
                        <a href="http://www.htmlgoodies.com/primers/html/article.php/3478181" target="_blank"><li>www.htmlgoodies.com</li></a>
                        <a href="http://www.simplehtmlguide.com/images.php" target="_blank"><li>www.simplehtmlguide.com</li></a>
                    </ul>
                </section>
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
