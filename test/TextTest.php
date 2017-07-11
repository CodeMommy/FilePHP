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
    /**
     * Test function of write
     */
    public function testWrite()
    {
        $file = sprintf('%s/file/%s_%s.test', __DIR__, __CLASS__, __FUNCTION__);
        $word = 'test';
        Text::write($file, $word);
        $this->assertEquals($word, Text::read($file));
        Text::delete($file);
    }

    /**
     * Test function of read
     */
    public function testRead()
    {
        $file = sprintf('%s/file/%s_%s.test', __DIR__, __CLASS__, __FUNCTION__);
        $word = 'test';
        Text::write($file, $word);
        $this->assertEquals($word, Text::read($file));
        Text::delete($file);
    }
}