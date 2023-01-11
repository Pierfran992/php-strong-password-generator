<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generator Strong Password</title>

    <style>
        .container {
            width: 900px;
            margin: 50px auto;
            text-align: center;
        }
    </style>

    <?php
        // creo il paramentro in get per inviare la lunghezza della password
        $length = $_GET['length'];

        // creo la funzione per generare una password
        function genPassword($length) {
            $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'), array('!', '@', '#', '$', '%', '^', '&', '*'));
            $password = "";
            for ($i = 0; $i < $length; $i++) {
                $password .= $characters[array_rand($characters)];
            }
            return $password;
        }
    ?>
</head>
<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>

        <!-- form per inviare tramite get la lunghezza della password -->
        <form method="get">
            <label for="pswLength">Scegli la lunghezza della password:</label>
            <input type="number" name="length" id="pswLength">
            <input type="submit" value="Crea">
        </form>

        <!-- container in cui stampare la password -->
        <div class="ctn_psw">
            <span>
                <?php
                echo genPassword($length);
                ?>
            </span>
        </div>
    </div>
</body>
</html>