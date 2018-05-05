<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>IT Support</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--navegação-->
        <!--Adicionando um comentário de teste-->
        <div class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed"
                            data-toggle="collapse" data-target="#barra-nav">
                        <span class="sr-only">Alternar menu</span>
                    </button>
                    <span style="color: tomato; font-size: 30px;" class="glyphicon glyphicon-info-sign">IT</span>
                </div>
                <div class="collapse navbar-collapse" id="barra-nav">
                    <ul class="nav navbar-right navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Meus chamados</a></li>
                        <li><a href="#">Contato</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon" data-toggle="modal" data-target="#janela">Login</span></a></li>
                                <li><a href="#"><span class="glyphicon">Editar</span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-off">logout</span></a></li>
                            </ul>
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>      
        <!--fim de navegação-->

        <!--formulario de login (modal)-->
        <div class="container">
            <div class="page-header">
                <h1>IT Support</h1>            
                <!--O menu LOGAR acima fazendo referência ao bloco abaixo: data-target="#janela" para id="janela"-->
                <form method="post" action="validar_acesso.php" id="formLogin">
                    <div class="modal fade" id="janela">
                        <!--agrupando em uma janela popup-->
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <!--cabeçalho do form-->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span>&times;</span>
                                    </button>
                                    <h4 class="modal-title">Efetuar login</h4>
                                </div>
                                <!--corpo do form-->
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="usuario" placeholder="Digite seu usuário." required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha." required="required">
                                    </div>
                                </div>                            
                                <!--rodape do form-->                            
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>                                
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#janela">Logar</button>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </form>

                <!--tooltip
                    <button type="submit" class="btn btn-info" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Logar</button>
                -->
            </div>    

            <div>
                <button type="button" class="btn btn-branco">Cadastros</button>
                <button type="button" class="btn btn-branco">Chamados</button>
                <button type="button" class="btn btn-branco">Dashboard</button>
            </div>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script type="text/javascript">
                $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                    $('[data-toggle="popover"]').popover()
                })
            </script>        
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>