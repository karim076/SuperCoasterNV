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
            <form class="form-style-9">
                <ul>
                    <li>
                        <input type="text" name="field1" class="field-style field-split align-left" placeholder="Name" />
                        <input type="email" name="field2" class="field-style field-split align-right" placeholder="Email" />

                    </li>
                    <li>
                        <input type="text" name="field3" class="field-style field-split align-left" placeholder="Phone" />
                        <input type="url" name="field4" class="field-style field-split align-right" placeholder="Website" />
                    </li>
                    <li>
                        <input type="text" name="field3" class="field-style field-full align-none" placeholder="Subject" />
                    </li>
                    <li>
                        <textarea name="field5" class="field-style" placeholder="Message"></textarea>
                    </li>
                    <li>
                        <input type="submit" value="Send Message" />
                    </li>
                </ul>
            </form>
        </div>
    </main>
    <footer>
        <?php require_once 'layout/footer.php' ?>
    </footer>
</body>
</html>