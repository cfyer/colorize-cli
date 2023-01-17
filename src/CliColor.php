<?php

namespace Cfyer\ColorizeCli;

use Cfyer\ColorizeCli\Contracts\CliColorContract;
use Cfyer\ColorizeCli\Exceptions\UnknownStyleTypeException;


class CliColor implements CliColorContract
{
    private static array $bg_colors = array(
        'black' => "\033[40m",
        'red' => "\033[0;41m",
        'green' => "\033[0;42m",
        'yellow' => "\033[0;43m",
        'blue' => "\033[0;44m",
        'purple' => "\033[0;45m",
        'cyan' => "\033[0;46m",
        'white' => "\033[0;47m",
    );
    private static array $fg_colors = array(
        'black' => "\033[0;30m",
        'red' => "\033[0;31m",
        'green' => "\033[0;32m",
        'yellow' => "\033[0;33m",
        'blue' => "\033[0;34m",
        'purple' => "\033[0;35m",
        'cyan' => "\033[0;36m",
        'white' => "\033[0;37m",
    );
    private static array $ul_colors = array(
        'black' => "\033[4;30m",
        'red' => "\033[4;31m",
        'green' => "\033[4;32m",
        'yellow' => "\033[4;33m",
        'blue' => "\033[4;34m",
        'purple' => "\033[4;35m",
        'cyan' => "\033[4;36m",
        'white' => "\033[4;37m",
    );
    private static array $b_colors = array(
        'black' => "\033[1;30m",
        'red' => "\033[1;31m",
        'green' => "\033[1;32m",
        'yellow' => "\033[1;33m",
        'blue' => "\033[1;34m",
        'purple' => "\033[1;35m",
        'cyan' => "\033[1;36m",
        'white' => "\033[1;37m",
    );

    /**
     * Reset Cli Color
     */
    public const RESET = "\033[0m";

    /**
     * Foreground Color
     *
     * @param string $color
     * @return mixed|string
     */
    public static function fg(string $color): string
    {
        return self::$fg_colors[$color];
    }

    /**
     * Background Color
     *
     * @param string $color
     * @return mixed|string
     */
    public static function bg(string $color): string
    {
        return self::$bg_colors[$color];
    }

    /**
     * Bold Foreground Color
     *
     * @param string $color
     * @return mixed|string
     */
    public static function bold(string $color): string
    {
        return self::$b_colors[$color];
    }

    /**
     * Underline Color
     *
     * @param string $color
     * @return mixed|string
     */
    public static function ul(string $color): string
    {
        return self::$ul_colors[$color];
    }

    /**
     * @param string $str
     * @param string $color
     * @param string $type (fg, bg, bold, ul)
     * @return string
     * @throws UnknownStyleTypeException
     */
    public static function paint(string $str, string $color, string $type = 'fg'): string
    {
        if (!in_array($type, array('fg', 'bg', 'ul', 'bold'))){
            throw new UnknownStyleTypeException("unknown style type $type");
        }
        return self::$type($color) . $str . self::RESET;
    }
}