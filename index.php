<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JADUAL DARAB</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="center">JADUAL DARAB</h1>
    <fieldset>
        <br>
        <form method="POST">
            <label for="number">Masukkan Nombor:</label>
            <input type="number" name="number" id="number"><br><br>
            <input type="submit" name="generate" value="Jana">
        </form>
        <br>
        <?php
        if (isset($_POST['generate'])) {
            $number = $_POST['number'];
        ?>
            <table align="center" border='1' >
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$number x $i =</td>";
                echo "<td>" . $number * $i . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
            ?>
    </fieldset>
</body>

</html>