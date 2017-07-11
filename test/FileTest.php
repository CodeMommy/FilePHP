<?php

/**
 * @author Candison November <www.kandisheng.com>
 */

require_once(__DIR__ . '/../vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use CodeMommy\FilePHP\File;
use CodeMommy\FilePHP\Text;

/**
 * Class FileTest
 */
class FileTest extends TestCase
{
    /**
     * Test function of delete
     */
    public function testDelete()
    {
        $file = sprintf('%s/file/%s_%s.test', __DIR__, __CLASS__, __FUNCTION__);
        Text::write($file, '');
        $isFile = is_file($file);
        $this->assertEquals($isFile, true);
        File::delete($file);
        $isFileAfterDelete = is_file($file);
        $this->assertEquals($isFileAfterDelete, false);
    }
}