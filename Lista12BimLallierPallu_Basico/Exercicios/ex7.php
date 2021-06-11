<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Exercício 7</title>
    <style>
        body {
            font-family: 'Fredoka One', cursive;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="../index.html" class="brand-logo"><img src="../img/pngwing.com.png" style="width: 65px;" alt=""></a>
                <a href="#" class="brand-logo center" style="font-family: 'Fredoka One', cursive;">Exercício 7</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../index.html"><i class="material-icons">home</i></a></li>
                    <li><a href="../../"><i class="material-icons">exit_to_app</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container center">
        <div class="row">
            <h1>Conversor de Fahrenheit em Celcius</h1>
            <div class="col s12 m8 l8 push-l2">
                <form action="ex7.php" method="post">
                    <div class="input-field">
                        <input id="input" type="text" class="validate" name="temp">
                        <label for="input" style="font-size: 20px">Entre com uma temperatura em ºF</label>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action" style="font-family: 'Fredoka One', cursive;">Limpar</button>
                    <button class="btn waves-effect waves-light" type="submit" name="action" style="font-family: 'Fredoka One', cursive;">Calcular</button>
                </form>
            </div>
        </div>
        <table>
            <?php
                $temp = $_POST["temp"];
                if (strlen($temp) > 0){
                    echo "<tr>
                            <td>Graus Fahrenheit(F)</td><td>Graus Celcius(C)</td>
                        </tr>";
                    $i=0;
                    for($i=0; $i<=10; $i++) {
                        echo "<tr>";
                        $r=($temp-32)*5/9;
                        echo "<td>" . number_format($temp, 2, ",", " ") . "°F</td><td>" . number_format($r, 2, ",", " ") . "°C</td>";
                        $temp=$temp+1;
                        echo "</tr>";
                    }
                }
            ?>
        </table>
        <div class="divider"></div>
        <ul class="pagination center">
            <li class="waves-effect"><a href="ex5.php"><i class="material-icons">chevron_left</i></a></li>
            <li class="waves-effect"><a href="../index.html"><i class="material-icons">home</i></a></li>
            <li class="waves-effect"><a href="ex1.php">1</a></li>
            <li class="waves-effect"><a href="ex2.php">2</a></li>
            <li class="waves-effect"><a href="ex3.php">3</a></li>
            <li class="waves-effect"><a href="ex4.php">4</a></li>
            <li class="waves-effect"><a href="ex5.php">5</a></li>
            <li class="waves-effect"><a href="ex6.php">6</a></li>
            <li class="active"><a href="ex7.php">7</a></li>
            <li class="waves-effect"><a href="ex8.php">8</a></li>
            <li class="waves-effect"><a href="ex9.php">9</a></li>
            <li class="waves-effect"><a href="ex10.php">10</a></li>
            <li class="waves-effect"><a href="ex8.php"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>