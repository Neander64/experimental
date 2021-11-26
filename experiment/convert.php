<?php
$ok = 'false.';
$convTextIn = "";
$convTextOut = "";
echo implode(',', $_POST);
if (isset($_POST['submit'])) {
    if (!isset($_POST['convTextIn']) || $_POST['convTextIn'] === '') {
        $ok = 'false';
    } else {
        $ok = 'true';
        $convTextIn = $_POST['convTextIn'];
        echo $convTextIn;
        $convTextOut = htmlentities($convTextIn);
    };
}
?>

<html>

<head>
    <title>Textkonvertierung</title>
    <link rel="stylesheet" href="styles/site.css">
</head>

<body>
    <div class="container">

        <header>
            <img id="headshot" src='img/sh3.jpg' alt="SH" />
            <h1 id="siteName">Stephan Hesse</h1>
            <ul id="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">About</a></li>
                <li class="active"><a href="convert.php">Konvert</a></li>
            </ul>
        </header>
        <main>
            <form action="" method="POST">
                to be converted: <textarea id="convert" rows="10" name="convTextIn" value="convert"><?php echo htmlspecialchars($convTextIn, ENT_QUOTES); ?></textarea>
                <br>
                <input type="submit" name="submit" value="Konvert">
                <p>
                    <?php echo htmlspecialchars($convTextOut, ENT_QUOTES); ?>
                </p>

            </form>
        </main>
        <footer>
            &copy; 2021 Copyright SH
        </footer>
    </div>
</body>

</html>