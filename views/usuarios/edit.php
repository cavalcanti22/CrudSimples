

<form method="POST" class="col col-lg-6">
<h1 class="mx-auto"><?=$titulo;?></h1>

   <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Nome" name="nome" value="<?=$usuario['nome']; ?>">
    <small id="nome" class="form-text text-muted">preencha o seu nome</small>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="email" name="email" value="<?=$usuario['email']; ?>">
    <small id="email" class="form-text text-muted">preencha o seu Email</small>
  </div>


   <div class="form-group">
    <label for="cpf">Cpf</label>
    <input type="text" class="form-control" id="cpf" aria-describedby="cpf" placeholder="cpf" name="cpf" value="<?=$usuario['cpf']; ?>">
    <small id="cpf" class="form-text text-muted">preencha o seu cpf</small>
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
<div class="form-group">
  <a href="<?=site_url()?>"> Retornar</a>
  </div>
   

</form>