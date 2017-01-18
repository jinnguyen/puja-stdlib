<?php
namespace Puja\Stdlib\Folder;
class Folder extends \DirectoryIterator
{
    protected $path;
    public function __construct($path)
    {
        $this->path = $path;
        parent::__construct($path);
    }

    public function getChildFiles($order = \RecursiveIteratorIterator::SELF_FIRST)
    {
        $childFiles = array();
        $objects = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->path, \RecursiveDirectoryIterator::SKIP_DOTS), $order);
        foreach($objects as $file => $object){
            if ($object->isFile()) {
                $childFiles[] = $file;
            }
        }

        return $childFiles;
    }

    public function getChildFolders($order = \RecursiveIteratorIterator::SELF_FIRST)
    {
        $childFolders = array();
        $objects = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->path, \RecursiveDirectoryIterator::SKIP_DOTS), $order);
        foreach($objects as $folder => $object){
            if ($object->isDir()) {
                $childFolders[] = $folder;
            }
        }

        return $childFolders;
    }

    public function getChild($order = \RecursiveIteratorIterator::SELF_FIRST)
    {
        $childs = array();
        $objects = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->path, \RecursiveDirectoryIterator::SKIP_DOTS), $order);
        foreach($objects as $name => $object){
            $childs[] = $name;
        }

        return $childs;
    }
}