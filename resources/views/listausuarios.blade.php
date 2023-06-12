<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nome</th>
      <th scope="col">telefone</th>
      <th scope="col">endereco</th>
      <th scope="col">opcoes</th>
    </tr>
  </thead>
  <tbody>
    @foreach($results as $item)
    <tr>
        <td>{{$item->id}}</td>
    <td>{{$item->nome}}    </td>
      <td>{{$item->telefone}}</td>
      <td>{{$item->endereco}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
  <a href="/editarusuarios/{{$item->id}}" class="btn btn-primary">detalhes</a>
  <a  href="/apagarusuario/{{$item->id}}" class="btn btn-danger">apagar</a>
 

      </td>
    </tr>
    @endforeach

  </tbody>

</table>
<a href="/formulario">criar usuario</a>
</body>
</html>