<?php
class TAS
{

  private $TAS_Gamertag;
  private $TAS_Gamerscore;
  private $TAS_Avatar;

  private $TAS_AchievementsPanel;

    public function userinformation($html) {
      $items = $html->find('div[id=oGamer]');

      foreach ($items as $item) {
        $this->TAS_Gamertag       = $item->children(1)->children(0)->children(0)->innertext; // Gamertag
        $this->TAS_Gamerscore     = $this->bracket_remove("(", ")", $item->children(1)->children(0)->children(1)->innertext);
        $this->TAS_Avatar         = "https://avatar-ssl.xboxlive.com/avatar/" . $this->TAS_Gamertag . "/avatar-body.png";
      }

    }

  public function recent_achievements($html) {
      $items = $html->find('div[class=achievementpanel]');

      //$TAGAchievementImg = array();
      foreach ($items as $item) {
        $this->TAS_AchievementsPanel[] = array(
          "Image" => $item->children(0)->children(0)->children(0)->src,                                         //Achievement Image
          "Name" => $item->children(1)->children(0)->children(1)->innertext,                                   //Achievement Name
          "Info" => $item->children(1)->children(1)->children(0)->innertext,                                   //Achievement Description
          "Score" => $this->bracket_remove("(", ")", $item->children(1)->children(0)->children(2)->innertext)   //Achievement Gamerscore
        );
      }
    }

    public function bracket_remove($first_replace, $second_replace, $string) {
        $replace   = array($first_replace, $second_replace);
        $new       = array("", "");
        return str_replace($replace, $new, $string);
    }


    public function TASGamertag() {
          return $this->TAS_Gamertag;
    }

    public function TASGamerscore() {
          return $this->TAS_Gamerscore;
    }

    public function TASAvatar() {
          return $this->TAS_Avatar;
    }

    public function TASRecentAchievements() {
          return $this->TAS_AchievementsPanel;
    }
}

?>
