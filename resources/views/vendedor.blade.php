

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <table border="1">
    <tr>
    <th>Nome</th>
<th>Matricula</th>
<th>Comissão</th>
<th>Ações</th>
</tr>
@foreach ($vendedores as $vendedor)
  <tr>
    <td>{{$vendedor->name}}</td>
   <td> {{$vendedor->matricula}} </td>
    <td>{{$vendedor->comissao}}</td>
    <td>

      <form method="POST" action="/deletar_vendedor/{{$vendedor-> id}}">
        @csrf
       {{method_field("DELETE")}}
       <input id="botao" type="submit" value="delete vendedor">
      </form>
    </td>
</tr>
@endforeach
  </table>
  
</body>
</html>

