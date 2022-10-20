
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/css/padrao.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('img/csn-icon-white-background.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>@yield('titulo')</title>
</head>

<body>
    <header>
        <img src="{{asset('img/fcsn-capacitar-branco.png')}}" alt="Não foi possivel carregar a imagem">
        <ul>
            <li><a href="/cadastrar/">Cadastro</a></li>
            <li><a href="/agendamento/">Agendamento</a></li>
            <li><a href="/relatorio/">Relatório</a></li>
            <li class="perfil"><a style= "color: black" href="/perfil/{{ Auth::user()->id }}"> Perfil: {{ Auth::user()->name }} </a> </li>
        </ul>
    </header>

    <body>
        @yield('conteudo')
    </body>
<html>

