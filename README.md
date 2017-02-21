# puja-stdlib

Puja-Stdlib provides basic functions such as File, Folder and more

<h3>Puja\Stdlib\File\File</h3>
Document document at http://php.net/manual/en/class.splfileobject.php <br />
<strong>Addition functions</strong>
<pre><strong>bool Puja\Stdlib\File\File::isUploadedFile()</strong> // Tells whether the file was uploaded via HTTP POST
Returns TRUE if the file named by filename was uploaded via HTTP POST. This is useful to help ensure that a malicious user hasn't tried to trick the script into working on files upon which it should not be working--for instance, /etc/passwd.</pre>

<pre><strong>bool Puja\Stdlib\File\File::moveUploadedFile()</strong> // Moves an uploaded file to a new location
This function checks to ensure that the file designated by filename is a valid upload file (meaning that it was uploaded via PHP's HTTP POST upload mechanism). If the file is valid, it will be moved to the filename given by destination.</pre>


<h3>Puja\Stdlib\File\Info</h3>
Document document at http://php.net/manual/en/class.splfileinfo.php <br />
<strong>Addition functions</strong>
<pre>
<strong>array Puja\Stdlib\File\Info::getBasenameWithoutExt($subfix = null)</strong>  // Return the file name without ext
<strong>string Puja\Stdlib\File\Info::getContent()</strong>  // Return the file content
</pre>


<h3>Puja\Stdlib\File\Temp</h3>
Document at http://php.net/manual/en/class.spltempfileobject.php

<h3>Puja\Stdlib\Folder\Folder</h3>
Document at http://php.net/manual/en/class.directoryiterator.php

<strong>Addition functions</strong>
<pre>
<strong>array Puja\Stdlib\Folder\Folder::getChildFiles()</strong>  // Return a list of child files in folder
<strong>array Puja\Stdlib\Folder\Folder::getChildFoldes()</strong>  // Return a list of sub folders in folder
<strong>array Puja\Stdlib\Folder\Folder::getChild()</strong>  // Return a list of both child files and sub folders in folder
<strong>array Puja\Stdlib\Folder\Folder::getDirectChildFiles()</strong>  // Return a list of direct child files in folder
<strong>array Puja\Stdlib\Folder\Folder::getDirectChildFoldes()</strong>  // Return a list of direct sub folders in folder
<strong>array Puja\Stdlib\Folder\Folder::getDirectChild()</strong>  // Return a list of both direct child files and direct sub folders in folder
</pre>


