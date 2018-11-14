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
    <?php foreach ($usuarios as $usuario ): ?>
      <tr>
        <td><?=$usuario['id'];?></td>
        <td>
          <a href="<?=site_url()?>Usuarios/getOne/<?=$usuario['id'];?>">
            <?=$usuario['nome'];?>
          </a>
          </td>
        <td><?=$usuario['email'];?></td>
        <td><?=$usuario['cpf'];?></td>
        <td>
           <a href="<?=site_url()?>Usuarios/getOne/<?=$usuario['id'];?>">
           <i class="fas fa-eye"></i>
          </a>
          <a href="<?=site_url()?>Usuarios/add" style="color: green;">
            <i class="fas fa-plus-circle"></i>
          </a>
            <a href="<?=site_url()?>Usuarios/remove/<?=$usuario['id'];?>" style="color:red;" >
           <i class="fas fa-minus-circle"></i>
          </a>
             <a href="<?=site_url()?>Usuarios/edit/<?=$usuario['id'];?>" class="primary" >
           <i class="fas fa-edit"></i>
          </a>
        </td>
      </tr>
    <?php endforeach ?>

  </tbody>

</table>

     <div class="col col-lg-12">
          <?php 
      if (isset($_SESSION['feedback'])) {
        echo $_SESSION['feedback'];
      }

        unset($_SESSION['feedback']);
      ?> 
      </div>