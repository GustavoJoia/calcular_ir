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
        <title>Quanto de IR?</title>
    </head>
<body class="index_body">
    <form name="form" method="post" action="../controller/PaganteControl.php">
        <h2>Quanto você paga de IR?</h2>
        <div class="orgNome">
            <input type="text" id="nome" name="nome" oninput="validaNome(this)" placeholder="Nome" required>
            <input type="text" id="sobrenome" name="sobrenome" oninput="validaNome(this)" placeholder="Sobrenome " required>
        </div>

        <input type="text" id="cpf" oninput="mascaraCPF(this)" minlength="14" maxlength="14" placeholder="CPF"  name="cpf" required>

        <input type="text" id="rendimento" oninput="mascaraMoeda(this)" placeholder="Rendimento anual (Separe apenas os centavos [Ex: 25000.81])" name="rendimento" required>

        <button type="submit" id="btnsub"> Enviar </button>
    </form>
</body>
    <script src="script/formatacao.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</html>