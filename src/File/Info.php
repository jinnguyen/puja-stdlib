<?php
namespace Puja\Stdlib\File;
class Info extends \SplFileInfo
{
    public function getBasenameWithoutExt($suffix = null)
    {
        $filename = $this->getFilename();
        $ext = $this->getExtension();
        return substr($filename, 0, -1 * strlen($ext) - 1) . $suffix;
    }

    public function getContent()
    {
        return  file_get_contents($this->getRealPath());
    }


}