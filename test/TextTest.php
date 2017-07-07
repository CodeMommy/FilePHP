<?php

/**
 * @author Candison November <www.kandisheng.com>
 */

declare(strict_types=1);

require_once(__DIR__ . '/../vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use CodeMommy\FilePHP\Text;

/**
 * Class TextTest
 */
class TextTest extends TestCase
{
    public function testRead()
    {
        $this->assertEquals('text', Text::read('./file/Text.txt'));
    }
}