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
       
        <form>
            <label for="number">Masukkan Nombor:</label>
            <input type="number" name="number" id="number" min="1" max="12" value="<?php echo isset($_GET['number']) ? (int)$_GET['number'] : ''; ?>" onchange="this.form.submit()"><br>
        </form>
        <br>
        <?php
        if (isset($_GET['number'])) {
            $number = (int) $_GET['number'];
        ?>
            <table id="multiplication-table" align="center" border='1'>
                <?php for ($i = 1; $i <= 12; $i++) : ?>
                    <tr>
                        <td><?php echo $number; ?> x <?php echo $i; ?></td>
                        <td>=</td>
                        <td><?php echo $number * $i; ?></td>
                    </tr>
                <?php endfor; ?>
            </table>
        <?php
        } ?>

    </fieldset>
</body>

</html>