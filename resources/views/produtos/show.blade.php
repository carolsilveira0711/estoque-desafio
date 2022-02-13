<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do produto</title>
</head>
<body>
    <label for="">Nome</label><br>
    <input type="text" name="nome" value="{{ $produto->nome }}"><br>
    <label for="">Preço</label><br>
    <input type="text" name="preco" value="{{ $produto->preco }}"><br>
    <label for="">Quantidade</label><br>
    <input type="text" name="quantidade" value="{{ $produto->quantidade }}"><br>
</body>
</html>
