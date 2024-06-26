<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cadastro de Imovéis </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="cadastroimoveis"> Cadastro de Imovéis</h1>
    <?php include 'cabecalho.php'?>
    <div class="form">
        <form action="formulario" method="post">
            <label for="nome">Nome do Proprietário</label>
            <input type="text" id="nome" name="tipo" required>
            <label for="cpf">CPF/CNPJ ou Passaporte </label>
            <select name="tipo" id="tipo">
                <option value="cpf">CPF</option>
                <option value="cnpj">CNPJ</option>
                <option value="pass">Passaporte</option>
            </select>
            <input type="text" id="cpf" name="cpf" required>
            <label for="nome">E-mail</label>
            <input type="text" id="email" name="email" required>
            <label for="nome">Contatos</label>
            <select name="tipo" id="tipo">
                <option value="cel">Celular</option>
                <option value="res">Residencial</option>
                <input type="text" id="contatos" name="contatos" required>
                <label for="finalidade">Finalidade</label>
            </select>
            <select name="finalidade" id="finalidade">
                <option value="locacao">Locação</option>
                <option value="venda">Venda</option>
            </select>
            <label for="tipo">Tipo de Imóvel</label>
            <select name="tipo" id="tipo">
                <option value="casa">Casa</option>
                <option value="apto">Apartamento</option>
                <option value="kit">Kitnet</option>
                <option value="sala">Sala Comercial</option>
                <option value="terrenoC">Terreno Comercial</option>
                <option value="terreno">Terreno</option>
            </select>

            <label for="valores">Valores</label>
            <input type="valores" id="valores" name="valores" required>
            <select id="tipo" name="tipo" required>
                <option value="admin">Admintração</option>
                <option value="aluno">Usuários</option>
            </select>
            <button type="submit">Cadastrar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    
</body>

</html>