<?php session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fun With Flags</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="panel panel-default"style="width:50%; margin:0 auto; margin-top: 5%;">
      <div class="panel panel-default">
        <div class="panel-heading ">
          <h3 class="text-center"># Question 1</h3>
        </div>
      </div>
          <div class="panel panel-body center-block">
            <form class="" action="flagproposition.php" method="POST">
              <p class="text-center">
                <h4 style="text-align: center; padding-bottom: 5%;">Lequel de ces drapeaux est celui des Pays-Bas ?</h4>
              </p>
              <p>
                <?php
                $_SESSION['netherlands'] = "C'est ça ! :-)";
                ?>
              </p>

              <img src="img/1000px-Flag_of_Luxembourg.svg.png" style="width:150px; margin:10px; margin-right: 3%; margin-left: 50px;"alt="Drapeau du Luxembourg" /><input type="radio" name="pays" value="luxembourg" id="">
              <img src="img/Flag_of_France.svg.png" style="width : 150px; margin:10px;" alt="Drapeau de la France" /><input type="radio" name="pays" value="france" id="">
              <img src="img/Flag_of_the_Netherlands.svg.png" style="width : 150px; margin:10px;" alt="drapeau des Pays-Bas" /><input type="radio" name="pays" value="netherlands" id="">
              <div class="center-block" style="width : 50px; padding-bottom : 20px;">
                <button type="submit"class="btn btn-info" style="margin-top:50%">Valider</button>
              </div>

            </form>
          </div>


        </div>
  </body>
</html>
