<?php
    // $d = dir(getcwd());
    // $d = dir("./abhishek/abhi");

    // // echo "Handle: " . $d->handle . "<br>";
    // // echo "Path: " . $d->path . "<br>";
    // // echo $d->read();

    // while (($file = $d->read()) !== false){
    // echo "filename: " . $file . "\n";
    // }
    // $d->close();


    // readfile function throws the output from the given file to the output buffer so you don't need to echo or print the content 
    $a = readfile("./abhi.txt");
?>
