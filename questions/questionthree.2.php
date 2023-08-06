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

        <form action="questionthree.3.php" method="post">

            <p class="question">Question 2 - Quanto é 2 + 2?</p>

            <?php
            $firstvalue = $_GET['value1'];
            ?>

            <ul>
                <?= "<p><span>A)</span> <a href=\"questionthree.3.php?value1={$firstvalue}&value2=1\" class=\"correctanswer\">4</a></p>" ?>
                <?= "<p><span>B)</span> <a href=\"questionthree.3.php?value1={$firstvalue}&value2=2\">8</a></p>" ?>
                <?= "<p><span>C)</span> <a href=\"questionthree.3.php?value1={$firstvalue}&value2=3\">1</a></p>" ?>
                <?= "<p><span>D)</span> <a href=\"questionthree.3.php?value1={$firstvalue}&value2=4\">2</a></p>" ?>
                <?= "<p><span>E)</span> <a href=\"questionthree.3.php?value1={$firstvalue}&value2=5\">7</a></p>" ?>
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