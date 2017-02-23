TrueAchievementsScraper (TAS)
======
TAS is a simple script that allows you to scrape the Xbox Achievements website TrueAchievements. This script is not affliated with TA or Rich Stone in any form. 

## Set Up
Download the latest version of the script and put it in a folder called "TAS" or something that will allow easy updates in the future. 

To include the script in your project, simple put
```php
<?php
  require("TAS/TASComplete.php");
?>
```
at the top of your script.

Open up the "TASComplete.php" file and change $gamertag to whatever your gamertag is. The default is mine.

## Simple Usage
```php
<?php 
  require("TAS/TASComplete.php");
?>
<p>Hello <?php print($TAS_Gamertag);?>! You have <?php print($TAS_Gamerscore);?> gamerscore.</p>
```

The above will output:

```
Hello NiiNJA WEASEL! You have 39,938 gamerscore.
```

## Dependencies
* [PHP Simple HTML DOM Parser](http://simplehtmldom.sourceforge.net)

## Contact
#### Contributers
* Homepage: http://laimmckenzie.com/trueachievements/
* Email: laim@megalelz.com
* Twitter: [@MEGALELZ](https://twitter.com/MEGALELZ "MEGALELZ on twitter")
