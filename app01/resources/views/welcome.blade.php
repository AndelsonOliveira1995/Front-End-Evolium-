<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evolium</title>
    <link rel="stylesheet" href="/css/materialize.min.css">
    <link rel="stylesheet" href="/fonts/material-icons.css">
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>

    <div class="row">
        <div class="col s12 l4 m3 offset-l4 registro">
            <div class="card">
                <div class="card-action">
                    <h5 class="text-center white-text">Registro de Números de Telefones</h5>
                </div>
                <div class="card-content">
                    <form action="" method="post">
                        @csrf
                        <div class="input-field m3">
                            <input type="text" name="nome" id="nome">
                            <label for="nome" class="grey-text">Nome Completo</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/materialize.min.js"></script>
</body>
</html>
