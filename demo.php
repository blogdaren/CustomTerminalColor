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
echo Color::getColorfulText('5. http://www.blogdaren.com [Fetch]' . PHP_EOL . PHP_EOL, 'white', 'cyan');

//get colored & blinked string and show it
echo Color::getColorfulText('6. http://www.blogdaren.com [Blink]' . PHP_EOL . PHP_EOL, 'light_blue', 'magenta', array('blink'));

//get colored & underlined string and show it
echo Color::getColorfulText('7. http://www.blogdaren.com [Underline]' . PHP_EOL . PHP_EOL, 'white', 'magenta', 'underline');




