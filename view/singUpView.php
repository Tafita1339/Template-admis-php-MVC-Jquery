<?php $title= 'Créer un compte';$link ='/Projet/public/css/css.css'?>

<?php ob_start();?>
<div id="container">
    <form action="loginView copy.php" method="POST">
            <h1 align="center">Créer un compte</h1>
            <label for="id_Name" class="label">Nom:</label><input type="text" name="names" placeholder="RAMANITRA" id="id_Name"><br>

            <label for="id_Last" class="label">Prénom:</label><input type="text" name="lastName" placeholder="Tafita" id="id_Last"><br>

            <label for="id_Birth " class="label">Date de naissance:</label><input type="date" name="dateBirth" id="id_Birth " placeholder="00/00/00"><br>

            <label for="id_Place" class="label">Lieu de naissance:</label><input type="text" name="birthPlace" id="id_Place" placeholder="Antananarivo"><br><br>

            <label class="label" id="sexe">Choisissiez votre sexe: <input type="radio" name="sex" id="id_M"value="M"></label><label for="id_M">Masculin</label>

            <input type="radio" name="sex" id="id_F" value="F"><label for="id_F">Feminin</label><br><br>

            <label for="email"class="label">Email:</label><input type="email" name="email" id="email" placeholder="example@domaine"><br>

            <label for="id_user" class="label">Nom d'utilisateur:</label><input type="text" name="userName" placeholder="koto" id="id_user"><br>

            <label for="pwd"class="label">Mot de passe:</label><input type="password" name="passwords" id="pwd" placeholder="Au moins huit caractères"><br>

            <label for="repwd"class="label">Confirmation du mot de passe:</label><input type="password" name="pwd" id="repwd" placeholder="Retaper ici votre mot de passe"><br><br>
            
            <input type="submit" name="submit"  value="Créer maintenant"><br>
    </form>   
</div>
<?php $content= ob_get_clean();?>
<?php require('template2.php')?>
