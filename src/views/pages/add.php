<?php $render('header'); ?>


<div class="container">
    <form action="<?=$base?>/novo" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</div>

<?php $render('footer'); ?>