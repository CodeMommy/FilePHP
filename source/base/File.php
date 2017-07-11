<?php

/**
 * CodeMommy FilePHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\FilePHP;

/**
 * Class File
 * @package CodeMommy\FilePHP
 */
class File
{
    /**
     * Delete
     * @param string $file
     * @return bool
     */
    public static function delete($file = '')
    {
        if (is_file($file)) {
            return unlink($file);
        }
        return false;
    }
}