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

### Get Color
```
echo CliColor::fg('red') . "Hello" . CliColor::RESET;
```

## Styles
- background : bg
- foreground : fg
- underline : ul
- bold : bold