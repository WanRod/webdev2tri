<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Question 4</title>
</head>

<style>
    td {
        border-bottom: 0.5px solid;
    }
</style>

<body>
    <header>
        <h2 class="header">Web Development</h2>
    </header>

    <main>
        <h2 class="main">Assignment: Question 1</h2>

        <?php
        $initialcontribution = 500;
        $period = 12;
        $monthlyincome = 0.7;
        $monthlycontribution = 350;

        if (isset($_GET['initialcontribution']) && isset($_GET['period']) && isset($_GET['monthlyincome']) && isset($_GET['monthlycontribution'])) {
            $initialcontribution = $_GET['initialcontribution'];
            $period = $_GET['period'];
            $monthlyincome = $_GET['monthlyincome'];
            $monthlycontribution = $_GET['monthlycontribution'];
        }
        ?>

        <form method="GET">
            <fieldset>
                <legend>Parameters</legend>
                <?= "<label>Initial contribution (R$): <input type=\"number\" name=\"initialcontribution\" value=\"{$initialcontribution}\" max=\"999999.99\"> [up to R$ 999.999,99]</label><br>" ?>
                <?= "<label>Period (Months): <input type=\"number\" name=\"period\" value=\"{$period}\" min=\"1\" max=\"480\"> [1 to 480]</label><br>" ?>
                <?= "<label>Monthly income (%): <input type=\"number\" name=\"monthlyincome\" value=\"{$monthlyincome}\" max=\"20\" step=\"0.1\"> [up to 20%]</label><br>" ?>
                <?= "<label>Monthly contribution: <input type=\"number\" name=\"monthlycontribution\" value=\"{$monthlycontribution}\" max=\"999999.99\"> [up to R$ 999.999,99]</label><br><br>" ?>

                <button>Process</button>
            </fieldset>
        </form>

        <table>
            <?php
            if (isset($_GET['initialcontribution'])) {
                echo '<thead style="background-color: lightgray;">
                    <tr>
                        <th>Month</th>
                        <th>Initial value (R$)</th>
                        <th>Contribution (R$)</th>
                        <th>Income (R$)</th>
                        <th>Total (R$)</th>
                    </tr>
                  </thead>';
                echo "<tbody>";

                $initial = $initialcontribution;
                $contribution = 0;

                for ($i = 1; $i <= $period; $i++) {
                    $income = (($monthlyincome / 100) * ($initial + $contribution));
                    $total = $initial + $contribution + $income;
                    echo
                    "<tr>
                        <td>{$i}</td>
                        <td>" . number_format($initial, 2) . "</td>
                        <td>" . ($i === 1 ? '---' : number_format($contribution, 2)) . "</td>
                        <td>" . number_format($income, 2) . "</td>
                        <td> " . number_format($total, 2) . " </td>
                      </tr>";
                    $contribution = $monthlycontribution;
                    $initial = $total;
                }
                echo "</tbody>";
            }

            ?>

        </table>

        <br><a href="../index.php">Home page</a>
    </main>

    <footer>
        <p class="footer"> Mariana e Wanderson - &copy; 2023</p>
    </footer>
</body>

</html>