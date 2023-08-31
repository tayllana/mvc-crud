<?php $render('header'); ?>


<div class="container">
    <form action="<?=$base?>/usuario/<?=$usuario['id']?>/editar" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= $usuario['nome']?>" equired><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $usuario['email']?>" required><br><br>
        
        <input type="submit" value="Salvar">
    </form>
</div>

<?php $render('footer'); ?>