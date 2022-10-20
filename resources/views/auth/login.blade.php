
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> <!-- CSS geral -->

    <link rel="icon" type="image/x-icon" href="{{ asset('img/csn-icon-white-background.png') }}">
    <title>Login</title>

</head>

<body>
    <!-- Header -->
    <header>
        <img src="{{ asset('img/fcsn-capacitar-branco.png') }}" alt="Não foi possivel carregar a imagem">
    </header>
    <main>
        <!-- Form-->
        <form method="POST" action="{{ route('login') }}">
            <div id="cartao">
                @csrf
                <span id="login-h1">Login</span>
                <input id="email" placeholder="E-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <br>
                <input id="password" placeholder="Senha" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <br>
                <input type="submit" name="confirmar" id="confirmar" value="Confirmar">
                @if (Route::has('password.request'))
                    <a class="btn btn-link esq-a-senha" href="{{ route('password.request') }}">
                        Esqueceu a senha?
                    </a>
                 @endif
            </div>
        </form>
    </main>

    <!-- Footer -->
    <footer>
        <div id="esq-footer">
            <img src="{{ asset('img/logo-educac-amarelo.png') }}" alt="Imagem Fundação CSN" id="imgPhoto-footer">
        </div>
        <div id="meio-footer">
            <ul id="t-footer">Contato</ul>
            <ul>99 9999-9999</ul>
            <ul>exemplo@gmail.com</ul>
        </div>
        <div id="dir-footer">
            <ul id="t-footer">Redes Sociais</ul>
            <ul><a id="r-Social" href="#">Instagram</a></ul>
            <ul><a id="r-Social" href="#">Facebook</a></ul>
        </div>
    </footer>

</body>

</html>