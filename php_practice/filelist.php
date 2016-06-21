<?php        
/**      
* PHP���г�Ŀ¼�е�Ŀ¼���ļ��ļ��ַ���      
*/       
//����PHP4��PHP5��д��        
 
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
        
//PHP5�еļ򵥷���        
 
function getFileList2($directory) {        
    $files = array();        
    if(is_dir($directory)) {        
        if($files = scandir($directory)) {        
            $files = array_slice($files,2);        
        }        
    }        
    return $files;        
}        
        
//ʹ��PHP5��������д��        
 
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
        
//���Դ���        
 
$dir = dirname(__FILE__);        
var_dump(getFileList3($dir));        
?>