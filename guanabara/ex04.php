<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Estudando Strings</title>
</head>
<body>
    <?php 
        $nome = "Lucas";
        $snome = "Goebel";
        $ano = date('Y');
        const PAIS = "Eu moro no Brasil!";

        echo "Olá $nome! <br><br>";
        print "Meu nome é $nome e meu sobrenome é $snome. " . PAIS . "<br><br>Estamos no ano $ano <br><br>";
        echo 'Olá $nome! <br><br>  ';
        echo "$nome \"Assuncao\" $snome <br><br>";

        echo <<< TESTE
            Olá $nome! <br><br>
            Meu nome é $nome e meu sobrenome é $snome. PAIS Estamos no ano $ano <br><br>

                Olá $nome! <br><br>

                $nome \"Assuncao\" $snome

        TESTE;

        
    ?>
</body>
</html>