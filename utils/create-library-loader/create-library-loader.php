<?php

// @todo add interface parser

function generateLibrary($map, $rootPath, $scope)
{
$code ='<?php
// auto-generated file, do not edit
spl_autoload_register(function($className) {
    static $map;
    if (!is_array($map)) {
        $map = array(
' . join("\n", $map) . '
        );
    }
    if (isset($map[$className])) {
        /** @noinspection PhpIncludeInspection */
        require($map[$className]);
        return true;
    }
    return false;
});';
file_put_contents($rootPath . '/' . $scope . '.php', $code);
}

function getDeclaredClasses($path)
{
    // @copyright http://stackoverflow.com/users/569948/frosty22
    $classes = array();

    $namespace = 0;
    $tokens = token_get_all(file_get_contents($path));
    $count = count($tokens);
    $dlm = false;
    for ($i = 2; $i < $count; $i++) {
        if ((isset($tokens[$i - 2][1]) && ($tokens[$i - 2][1] == "phpnamespace" || $tokens[$i - 2][1] == "namespace")) ||
            ($dlm && $tokens[$i - 1][0] == T_NS_SEPARATOR && $tokens[$i][0] == T_STRING)) {
            if (!$dlm) $namespace = 0;
            if (isset($tokens[$i][1])) {
                $namespace = $namespace ? $namespace . "\\" . $tokens[$i][1] : $tokens[$i][1];
                $dlm = true;
            }
        }
        elseif ($dlm && ($tokens[$i][0] != T_NS_SEPARATOR) && ($tokens[$i][0] != T_STRING)) {
            $dlm = false;
        }
        if (($tokens[$i - 2][0] == T_CLASS || $tokens[$i - 2][0] == T_INTERFACE || (isset($tokens[$i - 2][1]) && ($tokens[$i - 2][1] == "phpclass" || $tokens[$i - 2][1] == "phpinterface")))
            && $tokens[$i - 1][0] == T_WHITESPACE && $tokens[$i][0] == T_STRING) {
            $class_name = $tokens[$i][1];
            if (!isset($classes[$namespace])) $classes[$namespace] = array();
            $classes[$namespace][] = $class_name;
        }
    }
    return $classes;
}

function getAllPHPFiles($rootPath)
{
    $directory = new RecursiveDirectoryIterator($rootPath);
    $iterator = new RecursiveIteratorIterator($directory);
    return new RegexIterator($iterator, '/^.+\.php$/i', RecursiveRegexIterator::GET_MATCH);
}

function buildClassMap($rootPath,$scope)
{
    $offset = strlen($rootPath);

    $classMap = array();
    foreach (getAllPHPFiles($rootPath) as $pathInfo) {
        $path = $pathInfo[0];
        $relativePath = str_replace('\\', '/', substr($path, $offset));
        $includePath = '__DIR__ . \'/' . $scope .  $relativePath . '\'';

        $classInfo = getDeclaredClasses($path);
        foreach ($classInfo as $namespace => $classes) {
            $prefix = '';
            if (is_string($namespace)) {
                $prefix = $namespace . '\\';
            }
            foreach ($classes as $class) {
                $fullClassName = '\'' . str_replace('\\', '\\\\', $prefix . $class) . '\'';
                $completeLine = "\t\t\t" . $fullClassName . ' => ' . $includePath . ",";
                $classMap[$fullClassName] = $completeLine;
            }
        }
    }
    return $classMap;
}

$libraryRootPath = realpath(__DIR__ . '/../../library');
$iterator = new DirectoryIterator($libraryRootPath);
foreach ($iterator as $file) {
    /** @var $file \DirectoryIterator */
    if($file->isDir() and !$file->isDot()) {
        $scope = $file->getBasename();
        $scopedLibraryPath = $libraryRootPath . '/' . $scope;
        $classMap = buildClassMap($scopedLibraryPath,$scope);
        generateLibrary($classMap, $libraryRootPath, $scope);
    }
}
