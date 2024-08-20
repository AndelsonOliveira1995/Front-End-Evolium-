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
                            <input type="text" class="white grey-text" name="nome" id="nome">
                            <label for="nome" class="grey-text">
                                <i class="material-icons">person</i> Nome Completo</label>
                        </div>
                        <div class="input-field m3">
                            <input type="number" class="white grey-text" name="telefone" id="telefone">
                            <label for="telefone" class="grey-text">
                                <i class="material-icons">phone</i> Telefone</label>
                        </div>
                        <div class="input-field m3">
                            <input type="email" class="white grey-text" name="email" id="email">
                            <label for="email" class="grey-text">
                                <i class="material-icons">email</i> Endereço de Email</label>
                        </div>
                        <div class="input-field m3">
                            <button type="submit" title="Registrar" class="btn waves-effect blue">
                                <i class="material-icons">send</i>
                            </button>
                            <a href="#modal" class="white-text modal-trigger">Click no link para consultar um número</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal de consulta de números --}}
    <div class="row">
        <div class="col s12 l4 m3 consultar">
            <div class="modal" id="modal">
                <div class="modal-content">
                    <form action="" method="post">
                        @csrf
                        <div class="input-field m3">
                            <input type="search" name="pesquisa" id="pesquisa" class="white grey-text">
                            <label for="pesquisa"><i class="material-icons">search</i></label>
                        </div>
                        <div class="input-field m3">
                            <button class="weves-effect btn red modal-close"><i class="material-icons">close</i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.modal').modal();
        });
    </script>
</body>
</html>
