<?php
/**
 * @script   Color.php
 * @brief    Color wrapper for ShellColor
 * @author   blogdaren<blogdaren@163.com>
 * @version  1.0.0
 * @modify   2018-09-28
 */
namespace CustomTerminalColor;

use CustomTerminalColor\ShellColor;

class Color
{
    /**
     * @brief    show info in level 
     *
     * @param    string  $string
     *
     * @return   string
     */
    static public function showInfo($string)
    {
        echo ShellColor::getColorfulText($string, 'black', 'green');
    }

    /**
     * @brief    show warn in level 
     *
     * @param    string  $string
     *
     * @return   string
     */
    static public function showWarning($string)
    {
        echo ShellColor::getColorfulText($string, 'black', 'yellow');
    }

    /**
     * @brief    show error in level
     *
     * @param    string  $string
     *
     * @return   string
     */
    static public function showError($string)
    {
        echo ShellColor::getColorfulText($string, 'white', 'red');
    }

    /**
     * @brief    get colored string
     *
     * @param    string  $string
     * @param    string  $fg
     * @param    string  $bg
     *
     * @return   string
     */
    static public function getColorfulText($string, $fg = 'yellow', $bg = 'green', $decoration = '')
    {
        return ShellColor::getColorfulText($string, $fg, $bg, $decoration);
    }

    /**
     * @brief    display colored custom string  -> will be removed in future !!!
     *
     * @param    string  $string
     * @param    string  $fg
     * @param    string  $bg
     *
     * @return   none
     */
    static public function display($string, $fg = 'yellow', $bg = 'green', $decoration = '')
    {
        echo self::show($string, $fg, $bg, $decoration);
    }

    /**
     * @brief    display colored custom string 
     *
     * @param    string  $string
     * @param    string  $fg
     * @param    string  $bg
     *
     * @return   none
     */
    static public function show($string, $fg = 'yellow', $bg = 'green', $decoration = '')
    {
        echo self::getColorfulText($string, $fg, $bg, $decoration);
    }
}
