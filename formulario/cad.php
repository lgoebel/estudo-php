<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "sem nome";
            $snome = $_GET["snome"] ?? "sem sobrenome";
            echo "Olá, $nome, seu sobrenome é $snome";
        ?>
    </main>
</body>
</html>