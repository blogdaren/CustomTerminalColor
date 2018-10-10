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

//get colorful text and show it
$text = Color::getColorfulText('5. http://www.blogdaren.com [Fetch]', 'white', 'cyan');
echo $text . PHP_EOL . PHP_EOL;

//get colorful & blinked text and show it
$text = Color::getColorfulText('6. http://www.blogdaren.com [Blink]', 'light_blue', 'magenta', array('blink'));
echo $text . PHP_EOL . PHP_EOL;

//get colorful & underlined text and show it
$text = Color::getColorfulText('7. http://www.blogdaren.com [Underline]', 'white', 'magenta', 'underline');
echo $text . PHP_EOL . PHP_EOL;

