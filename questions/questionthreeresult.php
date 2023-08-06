<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/36e17004f7.js" crossorigin="anonymous"></script>
    <title>Question 3</title>
</head>

<body>
    <header>
        <h2 class="header">Web Development</h2>
    </header>

    <main>
        <h2 class="main">Assignment: Question 3</h2>

        <?php
        $firstvalue = $_GET['value1'];
        $secondvalue = $_GET['value2'];
        $thirdvalue = $_GET['value3'];
        $fourthvalue = $_GET['value4'];

        $option1 = '';
        $option2 = '';
        $option3 = '';
        $option4 = '';

        switch ($firstvalue) {
            case '1':
                $option1 = 'A';
                break;

            case '2':
                $option1 = 'B';
                break;

            case '3':
                $option1 = 'C';
                break;

            case '4':
                $option1 = 'D';
                break;
            default:
                $option1 = 'E';
                break;
        }

        switch ($secondvalue) {
            case '1':
                $option2 = 'A';
                break;

            case '2':
                $option2 = 'B';
                break;

            case '3':
                $option2 = 'C';
                break;

            case '4':
                $option2 = 'D';
                break;
            default:
                $option2 = 'E';
                break;
        }

        switch ($thirdvalue) {
            case '1':
                $option3 = 'A';
                break;

            case '2':
                $option3 = 'B';
                break;

            case '3':
                $option3 = 'C';
                break;

            case '4':
                $option3 = 'D';
                break;
            default:
                $option3 = 'E';
                break;
        }

        switch ($fourthvalue) {
            case '1':
                $option4 = 'A';
                break;

            case '2':
                $option4 = 'B';
                break;

            case '3':
                $option4 = 'C';
                break;

            case '4':
                $option4 = 'D';
                break;
            default:
                $option4 = 'E';
                break;
        }

        $firstvalue = $firstvalue === '4' ? '<i class="fa-regular fa-circle-check"></i>' : '<i class="fa-regular fa-circle-xmark"></i>';
        $secondvalue = $secondvalue === '1' ? '<i class="fa-regular fa-circle-check"></i>' : '<i class="fa-regular fa-circle-xmark"></i>';
        $thirdvalue = $thirdvalue === '2' ? '<i class="fa-regular fa-circle-check"></i>' : '<i class="fa-regular fa-circle-xmark"></i>';
        $fourthvalue = $fourthvalue === '1' ? '<i class="fa-regular fa-circle-check"></i>' : '<i class="fa-regular fa-circle-xmark"></i>';
        ?>


        <?php
        echo "<p>1 - {$option1} {$firstvalue}</p>";
        echo "<p>2 - {$option2} {$secondvalue}</p>";
        echo "<p>3 - {$option3} {$thirdvalue}</p>";
        echo "<p>4 - {$option4} {$fourthvalue}</p>";
        ?>
        
        <a href="../index.php">Home page</a>

    </main>

    <footer>
        <p class="footer"> Mariana e Wanderson - &copy; 2023</p>

    </footer>
</body>

</html>