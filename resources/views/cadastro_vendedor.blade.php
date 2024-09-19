<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Vendedor</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<h1>Cadastro de Vendedores</h1>
    <form action="/criar_vendedor" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="matricula">Matricula</label>
        <input type="text" name="matricula">

        <label for="comissao">Comissão</label>
        <input type="string" name="comissao">

        <input id="botao" type="submit" value="Cadastrar">
    </form>
</body>
</html>

