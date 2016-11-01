<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inscription</title>.
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="form.css" media="screen" title="no title">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="check.js"></script>

</head>
<body>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>



  <div class="titre">
      <h2>Formulaire d'Inscription</h2>
  </div>
  <div id="form">
      <form action="insertUsers.php" method="post" onsubmit="return checkEmail(this);">
          <div class="row">
              <div class="input-field col s6">
                <span id="result"> </br></span>
                   Email : <input pattern=".{4,}" type="email" name="EMAIL" placeholder="Email" required="required" />
                   Confirmer l'email <input pattern=".{4,}" type="email" name="EMAIL2" placeholder="Confirmer l'Email" required="required"/>
                   Mot de passe : <input pattern=".{4,}" type="password" name="password" required="required" />
                   <p>
                     <input type="checkbox" id="test5" required="required"/>
                     <label for="test5">Je n'ai pas lu mais je suis d'accord</label>
                   </p>
                   <br><br>
                    <input class="btn waves-effect waves-light" class="material-icons right" type="submit" value="S'inscrire" name="submit" />

              </div>
          </div>
        </form>
        </div>
  </body>
  </html>
