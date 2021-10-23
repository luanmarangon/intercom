<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Modal</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
</html>
<body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Atualizar valores
</button>

<div class="container">
  <form class="form-horizontal col-sm-2" action="." method="POST">
      <div class="form-group">
        <label for="id_price">Preço</label>
        <input type="text" id="id_price" name="movie" class="form-control">
      </div>

    <div class="form-group">
        <div class="">
          <button type="submit" id="id_submit" class="btn btn-primary">Salvar</button>
        </div>
      </div>
  </form>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Atualizar valores</h4>
      </div>
      <div class="modal-body">
        <input type="text" placeholder="Digite o valor">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Atualizar</button>
      </div>
    </div>
  </div>
</div>

</body>