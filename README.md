#  Simple PHP library for change cli output color 

## Installation
```
composer require cfyer/colorize-cli
```

## How To Use

```
<?php

requre './vendor/autoload.php';

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

## Styles
- background : bg
- foreground : fg
- underline : ul
- bold : bold

## Colors
- black
- red
- green
- yellow
- blue
- purple
- cyan
- white

## License 
The MIT License (MIT). See <a href="https://github.com/cfyer/colorize-cli/blob/master/LICENSE">License File</a> for more information.