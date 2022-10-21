
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/css/padrao.css')}}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('img/csn-icon-white-background.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @yield('estilos')

    <title>@yield('titulo')</title>
</head>

<body>
    <header>
        <img src="{{asset('img/fcsn-capacitar-branco.png')}}" alt="Não foi possivel carregar a imagem"> 
        <ul>
            <li><a href="/home/">Home</a></li>
            
            @if(Auth::user()->name == 'Administrador')
                <li><a href="/cadastrar/">Cadastro</a></li>
                <li><a href="/relatorio/">Relatório</a></li>
            @else 
                <li><a href="/agendamento/">Agendamento</a></li>
            @endif
         
            <li class="perfil"><a style= "color: black" href="/logout">{{ Auth::user()->name }} </a> </li>
        </ul>
    </header>

    <body>
        @yield('conteudo')
    </body>
        
        <div class="container-fluid" style="margin-top: 30px; background-color: #292944;">
            <footer >
                <div class="footer-container">
                    <img src="{{asset('img/logo-educac-amarelo.png')}}" alt="Fundação CSN" id="imgPhoto-footer">
                </div>
                <div class="footer-container">
                    <ul id="t-footer">CONTATO</ul>
                    <ul>fundacao@csn.com.br</ul>
                </div>
                <div class="footer-container">
                    <div>
                        <ul id="t-footer">REDES SOCIAIS</ul>
                    </div>

                    <div class="link-container">
                        <ul><img class="r-Social-icon" src="{{asset('img/Instagram.svg')}}" style="height: 2.5vh;"><a id="r-Social"
                                href="https://www.instagram.com/fundacaocsn/" target="_blank">Instagram</a></ul>
                    </div>
                    <div class="link-container">
                        <!--target blank faz abrir em nova guia"-->
                        <ul><img class="r-Social-icon" src="{{asset('img/Facebook.svg')}}" style="height: 2.5vh;"><a id="r-Social"
                                href="https://www.facebook.com/fundacaocsn/" target="_blank">Facebook</a></ul>
                    </div>
                </div>
            </footer>
        </div>
 
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/jquery.mask.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    @yield('scripts')
<html>

