<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lorem Ipsum</title>
        <?php require_once 'layout/head.php' ?>
    </head>

    <body>
        <?php require_once 'layout/header.php' ?>

        <main>
            <div class="containers">
                <img src="img/3.jpg" alt="Snow">
                <section>
                <h1 data-text="Karretjes"></h1>
                </section>
            </div>
            <div class="center">
                <h1>Mesh image's</h1>
            </div>
            <!--slidshow  -->
            <div class="slideshow">
                <img class="mySlides" src="img/5.jpg">
                <img class="mySlides" src="img/4.jpg">
                <img class="mySlides" src="img/4.jpg">
            </div>
            <script>
                var slideIndex = 0;
                carousel();

                function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > x.length) {slideIndex = 1}
                x[slideIndex-1].style.display = "block";
                setTimeout(carousel, 2000); // Change image every 2 seconds
                }
            </script>
            <!-- <div class="textCon">
                <div class="wrapper">
                    <p>Wij hebben de fram van ons karretje zo klein mogelijk gemaakt zodat ons team het hele ontwerp van het karretje konden maken zonder dat ze teweinig ruimte hadden.</p>
                    <img src="img/4.jpg">                
                </div>
                <div class="wrapper">
                    <img src="img/5.jpg"> 
                    <p>Omdat onze karretjes ook gemaakt zijn uit de MagmaAlloy kunnen ze extra goed tegen de extra-G kracht, hierdoor kunnen onze karretjes nog sneller gaan dan andere parken</p>               
                </div>
            </div> -->
        
        </main>
        <footer>
            <?php require_once 'layout/footer.php' ?>
        </footer>
    </body>
</html>