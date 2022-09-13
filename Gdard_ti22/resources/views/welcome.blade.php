<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>API REST</title>
  </head>
  <body>
    <h1 class="bg-primary text-white text-center">API REST DINAMICA</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <label for="name">NOMBRE DE LA API:</label>

        <input type="text" id="name" name="name" required
            minlength="4" maxlength="8" size="10">
        <a href="articulos/create" class="btn btn-primary">CREAR</a>
        <table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">NOMBRE DE LA API:</th>
        </tr>
    </thead>
    <tbody>
                <form method="POST">
                <a class="btn btn-info">Editar</a>
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>

  </body>
</html>