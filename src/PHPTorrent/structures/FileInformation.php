<?php

/**
 * File Infomation Structure
 */
class FileInformation{
    
    /**
     * The full filename relative to torrent's info name.
     * @note a null or empty name means that this is the only file
     * and takes up the name in torrent info.
     * @var String
     */
    public $name;
    
    /**
     * The size of the file in bytes.
     * @var Interger
     */
    public $size;
    
    /**
     * 
     * @var Interger
     */
    public $completed;   

    /* ----- ? ----- */
    
    /**
     * Whether this file should be downloaded or skipped
     * @var Bool
     */
    public $active; 
}