<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/background.css">
    <?php require_once 'layout/head.php' ?>
</head>
<div class="background">
    <body>
        <?php require_once 'layout/header.php' ?>
        <main>
            <div class="center"><h1>Contact</h1></div>
            <form action="backend/contactController.php" method="POST" id="contact_form">
                <div class="name">
                    <label for="name"></label>
                    <input type="text" placeholder="Uw naam" name="name" id="name_input" required>
                </div>
                <div class="email">
                    <label for="email"></label>
                    <input type="email" placeholder="Uw email" name="email" id="email_input" required>
                </div>
                <div class="number">
                    <label for="name"></label>
                    <input type="text" placeholder="Uw nummer(Optioneel)" name="number" id="telephone_input">
                </div>
                <div class="message">
                    <label for="message"></label>
                    <textarea name="msg" placeholder="Wat wilt u vertellen" id="message_input" cols="30" rows="5" required></textarea>
                </div>
                <div class="submit">
                    <input type="submit" value="Verstuur bericht" id="form_button" />
                </div>
            </form><!-- // End form -->
            </div><!-- // End #container -->
        </main>
</div>
        <footer>
            <?php require_once 'layout/footer.php' ?>
        </footer>
    </body>
</html>