
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>title</title>
        <link href= "../public/css/navbar.css" rel="stylesheet"/> 
        <link href= "../public/css/navbar-responsive.css" rel="stylesheet"/> 
        <link href= "../public/css/login.css" rel="stylesheet"/> 
        <link href= "../public/css/navigation.css" rel="stylesheet"/> 
    </head>
    <body>
        <header class="header-bar">
            <div class="navbar-vertical">
                <div class="navbar-vertical-user"> 
                    <div class="navbar-logo">
                        <img src="../public/images/Logo.ico" alt="logo" class="logo">
                        <p class="p-logo">MADAAP</p>
                    </div>
                    <div class="user-avatar">
                            <img src="../public/images/userDefault.png" alt="Avatar" class="avatar">
                            <p class="p-avatar">Utilisateur</p>
                    </div>
                </div>
                <div class="navbar-vertical-board" >
                    <div class="navbar-vertical-search">  
                        <form action="" method="post" id="navbar-vertical-board-form">
                            <input type="text" placeholder="Rechercher..." name="search">
                            <button type="submit"> <img src="../public/images/ic_search.png" alt="search" srcset=""></button>
                        </form>
                    </div>
                    <div class="navbar-vertical-menu">  
                        <a class='Discribe' href="#">
                            <img src="../public/images/presentation.png" alt="logo" class="logo-Discribe">
                            <p class="p-Discribe">Description</p>
                        </a>
                        <a class='university' href="#">
                            <img src="../public/images/university.png" alt="logo" class="logo-university">
                            <p class="p-university">Universités</p>
                        </a>
                        <a class='job' href="#">
                            <img src="../public/images/job.png" alt="logo" class="logo-job">
                            <p class="p-job">Metier</p>
                        </a>
                        <a class='log' href="#">
                            <img src="../public/images/google-maps.png" alt="logo" class="logo-log">
                            <p class="p-log">Localisation</p>
                        </a>
                        <a class='favoris' href="#">
                            <img src="../public/images/heart.png" alt="logo" class="logo-favoris">
                            <p class="p-favoris">Favoris</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="navbar">
                <div class="navbar-boutton">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <a href="HomeView.php" style="background-color: red; ">Home</a>
                <a href="#news" class="navbar-hover">Menu</a>
                <a href="#news" class="navbar-hover" id="invisible-1">A Propos</a>
                <a href="#news" class="navbar-hover" id="invisible-2">Contact</a>
                <div class="navbar-horizontal-search">  
                    <form action="" method="post" id="navbar-horizontal-board-form">
                        <input type="text" placeholder="Rechercher..." name="search">
                        <button type="submit"> <img src="../public/images/ic_search.png" alt="search" srcset=""></button>
                    </form>
                </div>
                <div class="Login" id="logout">
                    <button type="button" style="width:auto" id="state">Connexion</button>
                </div>
                <div id="Login-id" class="Login-modal">
                    <form class="Login-modal-content login-submiting"  action="../controller/login.php" method="get">
                        <div class="Login-imgcontainer">
                            <span class="Login-close" title="Fermer">&times;</span>
                            <img src="../public/images/userDefault.png" alt="Avatar" class="Login-avatar">
                        </div>
                        <div id="error-id"class="error" >
                            <p>Votre mot de passe ou votre nom d'utilisateur est incorrect.Veuillez le réessayer si vous plaît!</p>
                        </div>
                        <div class="Login-container">
                            <label for="emailLogin"><b>Adress e-mail:</b></label>
                            <input type="email" id="emailLogin" placeholder=" Entrer ici votre Adress e-mail" class="null" name="email" required>

                            <label for="mdp"><b>Mot de Passe:</b></label>
                            <input type="password" id="mdp" placeholder=" Entrer ici votre mot de passe"  class="null" name="passwords" required>
                            <label>
                                <input type="checkbox" checked="checked" name="remember" class="null-1" id="remember"> Souviens de moi?
                            </label>
                            <button type="button" class="clik-button"> Mot de passe oublié?</button>
                        </div>
                        <div>
                            <button type="submit"class="login-submit">Connexion</button>
                        </div>
                        <div class="Login-container-footer">
                            <button type="button" class="Login-cancelbtn">Quitter</button>
                            <button type="button" class="Login-nw">Créer un compte</button>
                        </div>
                    </form>
                </div>
                <div id="sinUp-id" class="sinUp-modal">
                    <form class="sinUp-modal-content sinUp-submiting" action="../controller/conSinUp.php" method="post">
                        <span class="sinUp-close" title="Fermer">&times;</span>
                        <button type="button" class="sinUp-retour">Retour</button>
                        <h1 align="center" class="sinUp-h1" style="color: blue;">Créer un compte</h1>
                        
                        <label for="id_Name" class="sinUp-label">Nom:</label><input type="text" name="names" placeholder="RAMANITRA" id="id_Name"  class="null"required><br>

                        <label for="id_Last" class="sinUp-label">Prénom:</label><input type="text" name="lastName" placeholder="Tafita" id="id_Last"  class="null"required><br>

                        <label for="id_Birth " class="sinUp-label">Date de naissance:</label><input type="date" name="dateBirth" id="id_Birth"  class="null"placeholder="00/00/00"required><br>

                        <label for="id_Place" class="sinUp-label">Lieu de naissance:</label><input type="text" name="birthPlace" id="id_Place"  class="null" placeholder="Antananarivo"required><br><br>

                        <label class="sinUp-label" id="sexe">Choisissiez votre sexe: 
                        <input type="radio" name ="sex" id="id_M" value="M" class="null-1"required></label><label for="id_M">Masculin</label>
                        <input type="radio" name ="sex" id="id_F" value="F" class="null-1"required><label for="id_F">Feminin</label><br><br>

                        <label for="email"class="sinUp-label">Email:</label><input type="email" name="email" id="email" placeholder="example@domaine" class="null"required><br>

                        <label for="id_user" class="sinUp-label">Nom d'utilisateur:</label><input type="text" name="userName" placeholder="koto" id="id_user" class="null"required><br>

                        <label for="password"class="sinUp-label">Mot de passe:</label><input type="password" name="passwords" id="password" minlength="8" maxlength="18" class="null"placeholder="Au moins huit caractères"required><br>

                        <label for="repwd"class="sinUp-label" >Confirmation du mot de passe:</label><input type="password"  id="repwd" minlength="8" maxlength="18" class="null"placeholder="Retaper ici votre mot de passe"required><br><br>
                        
                        <input type="submit" name="submit"  value="Créer maintenant" class="sinUp-submit"><br>
                    </form>   
                </div>
                <div id="alert" class="alert-modale">
                    <div class="alert-content alert-animate">
                        <div class="text-alert" style="text-align: center;">Alert!!!</div> 
                        <h4 style="margin-left: 35px;margin-right:10px;font-size:17px">Veuillez connecter pour accéder à ce contenu</h4>
                        <button type="button" id="logout-oui" class="closebtn-alert">OK</button>
                        <button type="button" id="logout-non" class="logout-0" >Oui</button>
                    </div>
                </div>
                <div id="recup-id" class="recup-modale">
                    <div class="recup-content">
                        <span class="recup-close" title="Fermer">&times;</span>
                        <button type="button" class="recup-retour">Retour</button>
                        <h1 align="center" class="sinUp-h1" style="color: blue;margin-top:50px">Récuperation du compte</h1>
                        <p style="margin-left: 20px;margin-right:20px;text-align: center;margin-top:50px;margin-bottom:30px">Pour récuperer votre compte, veuillez entrer votre adress email. En fin que nous puissions verifier que c'est vraiment vous.</p>
                        <label for="recup-text"><b>Email:</b></label>
                        <input type="email" placeholder=" Entrer ici votre adress email" name="recup-email"  class="null"id="recup-text" required>
                        <input type="submit" name="recup-submit"value="Valider"id="recup-submit"><br>
                    </div>
                </div>
               
            </div>
            <span class="tooltiptext" id="tooltip-id">Veuillez renseigner ce champ.</span>
        </header>
        <nav>
            <div class="nav-body">
                <div>
                </div>
            </div>
        </nav>
        <script type="text/javascript" src="../public/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="../public/js/index.js"> </script>
        <script type="text/javascript" src="../public/js/bd-ajax.js"> </script>
    </body>
</html>