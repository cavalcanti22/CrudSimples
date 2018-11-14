<h1 class="mx-auto"><?=$titulo;?></h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Cpf</th>
      <th scope="col">       <a href="<?=site_url()?>Usuarios/add" style="color: green;" >
        <i class="fas fa-user-plus"> Usuário</i>
      </a></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?=$usuario['id'];?></td>
      <td><?=$usuario['nome'];?></td>
      <td><?=$usuario['email'];?></td>
      <td><?=$usuario['cpf'];?></td>
    </tr>

  </tbody>

</table>
<div class="form-group">
  <a href="<?=site_url()?>"> Retornar</a>
</div>


