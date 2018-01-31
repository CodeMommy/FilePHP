<?php

/**
 * CodeMommy FilePHP
 * @author Candison November <www.kandisheng.com>
 */

namespace CodeMommy\FilePHP;

use Iterator;

class CsvIterator implements Iterator
{
    /**
     * File
     * @var bool|resource
     */
    private $file;

    /**
     * Key
     * @var int
     */
    private $key = 0;

    /**
     * Current
     * @var
     */
    private $current;

    /**
     * CsvIterator constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->file = fopen($file, 'r');
    }

    /**
     * Destruct
     */
    public function __destruct()
    {
        fclose($this->file);
    }

    /**
     * Rewind
     */
    public function rewind()
    {
        rewind($this->file);
        $this->current = fgetcsv($this->file);
        $this->key = 0;
    }

    /**
     * Valid
     * @return bool
     */
    public function valid()
    {
        return !feof($this->file);
    }

    /**
     * Key
     * @return int|mixed
     */
    public function key()
    {
        return $this->key;
    }

    /**
     * Current
     * @return mixed
     */
    public function current()
    {
        return $this->current;
    }

    /**
     * Next
     */
    public function next()
    {
        $this->current = fgetcsv($this->file);
        $this->key++;
    }
}