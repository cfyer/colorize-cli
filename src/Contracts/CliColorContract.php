<?php

namespace Cfyer\ColorizeCli\Contracts;

interface CliColorContract
{
    public static function bg(string $color);
    public static function fg(string $color);
    public static function ul(string $color);
    public static function bold(string $color);
    public static function paint(string $str, string $color, string $type = 'fg');
    public static function pad(string $input, int $length, string $char = ' ', string $align = 'both');
}