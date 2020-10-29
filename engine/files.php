<?php
function getFiles(string $directory): array {
    return array_filter(
        scandir($directory),
        function($item) use ($directory) {
            return !is_dir($directory . "/" . $item);
        }
    );
}

function uploadFile(string $name, string $destination): bool {
    if(isset($_FILES[$name])) {
        $tmpPath = $_FILES[$name]['tmp_name'];
        $destination = $destination . $_FILES[$name]['name'];
        return move_uploaded_file($tmpPath, $destination);
    }
    return false;
}
