---
###### Project Notice

This entire project will likely be rewritten in the near future, the code is a mess (it works) at the moment and it's not nice to look at or use.

---

TrueAchievementsScraper (TAS)
======
TAS is a simple script that allows you to scrape the Xbox Achievements website TrueAchievements. This script is not affiliated with TA or Rich Stone in any form.

Example: [demo-code/tas] (http://demo-code.laimmckenzie.com/tas/example.php)
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
