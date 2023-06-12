<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <div class="container">
        <form action="/postdoformulario" method="post"> 
        @csrf
            <div class="mb-3">
                <label  class="form-label">nome</label>
                <input type="text" class="form-control" name="nome" >
            </div>
            <div class="mb-3">
                <label  class="form-label">telefone</label>
                <input type="text" class="form-control" name='telefone' >
            </div>
            <div class="mb-3">
                <label  class="form-label">endereco</label>
                <input type="text" class="form-control" name='endereco'>
            </div>
            <button type="submit" class="btn btn-warning">enviar</button>
            <a href="/listausuarios">listagem</a>

        </form>

       
    </div>
    
  </body>

</html>