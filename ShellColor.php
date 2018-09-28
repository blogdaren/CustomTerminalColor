<?php
/**
 * @script   ShellColor.php
 * @brief    display colored text on terminal
 * @author   blogdaren<blogdaren@163.com>
 * @version  1.0.0
 * @modify   2018-09-28
 */

namespace CustomTerminalColor;

class ShellColor
{
    /**
     * foregroud color
     * @var  private
     */
    static private $_foregroundColors = array(
        'black'         => '0;30',
        'red'           => '0;31',
        'green'         => '0;32',
        'brown'         => '0;33',
        'blue'          => '0;34',
        'purple'        => '0;35',
        'cyan'          => '0;36',
        'light_gray'    => '0;37',
        'dark_gray'     => '1;30',
        'light_red'     => '1;31',
        'light_green'   => '1;32',
        'yellow'        => '1;33',
        'light_blue'    => '1;34',
        'light_purple'  => '1;35',
        'light_cyan'    => '1;36',
        'white'         => '1;37',
        /*'black'         => '1;30',
        'red'           => '1;31',
        'green'         => '1;32',
        'brown'         => '1;33',
        'blue'          => '1;34',
        'purple'        => '1;35',
        'cyan'          => '1;36',
        'gray'          => '1;37',*/
    );

    /**
     * background color
     * @var  private
     */
    static private $_backgroundColors = array(
        'black'         => '40',
        'red'           => '41',
        'green'         => '42',
        'yellow'        => '43',
        'blue'          => '44',
        'magenta'       => '45',
        'cyan'          => '46',
        'light_gray'    => '47',
    );

    /**
     * extra decoration
     * @var  private
     */
    static private $_decorations = array(
        'underline'     => '4',
        'blink'         => '5',
    );

    /**
     * @brief    getForegroundColors    
     *
     * @return   array
     */
    static public function getForegroundColors()
    {
        return array_keys(static::coregroundColors);
    }

    /**
     * @brief    getBackgroundColors    
     *
     * @return   array
     */
    static public function getBackgroundColors()
    {
        return array_keys(static::backgroundColors);
    }

    /**
     * @brief    getColoredString   
     *
     * @param    string         $text              原始文本
     * @param    string         $foregroundColor   前景色代码
     * @param    string         $backgroundColor   背景色代码
     * @param    string|array   $decoration        额外修饰代码
     *
     * @return   string
     */
    static public function getColoredString($text = '', $foregroundColor = null, $backgroundColor = null, $decoration = '')
    {
        $coloredString = "";
        $many_decorations = !is_array($decoration) ? array($decoration) : $decoration;

        foreach($many_decorations as $decoration)
        {
            if(isset(static::$_decorations[$decoration])) 
            {
                $coloredString .= "\033[" . static::$_decorations[$decoration] . "m";
            }
        }

        if(isset(static::$_foregroundColors[$foregroundColor])) 
        {
            $coloredString .= "\033[" . static::$_foregroundColors[$foregroundColor] . "m";
        }

        if(isset(static::$_backgroundColors[$backgroundColor])) 
        {
            $coloredString .= "\033[" . static::$_backgroundColors[$backgroundColor] . "m";
        }

        $coloredString .= $text . "\033[0m";

        return $coloredString;
    }

}



