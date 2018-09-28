## What is it?
A toolkit used to display customizable & colored text on terminal with PHP

## How to use?
```
<?php
require_once __DIR__ . '/Autoloader.php';

use CustomTerminalColor\Color;

//just keep beauty
echo PHP_EOL;

//level: info
Color::showInfo('1. http://www.blogdaren.com [Info]' . PHP_EOL . PHP_EOL);

//level: warning
Color::showWarning('2. http://www.blogdaren.com [Warning]' . PHP_EOL.PHP_EOL);

//level: error
Color::showError('3. http://www.blogdaren.com [Error]' . PHP_EOL . PHP_EOL);

//level: custom
Color::show('4. http://www.blogdaren.com [Custom]' . PHP_EOL . PHP_EOL, 'yellow', 'blue');

//get colored string and show it
echo Color::getColorfulText('5. http://www.blogdaren.com [Fetch]', 'white', 'cyan');
echo PHP_EOL . PHP_EOL;

//get colored & blinked string and show it
echo Color::getColorfulText('6. http://www.blogdaren.com [Blink]', 'light_blue', 'magenta', array('blink'));
echo PHP_EOL . PHP_EOL;

//get colored & underlined string and show it
echo Color::getColorfulText('7. http://www.blogdaren.com [Underline]', 'white', 'magenta', 'underline');
echo PHP_EOL . PHP_EOL;

```

## Demonstrate
![demo](https://github.com/blogdaren/CustomTerminalColor/blob/master/image/demo.png)

## Available Color Code
| Foreground  | Background  |  Decoration      |
| ----------  | ----------  |  ----------      |
| black       | black       |                  |
| red         | red         |                  |
| green       | green       |                  |
| brown       | yellow      |                  |
| blue        | blue        |                  |
| purple      | magenta     |                  |
| cyan        | cyan        |                  |
| light_gray  | light_gray  |                  |
| dark_gray   |             | blink、underline |
| light_red   |             | blink、underline |
| light_green |             | blink、underline |
| light_blue  |             | blink、underline |
| light_purple|             | blink、underline |
| light_cyan  |             | blink、underline |
| white       |             | blink、underline |
| yellow      |             | blink、underline |

