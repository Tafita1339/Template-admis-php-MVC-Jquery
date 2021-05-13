<?php $title= 'Connexion';$link='/Projet/public/css/style.css';?>

<?php ob_start();?>
<div id="container">
    <form action="accueil.php" method="POST">
        <h1>Connexion</h1>
        <input type="text" name="nom" placeholder="Entrer le nom d'utilisateur"><br><br>
        <input type="password" name="mdp"placeholder="Entrer le mot de passe" ><br><br>
        <input type="submit" name="submit"  value="S'identifier"><br><br>
        <input type="checkbox" name="" id=""><label for="">Souviens-toi de moi</label><a href="" id="a1">Mot de passe oublié?</a><br>
        <p>OU</p>
        <a href="singUpView.php" id="a2">Créer un compte</a>
    </form>    
</div>
<?php $content= ob_get_clean();?>
<?php require('template2.php')?>