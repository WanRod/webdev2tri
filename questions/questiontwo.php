<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Question 2</title>
</head>

<body>
    <header>
        <h2 class="header">Web Development</h2>
    </header>

    <main>
        <h2 class="main">Assignment: Question 2</h2>

        <table>
            <thead>
                <tr>
                    <th class="tablehead"></th>
                    <?php
                    for ($i = 46; $i < 121; $i++) {
                        echo "<th class=\"tablehead\">" . $i . "</th>";
                    }
                    ?>
                </tr>
            </thead>

            <tbody>
                <?php
                $a = 111;

                for ($i = 146; $i < 211; $i++) {
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';

                    for ($j = 46; $j < 121; $j++) {
                        $bmi = $j / ($i * $i) * 10000;

                        if ($bmi >= 0 && $bmi <= 16) {
                            echo "<td class=\"criticallygravelow\" title=\"Critically grave low&#10;$j kg&#10;$i cm&#10;BMI: " . number_format($bmi, 2) . "\">" . "</td>";
                        } else if ($bmi > 16 && $bmi <= 17) {
                            echo "<td class=\"gravelylow\" title=\"Gravely low&#10;$j kg&#10;$i cm&#10;BMI: " . number_format($bmi, 2) . "\">" . "</td>";
                        } else if ($bmi > 17 && $bmi <= 18.5) {
                            echo "<td class=\"low\" title=\"Low&#10;$j kg&#10;$i cm&#10;BMI: " . number_format($bmi, 2) . "\">" . "</td>";
                        } else if ($bmi > 18.5 && $bmi <= 25) {
                            echo "<td class=\"ideal\" title=\"Ideal&#10;$j kg&#10;$i cm&#10;BMI: " . number_format($bmi, 2) . "\">" . "</td>";
                        } else if ($bmi > 25 && $bmi <= 30) {
                            echo "<td class=\"overweight\" title=\"Overweight&#10;$j kg&#10;$i cm&#10;BMI: " . number_format($bmi, 2) . "\">" . "</td>";
                        } else if ($bmi > 30 && $bmi <= 35) {
                            echo "<td class=\"obesityone\" title=\"Obesity one&#10;$j kg&#10;$i cm&#10;BMI: " . number_format($bmi, 2) . "\">" . "</td>";
                        } else if ($bmi > 35 && $bmi <= 40) {
                            echo "<td class=\"obesitytwo\" title=\"Obesity two&#10;$j kg&#10;$i cm&#10;BMI: " . number_format($bmi, 2) . "\">" . "</td>";
                        } else if ($bmi > 40) {
                            echo "<td class=\"obesitythree\" title=\"Obesity three&#10;$j kg&#10;$i cm&#10;BMI: " . number_format($bmi, 2) . "\">" . "</td>";
                        }
                    }
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>

        <a href="../index.php">Home page</a>

    </main>

    <footer>
        <p class="footer"> Mariana e Wanderson - &copy; 2023</p>
    </footer>
</body>

</html>