<?php include("../Queries/read.php"); ?>
<form method="POST" action="./req_banco/update_usuario.php">
    <label for="ID">Código do Usuário:</label>
    <input type="text" readonly value="<?php echo $dados['id_user'] ?>" class="form-control" id="#" name="cod">
    <label for="NomeCompleto">Nome Completo:</label>
    <input type="text" value="<?php echo $dados['usua_nome'] ?>" class="form-control" id="#" name="nome">
    <label for="">CPF: </label>
    <input type="text" value="<?php echo $dados['usua_cpf'] ?>" class="form-control" id="#" name="cpf">
    <label for="">RG </label>
    <input type="text" value="<?php echo $dados['usua_rg'] ?>" class="form-control" id="#" name="rg">
    <label for="">Data de nascimento</label>
    <input type="text" data-inputmask="'mask': '99/99/9999'" value="<?php echo date("d/m/Y", strtotime($dados['usua_nascimento'])); ?>" class="form-control" id="#" name="data">
    <label for="">Sexo</label>
    <input type="text" value="<?php echo $dados['usua_sexo'] ?>" class="form-control" id="#" name="sx">
    <label for="">Endereço </label>
    <input type="text" value="<?php echo $dados['usuaendereco'] ?>" class="form-control" id="#" name="end">
    <label for="">Telefone</label>
    <input type="text" value="<?php echo $dados['usua_telefone'] ?>" class="form-control" id="#" name="tel">
    <label for="">Email </label>
    <input type="text" value="<?php echo $dados['usua_email'] ?>" class="form-control" id="#" name="email">
    <label for="">Perfil </label>
    <input type="text" readonly value="<?php echo $dados['perf_nm_perfil'] ?>" class="form-control" id="#" name="#">
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
        <input type="submit" value="Editar" class="btn btn-primary">
    </div>
</form>