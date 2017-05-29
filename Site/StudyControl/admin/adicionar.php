<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#adic').addClass('active');
    });
</script>
<h2 class="text-center">Adicionar Disciplina</h2>
<form class="form-horizontal col-xs-8 col-xs-push-2" action="?pg=inserirdb" method="POST">
    <div class="form-group">
        <label class="control-label" for="disciplina">Disciplina: </label>
        <input class="form-control" id="disciplina" name="disciplina" type="text" required="required"/>
    </div>
    <div class="form-group"> 
        <label class="control-label" for="professor">Professor: </label>
        <input class="form-control" id="professor" name="professor" type="text" required="required"/>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" name="Enviar">&ensp;Cadastrar&ensp;</button>
    </div>
</form>