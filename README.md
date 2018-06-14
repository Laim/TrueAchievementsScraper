---
###### Project Notice

This entire project will likely be rewritten in the near future, the code is a mess (it works) at the moment and it's not nice to look at or use.

---

TrueAchievementsScraper (TAS)
======
TAS is a simple script that allows you to scrape the Xbox Achievements website TrueAchievements. This script is not affiliated with TA or Rich Stone in any form.

## Set Up
To include the script in your project, put the following at the top of any page you are wanting to use the script on.
```php
<?php
  $gamertag = "NiiNJA WEASEL";
  require("autoload.php");
?>
```

## Sample Usage
```php
<?php
$gamertag = "NiiNJA WEASEL"; //REPLACE ANY SPACES WITH +

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
```

## Available Functions

```php
TASGamerTag()
TASGamerscore()
TASAvatar()
TASRecentAchievements()
```

TASRecentAchievements is an array that contains Achievement Image, Achievement Name, Achievement Description and Achievement Worth (Gamerscore).

You can call it like:

```php
print($TAS->TASRecentAchievements[0][0]);
```

This would output the first achievement's image.

To view all information available in the function, just call it with print_r or var_dump.
## Dependencies
* [PHP Simple HTML DOM Parser](http://simplehtmldom.sourceforge.net)

## Contact
#### Contributors
* Homepage: http://laimmckenzie.com/
* Email: laim.mckenzie@megalelz.com
* Twitter: [@Lyeuhm](https://twitter.com/Lyeuhm "Laim on twitter")
