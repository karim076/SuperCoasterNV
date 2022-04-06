<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lorem Ipsum</title>
        <?php require_once 'layout/head.php' ?>
    </head>

    <body>
        <?php require_once 'layout/header.php' ?>

        <main>
            <div class="wrapper">
                <form action="">
                <div class="form-group">
                        <label for="fname">Voornaam:</label>
                        <input id="fname" name="fname" type="text">
                    </div>

                    <div class="form-group">
                        <label for="lname">Achternaam:</label>
                        <input id="lname" name="lname" type="text">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email" name="email" type="text">
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" cols="30" rows="2"></textarea>
                    </div>
                </form>
            </div>
        </main>
        <footer>
            <?php require_once 'layout/footer.php' ?>
        </footer>
    </body>
</html>