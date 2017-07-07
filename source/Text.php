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
class Text extends File
{
    /**
     * @param $file
     * @return bool|string
     */
    public static function read($file)
    {
        return file_get_contents($file);
    }

    /**
     * @param $file
     * @param $data
     * @return bool|int
     */
    public static function write($file, $data)
    {
        return file_put_contents($file, $data);
    }
}