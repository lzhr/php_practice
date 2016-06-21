<?php        
/**      
* PHP中列出目录中的目录和文件的几种方法      
*/       
//兼容PHP4和PHP5的写法        
 
function getFileList($directory) {        
    $files = array();        
    if(is_dir($directory)) {        
        if($dh = opendir($directory)) {        
            while(($file = readdir($dh)) !== false) {        
                if($file != '.' && $file != '..') {        
                    $files[] = $file;        
                }        
            }    
            closedir($dh);        
        }        
    }        
    return $files;        
}        
        
//PHP5中的简单方法        
 
function getFileList2($directory) {        
    $files = array();        
    if(is_dir($directory)) {        
        if($files = scandir($directory)) {        
            $files = array_slice($files,2);        
        }        
    }        
    return $files;        
}        
        
//使用PHP5面向对象的写法        
 
function getFileList3($directory) {        
    $files = array();        
    try {        
        $dir = new DirectoryIterator($directory);        
    } catch (Exception $e) {        
        throw new Exception($directory . ' is not readable');        
    }        
    foreach($dir as $file) {        
        if($file->isDot()) continue;        
        $files[] = $file->getFileName();        
    }        
    return $files;        
}        
        
//测试代码        
 
$dir = dirname(__FILE__);        
var_dump(getFileList3($dir));        
?>