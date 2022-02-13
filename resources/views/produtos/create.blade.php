<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar produto</title>
</head>
<body>
<form action="{{route('registrar_produto')}}" method="POST">
    @csrf
    <label for="">Nome</label><br>
    <input type="text" name="nome"><br>
    <label for="">Preço</label><br>
    <input type="text" name="preco"><br>
    <label for="">Quantidade</label><br>
    <input type="text" name="quantidade"><br><br>
    <button>Salvar</button>
</form>

</body>
</html>
