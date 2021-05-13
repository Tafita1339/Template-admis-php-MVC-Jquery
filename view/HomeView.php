<?php $title= 'Connexion';$link='/Projet/public/css/home.css';?>

<?php ob_start();?>
<div class="container-home">
    <div class="page-home">
        <h1  class="h1-home">Bienvenue</h1>
        <p class="p-home">
            Si vous voulez connaitre votre futur metier ainsi que les curcus pour y arriver. Ce site web est bon pour vous. 
            Certs, il vous aide à repondre à la fameuse question: 'Qu'est ce que je vais faire après mon baccalaureat?'. De plus, il vous propose un 
            metier qui correspond à votre personnalité ainsi que votre désir. Si vous voulez plus du détail, n'hesitez pas à cliquer sur commencer.
        </p>
        <button class="button-home"><a href="template.php" style="text-decoration: none;color:white"><span>Commencer</span></a></button>
    </div>
</div>
<?php $content= ob_get_clean();?>
<?php require('template2.php')?>