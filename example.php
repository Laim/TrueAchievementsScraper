<?php
  require_once(dirname(__FILE__) . "/include/tasconfiguration.php");
  require_once(dirname(__FILE__) . "/include/tasloader.php");
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

    <p>
      <?php print($TAS->TASRecentAchievements()[0]['Name']);?>
      <?php var_dump($TAS->TASRecentAchievements());?>

  </body>
</html>
