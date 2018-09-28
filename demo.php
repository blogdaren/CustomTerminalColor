<?php
require_once __DIR__ . '/Autoloader.php';

use CustomTerminalColor\Color;

//just keep beauty
echo PHP_EOL;

//level: info
Color::showInfo('1. http://www.blogdaren.com [Info]');
echo PHP_EOL . PHP_EOL;

//level: warning
Color::showWarning('2. http://www.blogdaren.com [Warning]');
echo PHP_EOL . PHP_EOL;

//level: error
Color::showError('3. http://www.blogdaren.com [Error]');
echo PHP_EOL . PHP_EOL;

//level: custom
Color::show('4. http://www.blogdaren.com [Custom]');
echo PHP_EOL . PHP_EOL;

//get colored string and show it
echo Color::getColorfulText('5. http://www.blogdaren.com [Fetch]', 'white', 'cyan');
echo PHP_EOL . PHP_EOL;

//get colored & blinked string and show it
echo Color::getColorfulText('6. http://www.blogdaren.com [Blink]', 'light_blue', 'magenta', array('blink'));
echo PHP_EOL . PHP_EOL;

//get colored & underlined string and show it
echo Color::getColorfulText('7. http://www.blogdaren.com [Underline]', 'white', 'magenta', 'underline');
echo PHP_EOL . PHP_EOL;

