<?php
require_once __DIR__ . '/Autoloader.php';

use CustomTerminalColor\Color;

//level: info
Color::showInfo('1. http://www.blogdaren.com' . PHP_EOL . PHP_EOL);

//level: warning
Color::showWarning('2. http://www.blogdaren.com' . PHP_EOL.PHP_EOL);

//level: error
Color::showError('3. http://www.blogdaren.com' . PHP_EOL . PHP_EOL);

//level: custom
Color::display('4. http://www.blogdaren.com' . PHP_EOL . PHP_EOL, 'yellow', 'blue');

//get colored string and show it
echo Color::getColoredString('5. http://www.blogdaren.com' . PHP_EOL . PHP_EOL, 'white', 'cyan');
