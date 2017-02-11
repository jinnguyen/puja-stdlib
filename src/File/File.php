<?php
namespace Puja\Stdlib\File;
class File extends \SplFileObject
{
    public function moveUploadedFile($destination)
    {
        if (false === $this->isUploadedFile()) {
            throw new Exception($this->getRealPath() . ' is not a uploaded file');
        }
        move_uploaded_file($this->getRealPath(), $destination);
    }

    public function isUploadedFile()
    {
        return is_uploaded_file($this->getRealPath());
    }
    
}