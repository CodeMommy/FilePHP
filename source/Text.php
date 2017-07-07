<?php

/**
 * CodeMommy FilePHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\FilePHP;

/**
 * Class Text
 * @package CodeMommy\FilePHP
 */
class Text
{
    /**
     * @param $file
     * @return bool|string
     */
    public static function read($file)
    {
        return file_get_contents($file);
    }
}