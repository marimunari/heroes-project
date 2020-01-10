<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Heróis</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body background="https://images.squarespace-cdn.com/content/v1/56e88be2746fb97fd1a9dfa5/1492885974855-KZBAE5FOX3NKF2ITUKKU/ke17ZwdGBToddI8pDm48kK5jQIYJ7N4srE-Px2oBNy17gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UdiriEFMO0chXLLKbsU1cWUmjlWwd1qZR3HcYBGaMoPIZ5819XDE-T-fE_EmFUjQwQ/gray-geometric-background+.jpg?format=1500w;">
  <div class="container">
    <div class="row">
      @foreach($heroes as $hero)
        <div class="card col-md-3" style="max-width: 40rem; margin-top: 8px; height: 450px;">
          <div style="text-align: center; margin-top: 8px;">
            <img src="{{ asset("storage/heroes/{$hero->nome}.gif") }}" style="height: 50px;">
          </div>
          <div class="card-body" style="text-align: center;">
            <h5 class="card-title" style="margin-bottom: 0;">{{$hero->nome}}</h5>
            <p>{{$hero->classe}}</p>
          </div>
          <ul class="list-group list-group-flush" style="font-size: 0.9rem; text-align: center;">
            <li class="list-group-item" style="height: 60px;">Especialidade: {{$hero->especialidade}}</li>
            <li class="list-group-item" style="height: 40px;">Vida: {{$hero->vida}}</li>
            <li class="list-group-item" style="height: 40px;">Defesa: {{$hero->defesa}}</li>
            <li class="list-group-item" style="height: 40px;">Dano: {{$hero->dano}}</li>
            <li class="list-group-item" style="height: 40px;">Velocidade de Ataque: {{$hero->vel_Atq}}</li>
            <li class="list-group-item" style="height: 40px;">Velocidade de Movimento: {{$hero->vel_Mov}}</li>
          </ul>
          <div class="card-body" style="text-align: center; margin-top: 12px;">
            <a href="{{ route('editar',$hero->id) }}" class="btn btn-info card-link">Editar</a>
            <a href="{{ route('deletar',$hero->id) }}" class="btn btn-danger card-link">Excluir</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  <div style="text-align: right; margin: 18px;">
    <a class="add-btn" href="/cadastrar"><img src="{{ asset("storage/heroes/plus-circle.svg") }}" style="width: 45px; height: 45px; "></a>
  </div>
</div>
</body>  
<style>
  .add-btn{
    position: fixed;
    top: 565px;
    left: 1275px;
  }
</style>
</html>