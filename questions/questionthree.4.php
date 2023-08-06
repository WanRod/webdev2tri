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

        <form action="questionthreeresult.php" method="post">

            <p class="question">Question 4 - Qual a data de nascimento de Joana D'arc?</p>

            <?php
            $firstvalue = $_GET['value1'];
            $secondvalue = $_GET['value2'];
            $thirdvalue= $_GET['value3'];
            ?>

            <ul>
                <?= "<p><span>A)</span> <a href=\"questionthreeresult.php?value1={$firstvalue}&value2={$secondvalue}&value3={$thirdvalue}&value4=1\" class=\"correctanswer\">1425</a></p>" ?>
                <?= "<p><span>B)</span> <a href=\"questionthreeresult.php?value1={$firstvalue}&value2={$secondvalue}&value3={$thirdvalue}&value4=2\">1340</a></p>" ?>
                <?= "<p><span>C)</span> <a href=\"questionthreeresult.php?value1={$firstvalue}&value2={$secondvalue}&value3={$thirdvalue}&value4=3\">1412</a></p>" ?>
                <?= "<p><span>D)</span> <a href=\"questionthreeresult.php?value1={$firstvalue}&value2={$secondvalue}&value3={$thirdvalue}&value4=4\">1413</a></p>" ?>
                <?= "<p><span>E)</span> <a href=\"questionthreeresult.php?value1={$firstvalue}&value2={$secondvalue}&value3={$thirdvalue}&value4=5\">1412</a></p>" ?>
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