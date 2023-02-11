<?php

namespace Cfyer\ColorizeCli\Tests;

use Cfyer\ColorizeCli\CliColor;
use Cfyer\ColorizeCli\Exceptions\UnknownStyleTypeException;
use PHPUnit\Framework\TestCase;

class CliColorTest extends TestCase
{
    public function testBgMethod()
    {
        $output = CliColor::bg('red');

        $this->assertEquals("\033[0;41m", $output);
    }

    public function testFgMethod()
    {
        $output = CliColor::fg('red');

        $this->assertEquals("\033[0;31m", $output);
    }

    public function testUlMethod()
    {
        $output = CliColor::ul('red');

        $this->assertEquals("\033[4;31m", $output);
    }

    public function testBoldMethod()
    {
        $output = CliColor::bold('red');

        $this->assertEquals("\033[1;31m", $output);
    }

    /**
     * @throws UnknownStyleTypeException
     */
    public function testPaintMethod()
    {
        $output = CliColor::paint('text', 'yellow', 'bg');

        $this->assertEquals("\033[0;43mtext\033[0m", $output);
    }

    public function testPaintMethodThrowsException()
    {
        $this->expectException(UnknownStyleTypeException::class);

        CliColor::paint('text', 'yellow', 'no');
    }

    public function testPadMethod()
    {
        $output = CliColor::pad("input", 4, '#', 'left');

        $this->assertEquals("####input", $output);
    }
}