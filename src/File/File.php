<?php
namespace Puja\Stdlib\File;
class File extends \SplFileObject
{
    protected $filename;
    public function __construct ($file_name, $open_mode = 'r', $use_include_path = false, $context = null)
    {
        $this->filename = $file_name;
        if ($context) {
            parent::__construct($file_name, $open_mode, $use_include_path, $context);
        } else {
            parent::__construct($file_name, $open_mode, $use_include_path);
        }

    }

    public function moveUploadedFile($destination)
    {
        if (false === $this->isUploadedFile()) {
            throw new Exception($this->filename . ' is not a uploaded file');
        }
        move_uploaded_file($this->filename, $destination);
    }

    public function isUploadedFile()
    {
        return is_uploaded_file($this->filename);
    }
    
    
}