<?php

function getPath(string $relativePath, string $baseDir = '/') :string
{
    $result = [];
    $relativePath = trim($relativePath);

    $folder = explode('/', $relativePath);

    foreach ($folder as $value) {
        switch ($value) {
            case '.':
                break;
            case '..':
                array_pop($result);
                break;
            default:
                $result[] = $value;
        }
    }

    $result = implode('/', $result);

    return $baseDir . '/' . $result;
}

$absolutePath = getPath($_POST['relative'], $_POST['dir']);

var_dump($absolutePath);
