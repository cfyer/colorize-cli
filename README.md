#  Simple PHP library for change cli output color 

## Installation
```
composer require cfyer/colorize-cli
```

## How To Use

```
<?php

require './vendor/autoload.php';

use Cfyer\ColorizeCli\CliColor;

echo CliColor::paint('text', 'yellow', 'bg');
```

or

```
echo CliColor::fg('red') . "Hello" . CliColor::RESET . PHP_EOL;
echo CliColor::bg('red') . "Hello" . CliColor::RESET . PHP_EOL;
echo CliColor::ul('red') . "Hello" . CliColor::RESET . PHP_EOL;
echo CliColor::bold('red') . "Hello" . CliColor::RESET . PHP_EOL;
```

![output](https://drive.google.com/uc?export=view&id=1n9t6FDhrfYlpWmBxYKTYDfaYi8QeaJtq)

### Styles
- background : bg
- foreground : fg
- underline : ul
- bold : bold

### Colors
- black
- red
- green
- yellow
- blue
- purple
- cyan
- white

### Pad

```
echo CliColor::pad("input", 8, '#', 'both') . PHP_EOL;
echo CliColor::bg('blue');
echo CliColor::pad("input", 8, ' ', 'both') . CliColor::RESET;
```
![output](https://drive.google.com/uc?export=view&id=1VQrs5KOi0XFqTl92yxSU4NzPO94se58J)

### Aligns
- left
- right
- both

## Other Examples

```
$mysqli = new mysqli('localhost', 'root', '', 'dbname');
echo CliColor::bold('yellow') . "Connected to {$mysqli->server_info} - ";
echo CliColor::bold('blue') . "{$mysqli->host_info}" . CliColor::RESET;
```
![output](https://drive.google.com/uc?export=view&id=1UPJmGhhD-XYyU6t7wUws91ZMiDbuK0fP)

## License 
The MIT License (MIT). See <a href="https://github.com/cfyer/colorize-cli/blob/master/LICENSE">License File</a> for more information.