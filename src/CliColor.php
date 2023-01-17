<?php

namespace src;

class CliColor
{
    private string $reset = "\[\033[0m\]";
    private array $bg_colors = array(
        'bg_black' => "\[\033[40m\]",
        'bg_red' => "\[\033[0;41m\]",
        'bg_green' => "\[\033[0;42m\]",
        'bg_yellow' => "\[\033[0;43m\]",
        'bg_blue' => "\[\033[0;44m\]",
        'bg_purple' => "\[\033[0;45m\]",
        'bg_cyan' => "\[\033[0;46m\]",
        'bg_white' => "\[\033[0;47m\]",
    );
    private array $fg_colors = array(
        'fg_black' => "\[\033[0;30m\]",
        'fg_red' => "\[\033[0;31m\]",
        'fg_green' => "\[\033[0;32m\]",
        'fg_yellow' => "\[\033[0;33\]",
        'fg_blue' => "\[\033[0;34\]",
        'fg_purple' => "\[\033[0;35\]",
        'fg_cyan' => "\[\033[0;36\]",
        'fg_white' => "\[\033[0;37\]",
    );
    private array $ul_colors = array(
        'ul_black' => "\[\033[4;30m\]",
        'ul_red' => "\[\033[4;31m\]",
        'ul_green' => "\[\033[4;32m\]",
        'ul_yellow' => "\[\033[4;33\]",
        'ul_blue' => "\[\033[4;34\]",
        'ul_purple' => "\[\033[4;35\]",
        'ul_cyan' => "\[\033[4;36\]",
        'ul_white' => "\[\033[4;37\]",
    );
    private array $b_colors = array(
        'b_black' => "\[\033[1;30m\]",
        'b_red' => "\[\033[1;31m\]",
        'b_green' => "\[\033[1;32m\]",
        'b_yellow' => "\[\033[1;33\]",
        'b_blue' => "\[\033[1;34\]",
        'b_purple' => "\[\033[1;35\]",
        'b_cyan' => "\[\033[1;36\]",
        'b_white' => "\[\033[1;37\]",
    );
}