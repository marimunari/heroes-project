<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastrar Herói</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body background="https://images.squarespace-cdn.com/content/v1/56e88be2746fb97fd1a9dfa5/1492885974855-KZBAE5FOX3NKF2ITUKKU/ke17ZwdGBToddI8pDm48kK5jQIYJ7N4srE-Px2oBNy17gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UdiriEFMO0chXLLKbsU1cWUmjlWwd1qZR3HcYBGaMoPIZ5819XDE-T-fE_EmFUjQwQ/gray-geometric-background+.jpg?format=1500w;">
  <div class="container">
    <div class="form-group">
      <form action=/insert method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div style="text-align: center; font-size: 25px; padding-top: 12px;">
          Cadastrar Herói
        </div>
        <hr>
        <div class="form-row">
          <div class="form-group col-md-6">
              <label>Nome: </label>
              <input class="form-control" type="text" name="nome">
          </div>
          <div class="form-group col-md-6">
              <label>Classe: </label>
              <input class="form-control" type="text" name="classe">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Especialidade: </label>
            <input class="form-control" type="text" name="especialidade">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Vida: </label>
            <input class="form-control" type="number" name="vida">
          </div>
          <div class="form-group col-md-4">
            <label>Defesa: </label>
            <input class="form-control" type="number" name="defesa">
          </div>
          <div class="form-group col-md-4">
            <label>Dano: </label>
            <input class="form-control" type="number" name="dano">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Velocidade de Ataque: </label>
            <input class="form-control" type="text" name="vel_Atq">
          </div>
          <div class="form-group col-md-6">
            <label>Velocidade de Movimento: </label>
            <input class="form-control" type="number" name="vel_Mov">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Foto:</label>
            <input class="form-control" type="file" name="image">
          </div>
        </div>
        <div>
          <input class="btn btn-primary btn-block" type="submit" value="Cadastrar">
        </div>
      </form>
  </div>
  </div>
</body>
<style>
  .container {
    background-color: white;
    box-shadow: 0 0 1em black;
    border-radius: 10px;
    width: 600px;
    margin-top: 27px;
  }
</style>
</html>