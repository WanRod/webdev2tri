<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/36e17004f7.js" crossorigin="anonymous"></script>
    <title>Question 1</title>
</head>

<body>
    <header>
        <h2 class="header">Web Development</h2>
    </header>

    <main>
        <h2 class="main">Assignment: Question 1</h2>

        <form id="form" action="questionone.php" method="GET">
            <fieldset>
                <legend>Criteria for result generation</legend>

                <?php
                if (isset($_GET['quantity'])) {
                    $quant = $_GET['quantity'];
                } else {
                    $quant = '1';
                }

                echo "<p>Number of elements <input type=\"number\" id=\"number\" name=\"quantity\" value=\"$quant\" min=\"1\" max=\"15\"> (1 to 15)</p>";

                $checked = ['', '', '', '', '', ''];
                if (isset($_GET['radiobutton'])) {
                    switch ($_GET['radiobutton']) {
                        case 'text':
                            $checked[0] = 'checked';
                            break;
                        case 'password':
                            $checked[1] = 'checked';
                            break;
                        case 'button':
                            $checked[2] = 'checked';
                            break;
                        case 'radio':
                            $checked[3] = 'checked';
                            break;
                        case 'checkbox':
                            $checked[4] = 'checked';
                            break;
                        case 'range':
                            $checked[5] = 'checked';
                            break;
                        default:
                            break;
                        }
                    }
                ?>

                <input type="radio" id="txt" name="radiobutton" value="text" <?= $checked[0] ?> onclick="document.getElementById('form').submit()"><label for="txt">Text</label><br>
                <input type="radio" id="psw" name="radiobutton" value="password" <?= $checked[1] ?> onclick="document.getElementById('form').submit()"><label for="psw">Password</label><br>
                <input type="radio" id="btn" name="radiobutton" value="button" <?= $checked[2] ?> onclick="document.getElementById('form').submit()"><label for="btn">Button</label><br>
                <input type="radio" id="rad" name="radiobutton" value="radio" <?= $checked[3] ?> onclick="document.getElementById('form').submit()"><label for="rad">Radio</label><br>
                <input type="radio" id="chx" name="radiobutton" value="check" <?= $checked[4] ?> onclick="document.getElementById('form').submit()"><label for="chx">Check box</label><br>
                <input type="radio" id="rng" name="radiobutton" value="range" <?= $checked[5] ?> onclick="document.getElementById('form').submit()"><label for="rng">Range</label>
            </fieldset>
        </form>

        <?php
        if (isset($_GET["quantity"]) && isset($_GET["radiobutton"])) {
            $quantity = (int)$_GET["quantity"];
            $inputType = $_GET["radiobutton"];

            if ($quantity > 0 && $quantity < 16) {
                for ($i = 1; $i <= $quantity; $i++) {
                    $id = $inputType . $i;
                    $name = $inputType . $i;

                    if ($inputType === 'text') {
                        echo "<input type=\"text\" id=\"$id\" name=\"$name\"><br>";
                    } elseif ($inputType === 'password') {
                        echo "<input type=\"password\" id=\"$id\" name=\"$name\"><br>";
                    } elseif ($inputType === 'button') {
                        echo "<button id=\"$id\" name=\"$name\">Button $i</button><br>";
                    } elseif ($inputType === 'radio') {
                        echo "<input type=\"radio\" id=\"$id\" name=\"result\" value=\"radio$i\">";
                        echo "<label for=\"$id\">Radio $i</label><br>";
                    } elseif ($inputType === 'check') {
                        echo "<input type=\"checkbox\" id=\"$id\" name=\"$name\" value=\"checkbox$i\">";
                        echo "<label for=\"$name\">Checkbox $i</label><br>";
                    } elseif ($inputType === 'range') {
                        echo "<input type=\"range\" id=\"$id\" name=\"$name\" min=\"0\" max=\"100\" value=\"range$i\"><br>";
                    }
                }

                for ($i = 1; $i <= $quantity; $i++) {
                    $id = $inputType . $i;
                    $name = $inputType . $i;

                    switch ($inputType) {
                        case 'text':
                        case 'password':
                            $element = '<input type="' . $inputType . '" id="' . $id . '" name="' . $name . '"><br>';
                            break;
                        case 'button':
                            $element = '<button id="' . $id . '" name="' . $name . '">Button ' . $i . '</button><br>';
                            break;
                        case 'radio':
                            $element = '<input type="radio" id="' . $id . '" name="result" value="radio' . $i . '">';
                            $element .= '<label for="' . $id . '">Radio ' . $i . '</label><br>';
                            break;
                        case 'check':
                            $element = '<input type="checkbox" id="' . $id . '" name="' . $name . '" value="checkbox' . $i . '">';
                            $element .= '<label for="' . $id . '">Checkbox ' . $i . '</label><br>';
                            break;
                        case 'range':
                            $element = '<input type="range" id="' . $id . '" name="' . $name . '" min="' . 0 . '" max="' . 100 . '" value="range' . $i . '"><br>';
                            break;
                    }

                    echo "<p>" . htmlspecialchars($element) . "</p>";
                }
            } else {
                echo "<p><i class=\"fa-solid fa-triangle-exclamation\"></i>Number must be a integer between 1 and 15.</p>";
            }
        }
        ?>

        <a href="../index.php">Home page</a>
    </main>

    <footer>
        <p class="footer"> Mariana e Wanderson - &copy; 2023</p>
    </footer>
</body>

</html>