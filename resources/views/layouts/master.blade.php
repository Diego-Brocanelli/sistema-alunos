<html>
    <head>
        <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Gerenciador de Alunos</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Alunos <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Pesquisar</a></li>
                                <li><a href="#">Cadastrar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <footer>
                        <p>Sistema de gerenciamento de alunos | desenvolvido com micro-framework <a href="http://lumen.laravel.com/docs" target="blanck" title="Lumen - micro-framework (aber em nova janela)">Lumen</a> </p>
                    </footer>
                <div>
            <div>
        </div>
        <script src="/js/jquery-1.10.2.min.js"></script>
        <script src="/css/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>