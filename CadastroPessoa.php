<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <form action="CadastroClientExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Cliente</legend>
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" >
            </div>
            <div>
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereço" id="endereço">
            </div>
            <div>
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro">
            </div>
            <div>
            <label for="Ativo">Ativo:</label>
            <input type="hidden" name="ativo" id="ativo" label for="Ativo">Sim</label>
            <input type="checkbox" name="sim" id="sim" value="1" label for="Ativo">Não</label>
            <input type="checkbox" name="não" id="não" value="2">
            </div>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>
    </form>
    <br><a href="index.html" ><input type="button" value="voltar"></input></a>
</body>
</html>