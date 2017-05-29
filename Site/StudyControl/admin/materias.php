<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#discip').addClass('active');
    });
</script>
<script language='javascript'>
    var url = "";
    function passarID(urlDel) {
        url = urlDel;
    }
    function confirma() {
        location.href = url;
    }
    function mostrar() {
        document.getElementById("resultado").style.display = "block";
    }
</script>

<?php
    
    mysqli_set_charset($conexao, "utf8");
    $busca = "SELECT * FROM disciplinas INNER JOIN notas ON disciplinas.matricula = notas.matricula AND disciplinas.idDisciplina = notas.idDisciplina INNER JOIN numfaltas ON disciplinas.matricula = numfaltas.matricula AND disciplinas.idDisciplina = numfaltas.idDisciplina WHERE disciplinas.matricula = $userID AND notas.matricula = $userID AND numfaltas.matricula = $userID order by nomeDisciplina";
    $todos = mysqli_query($conexao, $busca);

?>

<iframe id="resultado" name="iframe-materias" style="width: 100%; height: 60px; border: none; display: none;" scrolling="no"></iframe>
<form name="materias" method="GET" action="atualizardb.php" target="iframe-materias">
<table class="table table-hover">
    <thead>
        <th class="col-xs-3">Disciplina</th>
        <th class="col-xs-2">Professor</th>
        <th colspan="2" class="text-center">1º Estágio</th>
        <th colspan="2" class="text-center">2º Estágio</th>
        <th colspan="2" class="text-center">3º Estágio</th>
    </thead>
    <tr class="info text-center">
        <td colspan="2"></td>
        <td>Nota</td>
        <td>Faltas</td>
        <td>Nota</td>
        <td>Faltas</td>
        <td>Nota</td>
        <td>Faltas</td>
    </tr>
    <?php while ($dados = mysqli_fetch_array($todos)) { ?>
    
    <tr>
        <td><input style="width: 20px; display: none;" type="text" name="matricula<?=$dados['idDisciplina'];?>" value="<?=$dados['matricula'];?>"><input style="width: 20px; display: none;" type="text" name="idDisciplina<?=$dados['idDisciplina'];?>" value="<?=$dados['idDisciplina'];?>"><input class="form-control" type="text" name="nomeDisciplina<?=$dados['idDisciplina'];?>" value="<?=$dados['nomeDisciplina'];?>"></td>
        <td><input class="form-control" type="text" name="nomeProfessor<?=$dados['idDisciplina'];?>" value="<?=$dados['nomeProfessor'];?>"></td>
        <td class="text-center"><input type="number" name="nota1-<?=$dados['idDisciplina'];?>" class="form-control center-block" style="width: 70px; padding: 5px;" value="<?=$dados['nota1'];?>" max="10" min="0" step="0.01"></td>
        <td class="text-center"><input type="number" name="falta1-<?=$dados['idDisciplina'];?>" class="form-control center-block" style="width: 70px;" value="<?=$dados['falta1'];?>" max="160" min="0"></td>
        <td class="text-center"><input type="number" name="nota2-<?=$dados['idDisciplina'];?>" class="form-control center-block" style="width: 70px; padding: 5px;" value="<?=$dados['nota2'];?>" max="10" min="0" step="0.01"></td>
        <td class="text-center"><input type="number" name="falta2-<?=$dados['idDisciplina'];?>" class="form-control center-block" style="width: 70px;" value="<?=$dados['falta2'];?>" max="160" min="0"></td>
        <td class="text-center"><input type="number" name="nota3-<?=$dados['idDisciplina'];?>" class="form-control center-block" style="width: 70px; padding: 5px;" value="<?=$dados['nota3'];?>" max="10" min="0" step="0.01"></td>
        <td class="text-center"><input type="number" name="falta3-<?=$dados['idDisciplina'];?>" class="form-control center-block" style="width: 70px;" value="<?=$dados['falta3'];?>" max="160" min="0"></td>
        <td><button type="button" class="btn btn-danger btn-xs center-block" data-toggle="modal" data-target=".bs-example-modal-sm" onclick="passarID('?pg=excluirdb&mat=<?=$dados['matricula']; ?>&idDis=<?=$dados['idDisciplina']; ?>')">Excluir</button></td>
    </tr>
    
    <?php } ?>

    <input style="display: none;" type="number" name="idUsuario" value="<?php echo $userID; ?>">
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Deseja realmente excluir?</h4>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" onclick="confirma()">Confirmar</button>
                <button class="btn btn-primary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
      </div>
    </div>

</table>
    <button type="submit" class="btn btn-success" onclick="mostrar();">Salvar</button>
    &emsp;<button class="btn btn-primary" onclick="passarID('?pg=home');confirma();">Cancelar</button>
</form>

<?php
    mysqli_close($conexao);
 ?>