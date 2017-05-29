<div class="navbar-header menumob"">
  <button style="background: #ffb301;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menugeral" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar menumob"></span>
    <span class="icon-bar menumob"></span>
    <span class="icon-bar menumob"></span>
  </button>
</div>
<div class="row collapse navbar-collapse" style="margin-top: 1px; padding: 0;" id="menugeral">
  <div class="col-xs-12">
    <ul class="nav nav-pills nav-justified menu" role="tablist" style="padding-top: 0">
      <li id="inic" class="active"><a href="admin.php?pg=home">Inicio</a></li>
      <li id="discip"><a href="admin.php?pg=materias">Disciplinas</a></li>
      <li id="adic"><a href="admin.php?pg=adicionar">Adicionar</a></li>
      <li class="text-center">
        <form method="post" action="<?php $PHP_SELF; ?>">
          <span style="font-weight: bold; color: #000;">Usuário: </span>
          <span style="font-weight: normal; color: #000"><?php echo "$usuario[0]"; ?>&emsp;</span>
          <button class="btn btn-danger" name="sair">&ensp;&ensp;Sair&ensp;&ensp;</button>
        </form>
      </li>
    </ul>
  </div>
</div>
