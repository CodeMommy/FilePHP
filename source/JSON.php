<?php

/**
 * CodeMommy FilePHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\FilePHP;

/**
 * Class JSON
 * @package CodeMommy\FilePHP
 */
class JSON extends Text
{
    /**
     * @param $content
     * @return mixed
     */
    public static function toArrayFromContent($content = '')
    {
        return json_decode($content, true);
    }

    /**
     * @param $file
     * @return mixed
     */
    public static function toArrayFromFile($file)
    {
        $content = self::read($file);
        return self::toArrayFromContent($content);
    }

    /**
     * @param array $array
     * @return string
     */
    public static function toContentFromArray($array = array())
    {
        return json_encode($array);
    }

    /**
     * @param string $file
     * @param array $array
     * @return bool|int
     */
    public static function toFileFromArray($file = '', $array = array())
    {
        $content = self::toContentFromArray($array);
        return self::write($file, $content);
    }
}