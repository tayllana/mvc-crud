<?php $render('header'); ?>

<!-- Base: <?= $base; ?> -->


<div class="container">
    <a href="<?= $base ?>/novo"> Novo Usuário</a>
</div>
<table class="styled-table" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $key => $user) {?>
            <tr>
                <td><?= $user['id']; ?></td>
                <td><?= $user['nome']; ?></td>
                <td><?= $user['email']; ?></td>
                <td>
                    <a href="<?= $base; ?>/usuario/<?=$user['id'];?>/editar">[Editar]</a>
                    <a href="<?= $base; ?>/usuario/<?=$user['id'];?>/excluir" onclick="return confirm('Tem certeza?')">[Excluir]</a>
                </td>
            </tr>
        <?php }?>
    </tbody>
</table>

<?php $render('footer'); ?>