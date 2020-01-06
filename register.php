<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <link href="./Dependencies/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./Styles/sidebar.css" rel="stylesheet">
    <script src="./Dependencies/jquery/jquery.min.js"></script>
    <script src="./Dependencies/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./Dependencies/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>


</head>

<body>

    <div class="d-flex" id="wrapper">

        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Sistema </div>
            <div class="list-group list-group-flush">
                <a href="register.php" class="list-group-item list-group-item-action bg-light">Cadastro</a>
                <a href="userlist.php" class="list-group-item list-group-item-action bg-light">Registro de Usuários</a>
                <a href="classes.php" class="list-group-item list-group-item-action bg-light">Turmas</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
            </div>
        </div>
        <!-- Conteúdo da Página -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Início<span class="sr-only"></span></a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <h3 class="mt-4">Cadastro de Usuários</h3>

                <form method="POST" action='./Queries/registration.php'>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Nome</label>
                            <input type="text" class="form-control" required name='user_nome' id='user_nome'>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Sobrenome</label>
                            <input type="text" class="form-control" required name='user_sobrenome' id='user_sobrenome'>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label>Data de Nascimento</label>
                            <input type="date" class="form-control" required name='user_nascimento' id='user_nascimento'> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Endereço</label>
                            <input type="text" class="form-control" placeholder="Rua dos Devs, Num 42" name='user_endereco'
                            id='user_endereco' required >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Telefone</label>
                            <input type="text" class="form-control" maxlength="11" minlength="11" required name='user_telefone' 
                            id='user-telefone'>
                        </div>
                        <div class="form-group col-md-4">
                            <label>E-mail</label>
                            <input type="email" class="form-control" required name='user_email' id='user_email'>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>CPF</label>
                            <input type="text" class="form-control" maxlength="11" minlength="11"
                            name='user_cpf' id='user_cpf' required>
                        </div>

                        <div class="form-group col-md-2">
                            <label>RG</label>
                            <input type="text" class="form-control" maxlength="9" minlength="9"
                            name='user_rg' id='user_rg'required>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Sexo</label>
                            <select class="form-control" required  name='user_sexo' id='user_sexo'>
                                <option selected>Escolha</option>
                                <option value='Masculino'>Masculino</option>
                                <option value='Feminino'>Feminino</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit"  class="btn btn-primary">
                        Cadastrar
                    </button>
                    <span id='error_message' class='text-danger'></span>
                    <span id='success_message' class='text-success'></span>
                </form>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>

</html>