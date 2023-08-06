<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Question 3</title>
</head>

<body>
    <header>
        <h2 class="header">Web Development</h2>
    </header>

    <main>
        <h2 class="main">Assignment: Question 3</h2>

        <form action="questionthree.4.php" method="post">

            <p class="question">Question 3 - Qual é o maior planeta do Sistema Solar?</p>

            <?php
            $firstvalue = $_GET['value1'];
            $secondvalue = $_GET['value2'];
            ?>

            <ul>
                <?= "<p><span>A)</span> <a href=\"questionthree.4.php?value1={$firstvalue}&value2={$secondvalue}&value3=1\">Plutão</a></p>" ?>
                <?= "<p><span>B)</span> <a href=\"questionthree.4.php?value1={$firstvalue}&value2={$secondvalue}&value3=2\" class=\"correctanswer\">Júpiter</a></p>" ?>
                <?= "<p><span>C)</span> <a href=\"questionthree.4.php?value1={$firstvalue}&value2={$secondvalue}&value3=3\">Marte</a></p>" ?>
                <?= "<p><span>D)</span> <a href=\"questionthree.4.php?value1={$firstvalue}&value2={$secondvalue}&value3=4\">Terra</a></p>" ?>
                <?= "<p><span>E)</span> <a href=\"questionthree.4.php?value1={$firstvalue}&value2={$secondvalue}&value3=5\">Vênus</a></p>" ?>
            </ul>

        </form>

        <a href="questionthree.1.php">Cancel</a><br><br>
        <a href="../index.php">Home page</a>

    </main>

    <footer>
        <p class="footer"> Mariana e Wanderson - &copy; 2023</p>

    </footer>
</body>

</html>