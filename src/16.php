<?php
// This is a simple PHP script to demonstrate basic file handling and input/output operations.
// It reads a file called "input.txt" from the current directory and prints its contents.

$filename = 'input.txt';

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo $content;
} else {
    echo "The file does not exist.";
}
