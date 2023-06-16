<?php
  if(isset($_GET['fulln'])){
    $fulln = $_GET['fulln'];
    $folder2 = '../' . $fulln;
    function deleteFolder($folder) {
    $success = true;
    if (is_dir($folder)) {
        $files = scandir($folder);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                $success = deleteFolder($folder . DIRECTORY_SEPARATOR . $file) && $success;
            }
        }
        $success = rmdir($folder) && $success;
    } else {
        $success = unlink($folder) && $success;
    }
    return $success;
};
    if (deleteFolder($folder2)) {
    echo "success";
    // Do something else here on success
} else {
    echo "failed";
    // Do something else here on error
}
    
  }
?>