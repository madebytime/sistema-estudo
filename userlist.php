<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <link href="./Dependencies/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./Styles/sidebar.css" rel="stylesheet">
    <script src="./Dependencies/jquery/jquery.min.js"></script>
    <script src="./Dependencies/bootstrap/js/bootstrap.bundle.min.js"></script>

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
                <h3 class="mt-4">Registro de Usuários</h3>
                <table class="table table-hover">
                  
    <?php include("./Queries/read.php")?>              
    <thead>
      <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Data de Nasicimento</th>
        <th>Endereço</th>
        <th>Sexo</th>
        <th>Telefone</th>
        <th>CPF</th>
        <th>RG</th>
        <th>E-mail</th>
        <th>Butao</th>

      </tr>
    </thead>
    <tbody>
    <?php foreach ($dados as $value) { ?>
    <tr>
      <td><?php echo $value['usua_nome'] ?></td> 
      <td><?php echo $value['usua_sobrenome'] ?></td>
      <td><?php echo $value['usua_nascimento'] ?></td>
      <td><?php echo $value['usua_endereco'] ?></td>
      <td><?php echo $value['usua_sexo'] ?></td>
      <td><?php echo $value['usua_telefone'] ?></td>
      <td><?php echo $value['usua_cpf'] ?></td>
      <td><?php echo $value['usua_rg'] ?></td>
      <td><?php echo $value['usua_email'] ?></td>
      <td>
      <button class='btn btn-primary'>Editar</button>
      <a href="destroy.php?=<?php echo $value['cod_users'] ?>" class="btn btn-danger">Delete</a>
      
      </td>
      
    </tr>
    <?php } ?>

    </tbody>
  </table>
               
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
   

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>