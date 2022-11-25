<?php include('db-connect.php') ?>
<?php foreach($lista as $perfil): ?>
    <tr>
      <th scope="row"><?php echo $perfil['id']; ?></th>
      <td><?php echo $perfil['nome'];?></td>
      <td><?php echo $perfil['email'];?></td>
      <td>
        <a href="editar.php?id=<?php echo $perfil['id']; ?>" class="btn btn-warning"> Editar </a>
        <a href="apagar.php?id=<?php echo $perfil['id']; ?>" class="btn btn-danger"> Apagar </a>
      </td>
    </tr>
<?php endforeach; ?>
