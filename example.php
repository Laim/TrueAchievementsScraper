<?php
$gamertag = "NiiNJA+WEASEL"; //REPLACE ANY SPACES WITH +

require("autoload.php");
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>TrueAchievementsScrapper Example</title>
  </head>
  <body>

    <h1>Username, Gamerscore and Avatar Example</h1>
    <p>Hello <?php echo($TAS->TASGamertag());?>. It looks like you have <?php echo($TAS->TASGamerscore());?> gamerscore.</p>

    <img src="<?php echo($TAS->TASAvatar());?>"/>

  </body>
</html>
