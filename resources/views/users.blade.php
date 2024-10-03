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
<th>CPF</th>
<th>Email</th>
<th>Ações</th>
</tr>
@foreach ($users as $user)
  <tr>
    <td>{{$user->name}}</td>
   <td> {{$user->cpf}} </td>
    <td>{{$user->email}}</td>
    <td>

      <form method="POST" action="/deletar_usuario/{{$user-> id}}">
        @csrf
       {{method_field("DELETE")}}
       <input id="botao" type="submit" value="delete user">
      </form>
      <a href="/editar_usuario/{{$user-> id}}">Editar</a>

    </td>
</tr>
@endforeach
  </table>
  
</body>
</html>

