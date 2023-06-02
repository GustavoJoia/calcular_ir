<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <title>Resultado</title>
</head>
<body class="resultado_body">
    <div class = "base">
        <div class="dados_cumprimento">
            <div class="cpf_greet"> 
                <p>Nome:&nbsp</p> <span id="nome" class="nome_resultado"></span>
            </div>
            <div class="cpf_greet">
                <p>CPF:</p> <span id="cpf"></span>
            </div>
        </div>
        
            <div class="org_resultado">
                <div class="rendimento_cumprimento">
                    <p>Com um rendimento anual de&nbsp</p><span id="rendimento"></span>
                    <p id="pali">,&nbspque pertence a alíquota de&nbsp</p><span id="porcentagem"></span><p id="pali2">%</p>
                    <p>:</p>
                </div>
                <div class="resultado_ir">
                    <p id="p"></p> <span id="aliquota"></span> <p id="p2"></p>
                </div>
            </div>
        <a href="./index.php">Voltar</a>
    </div>

    <script type="module" src="script/index.js"></script>
    <script type="module" src="script/tratamento.js"></script>
</body>
</html>